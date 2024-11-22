  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class penunjang extends My_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model("dosen/penunjang_model", "My_model");
        $this->load->library('form_validation');
        $this->load->library('session');

        if($this->session->userdata('level')!="Dosen"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }

    }

    public function index()
    {
          $data["penunjangku"] = $this->My_model->get_by_user();
          $data["title"] = "Daftar Kegiatan Penunjang";
          $this->page_data('isi/dosen/penunjang/penunjang',$data);
        
    }
	
  public function tambah()
  {
        
        $penunjang = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($penunjang->rules());

        if ($validation->run()) {
          $id = rand();
            $config['upload_path']          = './assets/images/sertifikat/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['file_name']            = $id;
            $config['overwrite']            = true;
            $config['max_size']             = 2024;

            $this->load->library('upload', $config);

            $upload_image = $_FILES['sertifikat']['name'];

            if($upload_image){

              if ($this->upload->do_upload('sertifikat')) {

                 $img = $this->upload->data('file_name');
                 $penunjang->save($id, $img);
                 $this->session->set_flashdata('success', 'Data Kegiatan Penunjang Berhasil di Simpan...');
                 redirect(site_url('page/dosen/penunjang/')); 

                  }else{

                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('gagal', $error);
                    redirect(site_url('page/dosen/penunjang/'));

                  }

              }else{
                $img = 'default.jpg';
                $penunjang->save($id, $img);
                $this->session->set_flashdata('success', 'Data Kegiatan Penunjang Berhasil di Simpan...');
                redirect(site_url('page/dosen/penunjang/'));
              }
            
        }
        $data["title"] = "Tambah Kegiatan Penunjang";
     $this->page_form('isi/dosen/penunjang/tambah', $data);
     
  }

  public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->My_model->delete($id)) {
            $this->session->set_flashdata('success', 'Data Kegiatan Penunjang Berhasil di Hapus...');
            redirect(site_url('page/dosen/penunjang/'));
        }
    }
  
  public function edit($id = null)
    {
        if (!isset($id)) redirect('page/dosen/penunjang/');
       
        $penunjang = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($penunjang->rules());

        if ($validation->run()) {
            $config['upload_path']          = './assets/images/sertifikat/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['file_name']            = $this->input->post('id_penunjang');
            $config['overwrite']            = true;
            $config['max_size']             = 2024;

            $this->load->library('upload', $config);

            $upload_image = $_FILES['sertifikat']['name'];

            if($upload_image){

              if ($this->upload->do_upload('sertifikat')) {

                 $img = $this->upload->data('file_name');
                 $penunjang->update($img);
                 $this->session->set_flashdata('success', 'Data Berhasil diedit...');
                 redirect(site_url('page/dosen/penunjang/')); 

                  }else{

                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('gagal', $error);
                   redirect(site_url('page/dosen/penunjang/')); 

                  }

              }else{
                $img = $this->input->post('old_image');
                $penunjang->update($img);
                $this->session->set_flashdata('success', 'Data Berhasil diedit...');
                redirect(site_url('page/dosen/penunjang/'));
              }
            
        }
        $data["p"] = $penunjang->getById($id);
        if (!$data["p"]) show_404();
     $data["title"] = "Edit Kegiatan Penunjang";
     $this->page_form('isi/dosen/penunjang/edit',$data);
     
    } 
	
}
