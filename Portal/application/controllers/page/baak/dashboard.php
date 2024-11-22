  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends My_Controller {
public function __construct()
    {
        parent::__construct();
         $this->load->model("tamu_model");
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('statistik_model');

        if($this->session->userdata('level')!="BAAK"){
        	$this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }

    }
	public function index()
	{


         $data["title"] = "Dashboard - BAAK";
         $this->page_data('isi/dashboard_baak',$data);
       
}
    
}
