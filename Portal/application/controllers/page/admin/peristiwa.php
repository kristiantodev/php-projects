  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peristiwa extends My_Controller {
public function __construct()
    {
        parent::__construct();
 
        $this->load->model("admin/peristiwa_model", "My_model");
        $this->load->library('form_validation');
        $this->load->library('session');

        if($this->session->userdata('level')!="Administrator"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }

    }
    
	public function index()
	{
        $data["title"] = "Perisitiwa";
		  $data["peristiwaku"] = $this->My_model->get_by_user();
		
		 $this->page_data('isi/admin/peristiwa/peristiwa',$data);
		
	}

  public function tambah()
  {
        $peristiwa = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($peristiwa->rules());

        if ($validation->run()) {
            $id = rand();
            $config['upload_path']          = './assets/images/peristiwa/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['file_name']            = $id;
            $config['overwrite']            = true;
            $config['max_size']             = 2024;

            $this->load->library('upload', $config);

            $upload_image = $_FILES['foto']['name'];

            if($upload_image){

              if ($this->upload->do_upload('foto')) {

                 $img = $this->upload->data('file_name');
                 $peristiwa->save($id, $img);
                 $this->session->set_flashdata('success', 'Data Berhasil di Simpan...');
                 redirect(site_url('page/admin/peristiwa/')); 

                  }else{

                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('gagal', $error);
                    redirect(site_url('page/admin/peristiwa/')); 

                  }

              }else{
                $img = 'default.jpg';
                $peristiwa->save($id, $img);
                $this->session->set_flashdata('success', 'Data Berhasil di Simpan...');
                redirect(site_url('page/admin/peristiwa/'));
              }
            
        }
     $data["title"] = "Tambah Peristiwa";
     $this->page_form('isi/admin/peristiwa/tambah',$data);
     
  }

  public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->My_model->delete($id)) {
            $this->session->set_flashdata('success', 'Data Berhasil di Hapus...');
            redirect(site_url('page/admin/peristiwa/'));
        }
    }
  
  public function edit($id = null)
    {
        if (!isset($id)) redirect('page/admin/peristiwa/');
       
        $peristiwa = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($peristiwa->rules());

        if ($validation->run()) {
            $config['upload_path']          = './assets/images/peristiwa/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['file_name']            = $this->input->post('id_peristiwa');
            $config['overwrite']            = true;
            $config['max_size']             = 2024;

            $this->load->library('upload', $config);

            $upload_image = $_FILES['foto']['name'];

            if($upload_image){

              if ($this->upload->do_upload('foto')) {

                 $img = $this->upload->data('file_name');
                 $peristiwa->update($img);
                 $this->session->set_flashdata('success', 'Data Peristiwa Berhasil di diedit...');
                 redirect(site_url('page/admin/peristiwa/')); 

                  }else{

                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('gagal', $error);
                    redirect(site_url('page/admin/peristiwa/')); 

                  }

              }else{
                $img = $this->input->post('old_image');
                $peristiwa->update($img);
                $this->session->set_flashdata('success', 'Data Peristiwa Berhasil di diedit...');
                redirect(site_url('page/admin/pengumuman/'));
              }
        }

        $data["peristiwa"] = $peristiwa->getById($id);
        if (!$data["peristiwa"]) show_404();

        $data["title"] = "Edit Peristiwa";
        $this->page_form('isi/admin/peristiwa/edit',$data);
     
    } 
	
}
