  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends My_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/kegiatan_model", "M_kegiatan");
        $this->load->library('pagination');
        $this->load->helper('url');

    }
	public function index()
	{
		 
        $params = array();

        $limit_page = 5;
        $page = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0;
        $total = $this->M_kegiatan->get_total();

        if ($total > 0) 
        {
            $params['results'] = $this->M_kegiatan->get_current_page($limit_page, $page * $limit_page);
             
            $config['base_url'] = base_url() . 'kegiatan/index';
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
         $params["title"] = "Kegiatan Seputar Universitas CIC";
		 $this->page_umum('isi/umum/kegiatan', $params);
		
	}

public function baca($slug = null)
    {
        $data=$this->M_kegiatan->get_post_by_slug($slug);
		if($data->num_rows() > 0){
			$x['data']= $data;
			$x["kegiatanku"] = $this->M_kegiatan->terbaru2();
            $this->load->model("admin/gallery_model", "M_gallery");
            $x["fotoku"] = $this->M_gallery->get_foto();
            $x["title"] = "Baca Kegiatan Universitas CIC";
			$this->page_umum('isi/umum/detail_kegiatan',$x);
		}else{
			redirect('kegiatan/');
		}
    }
	
}
