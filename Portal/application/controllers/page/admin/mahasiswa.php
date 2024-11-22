  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends My_Controller {
public function __construct()
    {
        parent::__construct();
       
        $this->load->model("admin/mahasiswa_model", "My_model");
        $this->load->library('form_validation');
        $this->load->library('session');

        if($this->session->userdata('level')!="Administrator"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }

    }
    
	public function index()
	{
        
		  $data["mahasiswaku"] = $this->My_model->getAll();
		 $data["title"] = "Daftar Mahasiswa";
		 $this->page_data('isi/admin/mahasiswa/mahasiswa',$data);
		
	}
  public function tambah()
  {
         

        $mahasiswa = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($mahasiswa->rules());

        if ($validation->run()) {
            $a = $this->input->post('nim');
            $config['upload_path']          = './assets/images/mahasiswa/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['file_name']            = $a;
            $config['overwrite']            = true;
            $config['max_size']             = 2024;

            $this->load->library('upload', $config);

            $upload_image = $_FILES['foto']['name'];

            if($upload_image){

              if ($this->upload->do_upload('foto')) {

                 $img = $this->upload->data('file_name');
                 $mahasiswa->save($img);
                 $this->session->set_flashdata('success', 'Data Berhasil di Simpan...');
                 redirect(site_url('page/admin/mahasiswa/')); 

                  }else{

                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('gagal', $error);
                    redirect(site_url('page/admin/mahasiswa/'));

                  }

              }else{
                $img = 'default.jpg';
                $mahasiswa->save($img);
                $this->session->set_flashdata('success', 'Data Berhasil di Simpan...');
                redirect(site_url('page/admin/mahasiswa/'));
              }

            
        }
        $data["title"] = "Tambah Mahasiswa";
        $this->page_form('isi/admin/mahasiswa/tambah',$data);
     
  }

  public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->My_model->delete($id)) {
            $this->session->set_flashdata('success', 'Data Berhasil di Hapus...');
            redirect(site_url('page/admin/mahasiswa/'));
        }
    }
  
  public function edit($id = null)
    {
        if (!isset($id)) redirect('page/admin/mahasiswa/');
       
        $mahasiswa = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($mahasiswa->ruless());

        if ($validation->run()) {
            $a = $this->input->post('nim');
            $config['upload_path']          = './assets/images/mahasiswa/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['file_name']            = $a;
            $config['overwrite']            = true;
            $config['max_size']             = 2024;

            $this->load->library('upload', $config);

            $upload_image = $_FILES['foto']['name'];

            if($upload_image){

              if ($this->upload->do_upload('foto')) {

                 $img = $this->upload->data('file_name');
                 $mahasiswa->update($img);
                 $this->session->set_flashdata('success', 'Data Berhasil di Edit...');
                 redirect(site_url('page/admin/mahasiswa/')); 

                  }else{

                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('gagal', $error);
                    redirect(site_url('page/admin/mahasiswa/'));

                  }

              }else{
                $img = $this->input->post('old_image');
                $mahasiswa->update($img);
                $this->session->set_flashdata('success', 'Data Berhasil di Edit...');
                redirect(site_url('page/admin/mahasiswa/'));
              }
        }

        $data["mahasiswa"] = $mahasiswa->getById($id);
        if (!$data["mahasiswa"]) show_404();
      $data["title"] = "Edit Mahasiswa";
     $this->page_form('isi/admin/mahasiswa/edit',$data);
     
    } 
	
}
