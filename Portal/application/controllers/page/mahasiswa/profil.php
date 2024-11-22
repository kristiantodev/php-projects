  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profil extends My_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/mhs_model", "My_model");
        $this->load->library('form_validation');
        $this->load->library('session');

        if($this->session->userdata('status')!="Mahasiswa"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('mahasiswa/login/'));
        }

    }
	public function index()
	{
		  
		 $data["title"] = "My Profil";
		 $this->page_mahasiswa('isi/mahasiswa/profil',$data);

        $mhs = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($mhs->ruless());

        if ($validation->run()) {
            $mhs->update();
              $this->session->set_flashdata('success', 'Profil Berhasil di Ubah...');
            redirect(site_url('page/mahasiswa/profil/'));
        }
		
	}

      




 
	
}
