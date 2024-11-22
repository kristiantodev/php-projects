<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_Controller2 extends CI_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/link_model", "M_link");
        $this->load->model("admin/profil_model", "My_model");

    }
	
	function page_umum($content,$data=NULL){
        $data["linkku"] = $this->M_link->get_cic();
        $data["linkku2"] = $this->M_link->get_terkait();
        $data["cic"] = $this->My_model->get_profil(1);

		$data['headernya'] = $this->load->view('template/front_end/header',$data,TRUE);
		$data['isinya'] = $this->load->view($content,$data,TRUE);
		$data['footernya'] = $this->load->view('template/front_end/footer',$data,TRUE);
		$this->load->view('template/front_end/index',$data);
	}

}
