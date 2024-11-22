  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Link extends My_Controller {
public function __construct()
    {
        parent::__construct();
 
        $this->load->model("admin/link_model", "My_model");
        $this->load->library('form_validation');
        $this->load->library('session');

        if($this->session->userdata('level')!="Administrator"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }

    }
    
	public function index()
	{
         
		  $data["linkku"] = $this->My_model->getAll();
		 $data["title"] = "Daftar Link";
		 $this->page_data('isi/admin/link/link',$data);
		
	}

  public function tambah()
  {
        

        $link = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($link->rules());

        if ($validation->run()) {
            $link->save();
            $this->session->set_flashdata('success', 'Data Berhasil di Simpan...');
            redirect(site_url('page/admin/link/'));
        }
     $data["title"] = "Tambah Link";
     $this->page_form('isi/admin/link/tambah',$data);
     
  }

  public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->My_model->delete($id)) {
            $this->session->set_flashdata('success', 'Data Berhasil di Hapus...');
            redirect(site_url('page/admin/link/'));
        }
    }
  
  public function edit($id = null)
    {
        if (!isset($id)) redirect('page/admin/link/');
       
        $link = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($link->ruless());

        if ($validation->run()) {
            $link->update();
            $this->session->set_flashdata('success', 'Data Berhasil diedit...');
            redirect(site_url('page/admin/link/'));
        }

        $data["link"] = $link->getById($id);
        if (!$data["link"]) show_404();
     $data["title"] = "Edit Link";
     $this->page_form('isi/admin/link/edit',$data);
     
    } 
	
}
