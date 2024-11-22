  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends My_Controller {
public function __construct()
    {
        parent::__construct();
 
        $this->load->model("admin/kegiatan_model", "My_model");
        $this->load->library('form_validation');
        $this->load->library('session');

        if($this->session->userdata('level')!="Administrator"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }

    }
    
	public function index()
	{
        $data["title"] = "Kegiatan";
		  $data["kegiatanku"] = $this->My_model->get_by_user();
		
		 $this->page_data('isi/admin/kegiatan/kegiatan',$data);
		
	}

  public function tambah()
  {
        $kegiatan = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($kegiatan->rules());

        if ($validation->run()) {
            $id = rand();
            $config['upload_path']          = './assets/images/kegiatan/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['file_name']            = $id;
            $config['overwrite']            = true;
            $config['max_size']             = 2024;

            $this->load->library('upload', $config);

            $upload_image = $_FILES['foto']['name'];

            if($upload_image){

              if ($this->upload->do_upload('foto')) {

                 $img = $this->upload->data('file_name');
                 $kegiatan->save($id, $img);
                 $this->session->set_flashdata('success', 'Data Berhasil di Simpan...');
                 redirect(site_url('page/admin/kegiatan/')); 

                  }else{

                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('gagal', $error);
                    redirect(site_url('page/admin/kegiatan/')); 

                  }

              }else{
                $img = 'default.jpg';
                $kegiatan->save($id, $img);
                $this->session->set_flashdata('success', 'Data Berhasil di Simpan...');
                redirect(site_url('page/admin/kegiatan/'));
              }
            
        }
     $data["title"] = "Tambah Kegiatan";
     $this->page_form('isi/admin/kegiatan/tambah',$data);
     
  }

  public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->My_model->delete($id)) {
            $this->session->set_flashdata('success', 'Data Berhasil di Hapus...');
            redirect(site_url('page/admin/kegiatan/'));
        }
    }
  
  public function edit($id = null)
    {
        if (!isset($id)) redirect('page/admin/kegiatan/');
       
        $kegiatan = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($kegiatan->rules());

        if ($validation->run()) {
            $config['upload_path']          = './assets/images/kegiatan/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['file_name']            = $this->input->post('id_kegiatan');
            $config['overwrite']            = true;
            $config['max_size']             = 2024;

            $this->load->library('upload', $config);

            $upload_image = $_FILES['foto']['name'];

            if($upload_image){

              if ($this->upload->do_upload('foto')) {

                 $img = $this->upload->data('file_name');
                 $kegiatan->update($img);
                 $this->session->set_flashdata('success', 'Data Artikel Berhasil di diedit...');
                 redirect(site_url('page/admin/kegiatan/')); 

                  }else{

                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('gagal', $error);
                    redirect(site_url('page/admin/kegiatan/')); 

                  }

              }else{
                $img = $this->input->post('old_image');
                $kegiatan->update($img);
                $this->session->set_flashdata('success', 'Data Artikel Berhasil di diedit...');
                redirect(site_url('page/admin/kegiatan/'));
              }
        }

        $data["kegiatan"] = $kegiatan->getById($id);
        if (!$data["kegiatan"]) show_404();

        $data["title"] = "Edit Kegiatan";
        $this->page_form('isi/admin/kegiatan/edit',$data);
     
    } 
	
}
