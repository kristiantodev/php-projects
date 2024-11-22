  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class background extends My_Controller {
public function __construct()
    {
        parent::__construct();
 
        $this->load->model("admin/background_model", "My_model");
        $this->load->library('form_validation');
        $this->load->library('session');

        if($this->session->userdata('level')!="Administrator"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }

    }
    
	public function index()
	{
       
        $background = $this->My_model;
        $validation = $this->form_validation;
        $validation->set_rules($background->rules());

        if ($validation->run()) {
            $background->update();
            $this->session->set_flashdata('success', 'Background Berhasil diubah...');
            redirect(site_url('page/admin/background/'));
        }

        $data["background"] = $background->getById();
        if (!$data["background"]) show_404();
        $data["title"] = "Setting Background";

        $this->page_form('isi/admin/background/background',$data);
		
	}

   
	
}
