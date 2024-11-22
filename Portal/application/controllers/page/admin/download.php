  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class download extends My_Controller {
public function __construct()
    {
        parent::__construct();
 
        $this->load->model("admin/download_model", "My_model");
        $this->load->library('form_validation');
        $this->load->library('session');

        if($this->session->userdata('level')!="Administrator"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }

    }
    
	public function index()
	{
        $download = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($download->rules());

        if ($validation->run()) {
            $id = $this->input->post('nm_download');
            $config['upload_path']          = './assets/file/download/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf|doc|docx|ppt|pptx|xls|xlsx|rar|zip';
            $config['file_name']            = $id;
            $config['overwrite']            = true;
            $config['max_size']             = 2024;

            $this->load->library('upload', $config);

            $upload_image = $_FILES['file']['name'];

            if($upload_image){

              if ($this->upload->do_upload('file')) {

                 $img = $this->upload->data('file_name');
                 $download->save($img);
                 $this->session->set_flashdata('success', 'File Berhasil di upload...');
                 redirect(site_url('page/admin/download/')); 

                  }else{

                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('gagal', $error);
                    redirect(site_url('page/admin/download/')); 

                  }

              }else{

                $this->session->set_flashdata('empty', 'File Download Harus Diisi...');
                redirect(site_url('page/admin/download/'));
              } 
           
        }

		  $data["downloadku"] = $this->My_model->getAll();
		 $data["title"] = "Managemen Data Download";
		 $this->page_form('isi/admin/download/download',$data);

		
	}

  public function tambah()
  {
        

        $download = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($download->rules());

        if ($validation->run()) {
            $download->save();
            $this->session->set_flashdata('success', 'Data Berhasil di Simpan...');
            redirect(site_url('page/admin/download/'));
        }
      $data["title"] = "Tambah Download";
     $this->page_form('isi/admin/download/tambah',$data);
     
  }

  public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->My_model->delete($id)) {
            $this->session->set_flashdata('success', 'Data Berhasil di Hapus...');
            redirect(site_url('page/admin/download/'));
        }
    }
  
  public function edit($id = null)
    {
        if (!isset($id)) redirect('page/admin/download/');
       
        $download = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($download->rules());

        if ($validation->run()) {
            $download->update();
            $this->session->set_flashdata('success', 'Data Berhasil diedit...');
            redirect(site_url('page/admin/download/'));
        }

        $data["download"] = $download->getById($id);
        if (!$data["download"]) show_404();
        $data["title"] = "Edit Download";
     $this->page_form('isi/admin/download/edit',$data);
     
    } 
	
}
