  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends My_Controller {
public function __construct()
    {
        parent::__construct();

        $this->load->model("admin/profil_model", "My_model");
      $this->load->library('form_validation');
        $this->load->library('session');

        if($this->session->userdata('level')!="Administrator"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }

    }
	public function index()
	{
		  $data["profil_ti"] = $this->My_model->getAll(1);
		 $data["title"] = "Informasi Universitas CIC";
		 $this->page_data('isi/admin/profil_ti/profil',$data);
		
	}

   public function edit($id = null)
    {
        if (!isset($id)) redirect('page/admin/profil/');
       
        $profil = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($profil->rules());

        if ($validation->run()) {
            $profil->update();
            $this->session->set_flashdata('success', 'Profil Teknik Informatika Berhasil diedit...');
            redirect(site_url('page/admin/profil/'));
        }

        $data["profil_ti"] = $profil->getById($id);
        if (!$data["profil_ti"]) show_404();
     $data["title"] = "Edit Informasi Teknik Informatika";
     $this->page_form('isi/admin/profil_ti/edit',$data);
     
    } 
     
  
	
}
