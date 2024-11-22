  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends My_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model("kaprodi/gallery_model", "M_gallery");
        $this->load->library('form_validation');
        $this->load->library('session');

        if($this->session->userdata('level')!="Kaprodi"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }

    }
	public function index()
	{
		  $data["galleryku"] = $this->M_gallery->get_by_user();
		 $data["title"] = "Gallery";
		 $this->page_data('isi/kaprodi/gallery/gallery',$data);
		
	}
  public function tambah()
  {

        $gallery = $this->M_gallery;
        $validation = $this->form_validation;
        $validation->set_rules($gallery->rules());

        if ($validation->run()) {
           $id = rand();
            $config['upload_path']          = './assets/images/gallery/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['file_name']            = $id;
            $config['overwrite']            = true;
            $config['max_size']             = 2024;

            $this->load->library('upload', $config);

            $upload_image = $_FILES['foto']['name'];

            if($upload_image){

              if ($this->upload->do_upload('foto')) {

                 $img = $this->upload->data('file_name');
                 $gallery->save($id, $img);
                 $this->session->set_flashdata('success', 'Data Gallery Berhasil di Simpan...');
                 redirect(site_url('page/kaprodi/gallery/')); 

                  }else{

                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('gagal', $error);
                    redirect(site_url('page/kaprodi/gallery/')); 

                  }

              }else{
                $img = 'default.jpg';
                $gallery->save($id, $img);
                $this->session->set_flashdata('success', 'Data Gallery Berhasil di Simpan...');
                redirect(site_url('page/kaprodi/gallery/'));
              } 
        }
     
     $data["title"] = "Tambah Gallery";
     $this->page_form('isi/kaprodi/gallery/tambah',$data);
     
  }

  public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->M_gallery->delete($id)) {
            $this->session->set_flashdata('success', 'Data Berhasil di Hapus...');
            redirect(site_url('page/kaprodi/gallery/'));
        }
    }
  
  public function edit($id = null)
    {
        if (!isset($id)) redirect('page/kaprodi/gallery/');
       
        $gallery = $this->M_gallery;
        $validation = $this->form_validation;
        $validation->set_rules($gallery->rules());

        if ($validation->run()) {
            $config['upload_path']          = './assets/images/gallery/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['file_name']            = $this->input->post('id_gallery');
            $config['overwrite']            = true;
            $config['max_size']             = 2024;

            $this->load->library('upload', $config);

            $upload_image = $_FILES['foto']['name'];

            if($upload_image){

              if ($this->upload->do_upload('foto')) {

                 $img = $this->upload->data('file_name');
                 $gallery->update($img);
                 $this->session->set_flashdata('success', 'Foto Gallery Berhasil di diedit...');
                 redirect(site_url('page/kaprodi/gallery/')); 

                  }else{

                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('gagal', $error);
                    redirect(site_url('page/kaprodi/gallery/')); 

                  }

              }else{
                $img = $this->input->post('old_image');
                $gallery->update($img);
                $this->session->set_flashdata('success', 'Foto Gallery Berhasil di diedit...');
                redirect(site_url('page/kaprodi/gallery/'));
              }
        }
        
        $data["gallery"] = $gallery->getById($id);
        if (!$data["gallery"]) show_404();
     $data["title"] = "Edit Gallery";
     $this->page_form('isi/kaprodi/gallery/edit',$data);
     
    } 
	
}
