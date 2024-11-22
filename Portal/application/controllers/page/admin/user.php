  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends My_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/user_model", "My_model");
        $this->load->model("dosen/profildosen_model", "My_profildos");
        $this->load->library('form_validation');
        $this->load->library('session');

        if($this->session->userdata('level')!="Administrator"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }

    }
	public function index()
	{
		  $data["userku"] = $this->My_model->getAll();
		 $data["title"] = "Daftar User";
		 $this->page_data('isi/admin/user/user',$data);
		
	}
  public function tambah()
  {
        $user = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->save();
            $this->session->set_flashdata('success', 'Data Berhasil di Simpan...');
            redirect(site_url('page/admin/user/'));
        }
     $data["title"] = "Tambah User";
     $this->page_form('isi/admin/user/tambah',$data);
     
  }

  public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->My_model->delete($id)) {
            $this->My_profildos->delete($id);
            $this->session->set_flashdata('success', 'Data Berhasil di Hapus...');
            redirect(site_url('page/admin/user/'));
        }
    }
  
  public function edit($id = null)
    {
        if (!isset($id)) redirect('page/admin/user/');
       
        $user = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->ruless());

        if ($validation->run()) {
            $user->update();
            $this->session->set_flashdata('success', 'Data Berhasil diedit...');
            redirect(site_url('page/admin/user/'));
        }

        $data["user"] = $user->getById($id);
        if (!$data["user"]) show_404();
     $data["title"] = "Edit User";
     $this->page_form('isi/admin/user/edit',$data);
     
    } 
	
}
