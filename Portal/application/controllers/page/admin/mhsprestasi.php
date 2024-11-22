  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mhsprestasi extends My_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/prestasi_model", "M_prestasi");
        $this->load->library('form_validation');
        $this->load->library('session');

        if($this->session->userdata('level')!="Administrator"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }

    }
	public function index()
	{
		  $data["prestasiku"] = $this->M_prestasi->get_by_user();
		 $data["title"] = "Mahasiswa Berprestasi";
		 $this->page_data('isi/admin/prestasi/prestasi',$data);
		
	}
  public function tambah()
  {

        $prestasi = $this->M_prestasi;
        $validation = $this->form_validation;
        $validation->set_rules($prestasi->rules());

        if ($validation->run()) {
           $id = rand();
            $config['upload_path']          = './assets/images/prestasi/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['file_name']            = $id;
            $config['overwrite']            = true;
            $config['max_size']             = 2024;

            $this->load->library('upload', $config);

            $upload_image = $_FILES['foto']['name'];

            if($upload_image){

              if ($this->upload->do_upload('foto')) {

                 $img = $this->upload->data('file_name');
                 $prestasi->save($id, $img);
                 $this->session->set_flashdata('success', 'Data Mahasiswa Berprestasi Berhasil di Simpan...');
                 redirect(site_url('page/admin/prestasi/')); 

                  }else{

                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('gagal', $error);
                    redirect(site_url('page/admin/prestasi/')); 

                  }

              }else{
                $img = 'default.jpg';
                $prestasi->save($id, $img);
                $this->session->set_flashdata('success', 'Data Mahasiswa berprestasi Berhasil di Simpan...');
                redirect(site_url('page/admin/prestasi/'));
              } 
        }
     
     $data["title"] = "Tambah Mahasiswa Berprestasi";
     $this->page_form('isi/admin/prestasi/tambah',$data);
     
  }

  public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->M_prestasi->delete($id)) {
            $this->session->set_flashdata('success', 'Data Berhasil di Hapus...');
            redirect(site_url('page/admin/prestasi/'));
        }
    }
  
  public function edit($id = null)
    {
        if (!isset($id)) redirect('page/admin/prestasi/');
       
        $prestasi = $this->M_prestasi;
        $validation = $this->form_validation;
        $validation->set_rules($prestasi->rules());

        if ($validation->run()) {
            $config['upload_path']          = './assets/images/prestasi/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['file_name']            = $this->input->post('id_prestasi');
            $config['overwrite']            = true;
            $config['max_size']             = 2024;

            $this->load->library('upload', $config);

            $upload_image = $_FILES['foto']['name'];

            if($upload_image){

              if ($this->upload->do_upload('foto')) {

                 $img = $this->upload->data('file_name');
                 $prestasi->update($img);
                 $this->session->set_flashdata('success', 'Data Mahasiswa Berprestasi Berhasil di diedit...');
                 redirect(site_url('page/admin/prestasi/')); 

                  }else{

                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('gagal', $error);
                    redirect(site_url('page/admin/prestasi/')); 

                  }

              }else{
                $img = $this->input->post('old_image');
                $prestasi->update($img);
                $this->session->set_flashdata('success', 'Data Mahasiswa berprestasi Berhasil di diedit...');
                redirect(site_url('page/admin/prestasi/'));
              }
        }
        
        $data["prestasi"] = $prestasi->getById($id);
        if (!$data["prestasi"]) show_404();
     $data["title"] = "Edit Data mahasiswa Berprestasi";
     $this->page_form('isi/admin/prestasi/edit',$data);
     
    } 
	
}
