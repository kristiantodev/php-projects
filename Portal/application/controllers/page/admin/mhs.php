  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mhs extends My_Controller {
public function __construct()
    {
        parent::__construct();
 
        $this->load->model("admin/mhs_model", "My_model");
        $this->load->library('form_validation');
        $this->load->library('session');

        if($this->session->userdata('level')!="Administrator"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }

    }
    
	public function index()
	{
        

          $data["title"] = "Data Mahasiswa Teknik Informatika STMIK CIC";
		      $data["mhsku"] = $this->My_model->getAll();
      		$this->page_data('isi/admin/mhs/mhs',$data);
		
	}

public function tambah()
  {
        $mhs = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($mhs->rules());

        if ($validation->run()) {
            $mhs->save();
            $this->session->set_flashdata('success', 'Data Mahasiswa Berhasil ditambah...');
            redirect(site_url('page/admin/mhs/tambah'));
        }

          $data["title"] = "Tambah Data Mahasiswa Teknik Informatika STMIK CIC";
          $this->page_form('isi/admin/mhs/tambah',$data);
  }  

public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->My_model->delete($id)) {
            $this->session->set_flashdata('success', 'Data Berhasil di Hapus...');
            redirect(site_url('page/admin/mhs/'));
        }
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('page/admin/mhs/');
       
        $mhs = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($mhs->ruless());

        if ($validation->run()) {
            $mhs->update();
            $this->session->set_flashdata('success', 'Data Berhasil diedit...');
            redirect(site_url('page/admin/mhs/'));
        }

        $data["mhs"] = $mhs->getById($id);
        if (!$data["mhs"]) show_404();
      $data["title"] = "Edit Data Mahasiswa";
     $this->page_form('isi/admin/mhs/edit',$data);
     
    } 
  
	
}
