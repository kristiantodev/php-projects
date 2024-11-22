  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class artikel extends My_Controller {
public function __construct()
    {
        parent::__construct();
 
        $this->load->model("dosen/artikel_model", "My_model");
        $this->load->library('form_validation');
        $this->load->library('session');

        if($this->session->userdata('level')!="Dosen"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }

    }
    
	public function index()
	{
         
		  $data["artikelku"] = $this->My_model->get_by_user();
		 $data["title"] = "List Artikel & Berita";
		 $this->page_data('isi/dosen/artikel/artikel',$data);
		
	}

  public function tambah()
  {
        $artikel = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($artikel->rules());

        if ($validation->run()) {
            $id = rand();
            $config['upload_path']          = './assets/images/artikel/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['file_name']            = $id;
            $config['overwrite']            = true;
            $config['max_size']             = 2024;

            $this->load->library('upload', $config);

            $upload_image = $_FILES['foto']['name'];

            if($upload_image){

              if ($this->upload->do_upload('foto')) {

                 $img = $this->upload->data('file_name');
                 $artikel->save($id, $img);
                 $this->session->set_flashdata('success', 'Data Berhasil di Simpan...');
                 redirect(site_url('page/dosen/artikel/')); 

                  }else{

                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('gagal', $error);
                    redirect(site_url('page/dosen/artikel/')); 

                  }

              }else{
                $img = 'default.jpg';
                $artikel->save($id, $img);
                $this->session->set_flashdata('success', 'Data Berhasil di Simpan...');
                redirect(site_url('page/dosen/artikel/'));
              }
        }
     $data["kategoriku"] = $artikel->getKategori();
     $data["title"] = "Tambah Artikel / Berita";
     $this->page_form('isi/dosen/artikel/tambah',$data);
     
  }

  public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->My_model->delete($id)) {
            $this->session->set_flashdata('success', 'Data Berhasil di Hapus...');
            redirect(site_url('page/dosen/artikel/'));
        }
    }
  
  public function edit($id = null)
    {
        if (!isset($id)) redirect('page/dosen/artikel/');
       
        $artikel = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($artikel->rules());

        if ($validation->run()) {
            $config['upload_path']          = './assets/images/artikel/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['file_name']            = $this->input->post('id_artikel');
            $config['overwrite']            = true;
            $config['max_size']             = 2024;

            $this->load->library('upload', $config);

            $upload_image = $_FILES['foto']['name'];

            if($upload_image){

              if ($this->upload->do_upload('foto')) {

                 $img = $this->upload->data('file_name');
                 $artikel->update($img);
                 $this->session->set_flashdata('success', 'Data Artikel Berhasil di diedit...');
                 redirect(site_url('page/dosen/artikel/')); 

                  }else{

                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('gagal', $error);
                    redirect(site_url('page/dosen/artikel/')); 

                  }

              }else{
                $img = $this->input->post('old_image');
                $artikel->update($img);
                $this->session->set_flashdata('success', 'Data Artikel Berhasil di diedit...');
                redirect(site_url('page/dosen/artikel/'));
              }
        }

        $data["artikel"] = $artikel->getById($id);
        if (!$data["artikel"]) show_404();

        $data["kategoriku"] = $artikel->getKategori();
        $data["title"] = "Edit Artikel";
        $this->page_form('isi/dosen/artikel/edit',$data);
     
    } 
	
}
