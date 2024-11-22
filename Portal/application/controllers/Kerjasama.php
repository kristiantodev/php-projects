  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kerjasama extends My_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/kerjasama_model", "M_kerjasama");

    }
	public function index()
	{
		 $data["title"] = "Kerjasama Prodi Teknik Informatika - Universitas CIC";
		 $data["kerjasamaku"] = $this->M_kerjasama->getAll();
		 $this->page_umum('isi/umum/kerjasama',$data);
		
	}
	
}
