  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class penelitian extends My_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model("dosen/penelitian_model", "My_model");
        $this->load->library('form_validation');
        $this->load->library('session');

        if($this->session->userdata('level')!="Dosen"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }

    }

    public function index()
    {
          $data["penelitianku"] = $this->My_model->get_by_user();
          $data["title"] = "My Penelitian";
          $this->page_data('isi/dosen/penelitian/penelitian',$data);
        
    }
	
  public function tambah()
  {
        
        $penelitian = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($penelitian->rules());

        if ($validation->run()) {
            $penelitian->save();
            $this->session->set_flashdata('success', 'Data Berhasil di Simpan...');
            redirect(site_url('page/dosen/penelitian/'));
        }
        $data["title"] = "Tambah Penelitian";
     $this->page_form('isi/dosen/penelitian/tambah', $data);
     
  }

  public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->My_model->delete($id)) {
            $this->session->set_flashdata('success', 'Data Berhasil di Hapus...');
            redirect(site_url('page/dosen/penelitian/'));
        }
    }
  
  public function edit($id = null)
    {
        if (!isset($id)) redirect('page/dosen/penelitian/');
       
        $penelitian = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($penelitian->rules());

        if ($validation->run()) {
            $penelitian->update();
            $this->session->set_flashdata('success', 'Data Berhasil diedit...');
            redirect(site_url('page/dosen/penelitian/'));
        }
        $data["p"] = $penelitian->getById($id);
        if (!$data["p"]) show_404();
     $data["title"] = "Edit Penelitian";
     $this->page_form('isi/dosen/penelitian/edit',$data);
     
    } 
	
}
