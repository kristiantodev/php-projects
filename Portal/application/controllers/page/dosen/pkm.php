  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pkm extends My_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model("dosen/pkm_model", "My_model");
        $this->load->library('form_validation');
        $this->load->library('session');

        if($this->session->userdata('level')!="Dosen"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }

    }

    public function index()
    {
          $data["pkmku"] = $this->My_model->get_by_user();
          $data["title"] = " Daftar Pengabdian Kepada Masyarakat";
          $this->page_data('isi/dosen/pkm/pkm',$data);
        
    }
	
  public function tambah()
  {
        
        $pkm = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($pkm->rules());

        if ($validation->run()) {
            $pkm->save();
            $this->session->set_flashdata('success', 'Data Pengabdian Kepada Masyarakat Berhasil di Simpan...');
            redirect(site_url('page/dosen/pkm/'));
        }
        $data["title"] = "Tambah Data Pengabdian Kepada Masyarakat";
     $this->page_form('isi/dosen/pkm/tambah', $data);
     
  }

  public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->My_model->delete($id)) {
            $this->session->set_flashdata('success', 'Data Pengabdian Kepada Masyarakat di Hapus...');
            redirect(site_url('page/dosen/pkm/'));
        }
    }
  
  public function edit($id = null)
    {
        if (!isset($id)) redirect('page/dosen/pkm/');
       
        $pkm = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($pkm->rules());

        if ($validation->run()) {
            $pkm->update();
            $this->session->set_flashdata('success', 'Data Pengabdian Kepada Masyarakat Berhasil diedit...');
            redirect(site_url('page/dosen/pkm/'));
        }
        $data["p"] = $pkm->getById($id);
        if (!$data["p"]) show_404();
     $data["title"] = "Edit Data Pengabdian Kepada Masyarakat";
     $this->page_form('isi/dosen/pkm/edit',$data);
     
    } 
	
}
