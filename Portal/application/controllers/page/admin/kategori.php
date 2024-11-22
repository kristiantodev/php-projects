  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends My_Controller {
public function __construct()
    {
        parent::__construct();
 
        $this->load->model("admin/kategori_model", "My_model");
        $this->load->library('form_validation');
        $this->load->library('session');

        if($this->session->userdata('level')!="Administrator"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }

    }
    
	public function index()
	{
         
		  $data["kategoriku"] = $this->My_model->getAll();
		$data["title"] = "Kategori Artikel";
		 $this->page_data('isi/admin/kategori/kategori',$data);
		
	}

  public function tambah()
  {
        

        $kategori = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($kategori->rules());

        if ($validation->run()) {
            $kategori->save();
            $this->session->set_flashdata('success', 'Data Berhasil di Simpan...');
            redirect(site_url('page/admin/kategori/'));
        }
     $data["title"] = "Tambah Kategori";
     $this->page_form('isi/admin/kategori/tambah',$data);
     
  }

  public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->My_model->delete($id)) {
            $this->session->set_flashdata('success', 'Data Berhasil di Hapus...');
            redirect(site_url('page/admin/kategori/'));
        }
    }
  
  public function edit($id = null)
    {
        if (!isset($id)) redirect('page/admin/kategori/');
       
        $kategori = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($kategori->ruless());

        if ($validation->run()) {
            $kategori->update();
            $this->session->set_flashdata('success', 'Data Berhasil diedit...');
            redirect(site_url('page/admin/kategori/'));
        }

        $data["kategori"] = $kategori->getById($id);
        if (!$data["kategori"]) show_404();
     $data["title"] = "Edit Kategori";
     $this->page_form('isi/admin/kategori/edit',$data);
     
    } 
	
}
