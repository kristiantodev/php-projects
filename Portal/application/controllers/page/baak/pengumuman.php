  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends My_Controller {
public function __construct()
    {
        parent::__construct();
 
        $this->load->model("baak/pengumuman_model", "My_model");
        $this->load->library('form_validation');
        $this->load->library('session');

        if($this->session->userdata('level')!="BAAK"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }

    }
    
	public function index()
	{
        $data["title"] = "Pengumuman";
		  $data["pengumumanku"] = $this->My_model->get_by_user();
		
		 $this->page_data('isi/baak/pengumuman/pengumuman',$data);
		
	}

  public function tambah()
  {
        $pengumuman = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($pengumuman->rules());

        if ($validation->run()) {
            $id = rand();
            $config['upload_path']          = './assets/images/pengumuman/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['file_name']            = $id;
            $config['overwrite']            = true;
            $config['max_size']             = 2024;

            $this->load->library('upload', $config);

            $upload_image = $_FILES['foto']['name'];

            if($upload_image){

              if ($this->upload->do_upload('foto')) {

                 $img = $this->upload->data('file_name');
                 $pengumuman->save($id, $img);
                 $this->session->set_flashdata('success', 'Data Berhasil di Simpan...');
                 redirect(site_url('page/baak/pengumuman/')); 

                  }else{

                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('gagal', $error);
                    redirect(site_url('page/baak/pengumuman/')); 

                  }

              }else{
                $img = 'default.jpg';
                $pengumuman->save($id, $img);
                $this->session->set_flashdata('success', 'Data Berhasil di Simpan...');
                redirect(site_url('page/baak/pengumuman/'));
              }
            
        }
     $data["title"] = "Tambah Pengumuman";
     $this->page_form('isi/baak/pengumuman/tambah',$data);
     
  }

  public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->My_model->delete($id)) {
            $this->session->set_flashdata('success', 'Data Berhasil di Hapus...');
            redirect(site_url('page/baak/pengumuman/'));
        }
    }
  
  public function edit($id = null)
    {
        if (!isset($id)) redirect('page/baak/pengumuman/');
       
        $pengumuman = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($pengumuman->rules());

        if ($validation->run()) {
            $config['upload_path']          = './assets/images/pengumuman/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['file_name']            = $this->input->post('id_pengumuman');
            $config['overwrite']            = true;
            $config['max_size']             = 2024;

            $this->load->library('upload', $config);

            $upload_image = $_FILES['foto']['name'];

            if($upload_image){

              if ($this->upload->do_upload('foto')) {

                 $img = $this->upload->data('file_name');
                 $pengumuman->update($img);
                 $this->session->set_flashdata('success', 'Data Pengumuman Berhasil di diedit...');
                 redirect(site_url('page/baak/pengumuman/')); 

                  }else{

                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('gagal', $error);
                    redirect(site_url('page/baak/pengumuman/')); 

                  }

              }else{
                $img = $this->input->post('old_image');
                $pengumuman->update($img);
                $this->session->set_flashdata('success', 'Data Pengumuman Berhasil di diedit...');
                redirect(site_url('page/baak/pengumuman/'));
              }
        }

        $data["pengumuman"] = $pengumuman->getById($id);
        if (!$data["pengumuman"]) show_404();

        $data["title"] = "Edit Pengumuman";
        $this->page_form('isi/baak/pengumuman/edit',$data);
     
    } 
	
}
