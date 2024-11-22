  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kerjasama extends My_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/kerjasama_model", "My_model");
        $this->load->library('form_validation');
        $this->load->library('session');

        if($this->session->userdata('level')!="Administrator"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }

    }
	public function index()
	{

		  $data["kerjasamaku"] = $this->My_model->getAll();
		 $data["title"] = "Kerjasama";
		 $this->page_data('isi/admin/kerjasama/kerjasama',$data);
		
	}
  public function tambah()
  {
        
        $kerjasama = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($kerjasama->rules());

        if ($validation->run()) {
            $kerjasama->save();
            $this->session->set_flashdata('success', 'Data Berhasil di Simpan...');
            redirect(site_url('page/admin/kerjasama/'));
        }
     $data["title"] = "Tambah Kerjasama";
     $this->page_form('isi/admin/kerjasama/tambah',$data);
     
  }

  public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->My_model->delete($id)) {
            $this->session->set_flashdata('success', 'Data Berhasil di Hapus...');
            redirect(site_url('page/admin/kerjasama/'));
        }
    }
  
  public function edit($id = null)
    {
        if (!isset($id)) redirect('page/admin/kerjasama/');
       
        $kerjasama = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($kerjasama->rules());

        if ($validation->run()) {
            $kerjasama->update();
            $this->session->set_flashdata('success', 'Data Berhasil diedit...');
            redirect(site_url('page/admin/kerjasama/'));
        }

        $data["kerjasama"] = $kerjasama->getById($id);
        if (!$data["kerjasama"]) show_404();
     $data["title"] = "Edit Kerjasama";
     $this->page_form('isi/admin/kerjasama/edit',$data);
     
    } 
	
}
