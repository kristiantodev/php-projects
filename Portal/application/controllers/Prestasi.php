  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi extends My_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/prestasi_model", "M_prestasi");

    }
	public function index()
	{
		 $data["prestasiku"] = $this->M_prestasi->getAll();
		 $this->page_umum('isi/umum/prestasi',$data);
		
	}
public function baca($slug = null)
    {
        $data=$this->M_prestasi->get_post_by_slug($slug);
		if($data->num_rows() > 0){ // validasi jika data ditemukan
			$x['data']= $data;
			$x["prestasiku"] = $this->M_prestasi->getAll();
			$this->page_umum('isi/umum/detail_prestasi',$x);
		}else{
			//jika data tidak ditemukan, maka kembali ke blog
			redirect('prestasi');
		}
    }
	
}
