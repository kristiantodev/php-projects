  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class publikasi extends My_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model("dosen/publikasi_model", "My_model");
        $this->load->library('form_validation');
        $this->load->library('session');

        if($this->session->userdata('level')!="Dosen"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }

    }

    public function index()
    {
          $data["publikasiku"] = $this->My_model->get_by_user();
          $data["title"] = "Daftar Publikasi";
          $this->page_data('isi/dosen/publikasi/publikasi',$data);
        
    }
	
  public function tambah()
  {
        
        $publikasi = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($publikasi->rules());

        if ($validation->run()) {
            $publikasi->save();
            $this->session->set_flashdata('success', 'Data Berhasil di Simpan...');
            redirect(site_url('page/dosen/publikasi/'));
        }
        $data["title"] = "Tambah Publikasi";
     $this->page_form('isi/dosen/publikasi/tambah', $data);
     
  }

  public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->My_model->delete($id)) {
            $this->session->set_flashdata('success', 'Data Berhasil di Hapus...');
            redirect(site_url('page/dosen/publikasi/'));
        }
    }
  
  public function edit($id = null)
    {
        if (!isset($id)) redirect('page/dosen/publikasi/');
       
        $publikasi = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($publikasi->rules());

        if ($validation->run()) {
            $publikasi->update();
            $this->session->set_flashdata('success', 'Data Berhasil diedit...');
            redirect(site_url('page/dosen/publikasi/'));
        }
        $data["publikasi"] = $publikasi->getById($id);
        if (!$data["publikasi"]) show_404();
     $data["title"] = "Edit Publikasi";
     $this->page_form('isi/dosen/publikasi/edit',$data);
     
    } 
	
}
