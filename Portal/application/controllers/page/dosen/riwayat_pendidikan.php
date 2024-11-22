  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class riwayat_pendidikan extends My_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model("dosen/Rpend_model", "My_model");
        $this->load->library('form_validation');
        $this->load->library('session');

        if($this->session->userdata('level')!="Dosen"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }

    }
	
  public function tambah()
  {
        
        $pendidikan = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($pendidikan->rules());

        if ($validation->run()) {
            $pendidikan->save();
            $this->session->set_flashdata('success', 'Riwayat Pendidikan Berhasil di Simpan...');
            redirect(site_url('page/dosen/profil/'));
        }
     $data["title"] = "Tambah Riwayat Pendidikan";
     $this->page_form('isi/dosen/pendidikan/tambah',$data);
     
  }

  public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->My_model->delete($id)) {
            $this->session->set_flashdata('success', 'Riwayat Pendidikan Berhasil di Hapus...');
            redirect(site_url('page/dosen/profil/'));
        }
    }
  
  public function edit($id = null)
    {
        if (!isset($id)) redirect('page/dosen/profil/');
       
        $pendidikan = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($pendidikan->rules());

        if ($validation->run()) {
            $pendidikan->update();
            $this->session->set_flashdata('success', 'Riwayat Pendidikan Berhasil diedit...');
            redirect(site_url('page/dosen/profil/'));
        }

        $data["pendidikan"] = $pendidikan->getById($id);
        if (!$data["pendidikan"]) show_404();
     $data["title"] = "Edit Riwayat Pendidikan";
     $this->page_form('isi/dosen/pendidikan/edit',$data);
     
    } 
	
}
