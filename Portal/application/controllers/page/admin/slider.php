  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends My_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/slider_model", "M_slider");
        $this->load->library('form_validation');
        $this->load->library('session');

        if($this->session->userdata('level')!="Administrator"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }

    }
	public function index()
	{
		  $data["sliderku"] = $this->M_slider->getAll();
		 $data["title"] = "Setting Foto Slider";
		 $this->page_data('isi/admin/slider/slider',$data);
		
	}
  public function tambah()
  {

        $slider = $this->M_slider;
        $validation = $this->form_validation;
        $validation->set_rules($slider->rules());

        if ($validation->run()) {
            $slider->save();
            $this->session->set_flashdata('success', 'Data Berhasil di Simpan...');
            redirect(site_url('page/admin/slider/'));
        }
        $data["title"] = "Tambah Foto Slider";
     $this->page_form('isi/admin/slider/tambah', $data);
     
  }

  public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->M_slider->delete($id)) {
            $this->session->set_flashdata('success', 'Data Berhasil di Hapus...');
            redirect(site_url('page/admin/slider/'));
        }
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('page/admin/slider/');
       
        $slider = $this->M_slider;
        $validation = $this->form_validation;
        $validation->set_rules($slider->rules());

        if ($validation->run()) {
            $slider->update();
            $this->session->set_flashdata('success', 'Data Berhasil diedit...');
            redirect(site_url('page/admin/slider/'));
        }
        $data["slider"] = $slider->getById($id);
        if (!$data["slider"]) show_404();
     $data["title"] = "Edit Foto Slider";
     $this->page_form('isi/admin/slider/edit',$data);
     
    } 
  
	
}
