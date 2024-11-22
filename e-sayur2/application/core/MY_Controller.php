<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
ini_set('display_errors', 0);

class MY_Controller extends CI_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model("User_model", "M_user");
    }
	
	function Mypage($content,$data=NULL){

		 $id = $this->session->userdata('id_user');
         $user = $this->M_user;
         $data["myuser"] = $user->getById($id);
		 
		$data['headernya'] = $this->load->view('template/header',$data,TRUE);
		$data['isinya'] = $this->load->view($content,$data,TRUE);
		$data['footernya'] = $this->load->view('template/footer',$data,TRUE);
		$data['jsnya'] = $this->load->view('template/js',$data,TRUE);
		$this->load->view('template/index',$data);
	}

	function MyPageSayur($content,$data=NULL){
		 
		$data['headernya'] = $this->load->view('template/front/header',$data,TRUE);
		$data['isinya'] = $this->load->view($content,$data,TRUE);
		$data['footernya'] = $this->load->view('template/front/footer',$data,TRUE);
		$data['jsnya'] = $this->load->view('template/front/js',$data,TRUE);
		$this->load->view('template/front/index',$data);
	}

}
