  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends My_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/artikel_model", "M_artikel");
        $this->load->model("admin/kategori_model", "My_kategori");
        $this->load->library('pagination');
        $this->load->helper('url');

    }
	public function index()
	{
		 
        $params = array();

        $limit_page = 5;
        $page = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0;
        $total = $this->M_artikel->get_total();

        if ($total > 0) 
        {
            $params['results'] = $this->M_artikel->get_current_page($limit_page, $page * $limit_page);
             
            $config['base_url'] = base_url() . 'artikel/index';
            $config['total_rows'] = $total;
            $config['per_page'] = $limit_page;
            $config['uri_segment'] = 3;

            $config['num_links'] = 2;
            $config['use_page_numbers'] = TRUE;
            $config['reuse_query_string'] = TRUE;
            
            $config['full_tag_open'] = '<ul class="pagination theme-colored">';
            $config['full_tag_close'] = '</ul>'; 
            $config['first_link'] = '&laquo; First';
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
            $config['last_link'] = 'Last &raquo';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
            $config['next_link'] = 'Next';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '<li>';
            $config['prev_link'] = 'Prev';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '<li>';
            $config['cur_tag_open'] = '<li class="active"><a href="#">';
            $config['cur_tag_close'] = '</a></li>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
             
            $this->pagination->initialize($config);
            $params['links'] = $this->pagination->create_links();
        }
         $this->load->model("admin/gallery_model", "M_gallery");
         $params["fotoku"] = $this->M_gallery->get_foto();
         $params["artikelku2"] = $this->M_artikel->get_all_categories();
         $params["title"] = "Informasi, Artikel & Berita Seputar Program Studi Teknik Informatika - Universitas CIC";
		 $this->page_umum('isi/umum/artikel', $params);
		
	}

	public function kategori($id = null)
	{
		 $this->load->model("admin/gallery_model", "M_gallery");
         $data["title"] = "Kategori Artikel - Program Studi Teknik Informatika - Universitas CIC";
         $data["fotoku"] = $this->M_gallery->get_foto();
		 $data["artikel_cate"] = $this->M_artikel->get_by_kategori($id);
		 $kategori = $this->My_kategori;
		 $data["kategori"] = $kategori->getById($id);
         if (!$data["kategori"]) show_404();
		 $this->page_umum('isi/umum/artikel_kategori',$data);
		
	}

public function baca($slug = null)
    {
        $data=$this->M_artikel->get_post_by_slug($slug);
		if($data->num_rows() > 0){
			$x['data']= $data;
			$x["artikelku"] = $this->M_artikel->terbaru2();
			$x["artikelku2"] = $this->M_artikel->get_all_categories();
            $this->load->model("admin/gallery_model", "M_gallery");
            $x["fotoku"] = $this->M_gallery->get_foto();
            $x["title"] = "Baca Artikel - Program Studi Teknik Informatika - Universitas CIC";
			$this->page_umum('isi/umum/detail_artikel',$x);
		}else{
			redirect('artikel/');
		}
    }
	
}
