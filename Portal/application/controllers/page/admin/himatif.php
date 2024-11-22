  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Himatif extends My_Controller {
public function __construct()
    {
        parent::__construct();

        $this->load->model("admin/himatif_model", "My_model");
      $this->load->library('form_validation');
        $this->load->library('session');

        if($this->session->userdata('level')!="Administrator"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }

    }
	public function index()
	{
		  $data["himatif"] = $this->My_model->getById("himatif");
		  if (!$data["himatif"]) show_404();
          $data["title"] = "Himpunan Mahasiswa Prodi TI";
		  $this->page_data('isi/admin/himatif/himatif',$data);
		
	}

   public function edit()
    {
       
        $himatif = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($himatif->rules());

        if ($validation->run()) {
            $himatif->update();
            $this->session->set_flashdata('success', 'Informasi Himatif Berhasil diedit...');
            redirect(site_url('page/admin/himatif/'));
        }

        $data["himatif"] = $this->My_model->getById("himatif");
        if (!$data["himatif"]) show_404();
     $data["title"] = "Edit Informasi Himatif";
     $this->page_form('isi/admin/himatif/edit',$data);
     
    } 
     
  
	
}
