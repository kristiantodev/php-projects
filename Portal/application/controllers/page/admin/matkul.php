  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matkul extends My_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/matkul_model", "My_model");
        $this->load->library('form_validation');
        $this->load->library('session');

        if($this->session->userdata('level')!="Administrator"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }

    }
	public function index()
	{
		  $data["matkulku"] = $this->My_model->getAll();
		$data["title"] = "Daftar Mata Kuliah";
		 $this->page_data('isi/admin/matkul/matkul',$data);
		
	}
  public function tambah()
  {
        
        $matkul = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($matkul->rules());

        if ($validation->run()) {
            $matkul->save();
            $this->session->set_flashdata('success', 'Data Berhasil di Simpan...');
            redirect(site_url('page/admin/matkul/'));
        }
     $data["title"] = "Tambah Mata Kuliah";
     $this->page_form('isi/admin/matkul/tambah',$data);
     
  }

  public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->My_model->delete($id)) {
            $this->session->set_flashdata('success', 'Data Berhasil di Hapus...');
            redirect(site_url('page/admin/matkul/'));
        }
    }
  
  public function edit($id = null)
    {
        if (!isset($id)) redirect('page/admin/matkul/');
       
        $matkul = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($matkul->ruless());

        if ($validation->run()) {
            $matkul->update();
            $this->session->set_flashdata('success', 'Data Berhasil diedit...');
            redirect(site_url('page/admin/matkul/'));
        }

        $data["matkul"] = $matkul->getById($id);
        if (!$data["matkul"]) show_404();
      $data["title"] = "Edit Mata Kuliah";
     $this->page_form('isi/admin/matkul/edit',$data);
     
    } 
	
}
