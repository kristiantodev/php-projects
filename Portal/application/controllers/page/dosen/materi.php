  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class materi extends My_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model("dosen/materi_model", "My_model");
        $this->load->library('form_validation');
        $this->load->library('session');

        if($this->session->userdata('level')!="Dosen"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }

    }

    public function index()
    {
          $data["materiku"] = $this->My_model->get_by_user();
          $data["title"] = "Daftar Materi Kuliah";
          $this->page_data('isi/dosen/materi/materi',$data);
        
    }
	
  public function tambah()
  {
        
        $materi = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($materi->rules());

        if ($validation->run()) {
            $id = $this->input->post('nm_materi');
            $config['upload_path']          = './assets/file/materi/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf|doc|docx|ppt|pptx|xls|xlsx|rar|zip';
            $config['file_name']            = $id;
            $config['overwrite']            = true;
            $config['max_size']             = 2024;

            $this->load->library('upload', $config);

            $upload_image = $_FILES['file']['name'];

            if($upload_image){

              if ($this->upload->do_upload('file')) {

                 $img = $this->upload->data('file_name');
                 $materi->save($img);
                 $this->session->set_flashdata('success', 'Data Berhasil di Simpan...');
                 redirect(site_url('page/dosen/materi/'));

                  }else{

                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('gagal', $error);
                   redirect(site_url('page/dosen/materi/'));

                  }

              }else{
                $img = 'default.jpg';
                $materi->save($img);
                $this->session->set_flashdata('success', 'Data Berhasil di Simpan...');
                redirect(site_url('page/dosen/materi/'));
              }
           
        }
     $data["matkulku"] = $materi->getMatkul2();
     $data["title"] = "Tambah Materi Kuliah";
     $this->page_form('isi/dosen/materi/tambah',$data);
     
  }

  public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->My_model->delete($id)) {
            $this->session->set_flashdata('success', 'Data Berhasil di Hapus...');
            redirect(site_url('page/dosen/materi/'));
        }
    }
  
  public function edit($id = null)
    {
        if (!isset($id)) redirect('page/dosen/materi/');
       
        $materi = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($materi->rules());

        if ($validation->run()) {
          $id = $this->input->post('nm_materi');
            $config['upload_path']          = './assets/file/materi/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf|doc|docx|ppt|pptx|xls|xlsx|rar|zip';
            $config['file_name']            = $id;
            $config['overwrite']            = true;
            $config['max_size']             = 2024;

            $this->load->library('upload', $config);

            $upload_image = $_FILES['file']['name'];

            if($upload_image){

              if ($this->upload->do_upload('file')) {

                 $img = $this->upload->data('file_name');
                 $materi->update($img);
                 $this->session->set_flashdata('success', 'Data Berhasil diedit...');
                 redirect(site_url('page/dosen/materi/'));

                  }else{

                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('gagal', $error);
                   redirect(site_url('page/dosen/materi/'));

                  }

              }else{
                $img = $this->input->post('old_image');
                $materi->update($img);
                $this->session->set_flashdata('success', 'Data Berhasil diedit...');
                redirect(site_url('page/dosen/materi/'));
              }
            
        }
        $data["matkulku"] = $materi->getMatkul2();
        $data["materi"] = $materi->getById($id);
        if (!$data["materi"]) show_404();
     $data["title"] = "Edit Materi Kuliah";
     $this->page_form('isi/dosen/materi/edit',$data);
     
    } 
	
}
