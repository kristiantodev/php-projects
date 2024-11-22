  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends My_Controller {
public function __construct()
    {
        parent::__construct();
 
        $this->load->model("baak/agenda_model", "My_model");
        $this->load->library('form_validation');
        $this->load->library('session');

        if($this->session->userdata('level')!="BAAK"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }

    }
    
	public function index()
	{
          $data["title"] = "Agenda";
		      $data["agendaku"] = $this->My_model->getAll2();
      		$this->page_data('isi/baak/agenda/agenda',$data);
		
	}

  public function tambah()
  {
        

        $agenda = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($agenda->rules());

        if ($validation->run()) {
            $agenda->save();
            $this->session->set_flashdata('success', 'Data Berhasil di Simpan...');
            redirect(site_url('page/baak/agenda/'));
        }
     $data["title"] = "Tambah Agenda";
     $this->page_form('isi/baak/agenda/tambah',$data);
     
  }

  public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->My_model->delete($id)) {
            $this->session->set_flashdata('success', 'Data Berhasil di Hapus...');
            redirect(site_url('page/baak/agenda/'));
        }
    }
  
  public function edit($id = null)
    {
        if (!isset($id)) redirect('page/baak/agenda/');
       
        $agenda = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($agenda->rules());

        if ($validation->run()) {
            $agenda->update();
            $this->session->set_flashdata('success', 'Data Berhasil diedit...');
            redirect(site_url('page/baak/agenda/'));
        }

        $data["agenda"] = $agenda->getById($id);
        if (!$data["agenda"]) show_404();
        $data["title"] = "Edit Agenda";
     $this->page_form('isi/baak/agenda/edit',$data);
     
    } 
	
}
