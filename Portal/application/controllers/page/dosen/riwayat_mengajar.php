  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class riwayat_mengajar extends My_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model("dosen/mengajar_model", "My_model");
        $this->load->library('form_validation');
        $this->load->library('session');

        if($this->session->userdata('level')!="Dosen"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }

    }

    public function index()
    {
          $data["ajarku"] = $this->My_model->get_by_user();
          $data["title"] = "Riwayat Mengajar";
          $this->page_data('isi/dosen/mengajar/mengajar',$data);
        
    }
	
  public function tambah()
  {
        
      $mengajar = $this->My_model;
     $data["matkulku"] = $mengajar->getMatkul();
     $data["title"] = "Tambah Riwayat Mengajar";
     $this->page_form('isi/dosen/mengajar/tambah2',$data);       
     
  }

  public function tambah2()
  {
        

        $mengajar = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($mengajar->rules());

        if ($validation->run()) {
            $mengajar->save();
            $this->session->set_flashdata('success', 'Data Riwayat Mengajar Berhasil di Simpan...');
            redirect(site_url('page/dosen/riwayat_mengajar/'));
        }
     $data["matkulku"] = $mengajar->getMatkul();
     $data["title"] = "Tambah Riwayat Mengajar";
     $this->page_form('isi/dosen/mengajar/tambah',$data);
     
  }

  public function insert(){
    $check = $this->input->post('pilihanku');
    for ($i=0; $i < sizeof($check); $i++) { 
            $data = array(
                    'id_rm' => rand(),
                    'id_user' => $this->session->userdata('id_user'),
                    'kode_mk'=> $check[$i]
                );
              $this->My_model->saveajar($data);
          }

            $this->session->set_flashdata('success', 'Data Riwayat Mengajar Berhasil di Simpan...');
            redirect(site_url('page/dosen/riwayat_mengajar/'));
  }

  public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->My_model->delete($id)) {
            $this->session->set_flashdata('success', 'Data Riwayat Mengajar Berhasil di Hapus...');
            redirect(site_url('page/dosen/riwayat_mengajar/'));
        }
    }
  
  public function edit($id = null)
    {
        if (!isset($id)) redirect('page/dosen/riwayat_mengajar/');
       
        $mengajar = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($mengajar->rules());

        if ($validation->run()) {
            $mengajar->update();
            $this->session->set_flashdata('success', 'Data Riwayat Mengajar Berhasil diedit...');
            redirect(site_url('page/dosen/riwayat_mengajar/'));
        }
        $data["matkulku"] = $mengajar->getMatkul();
        $data["ajar"] = $mengajar->getById($id);
        if (!$data["ajar"]) show_404();
     $data["title"] = "Edit Riwayat Mengajar";
     $this->page_form('isi/dosen/mengajar/edit',$data);
     
    } 
	
}
