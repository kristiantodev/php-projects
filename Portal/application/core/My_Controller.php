<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_Controller extends CI_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/user_model", "M_user");
    }
	function page_data($content,$data=NULL){
		 $id = $this->session->userdata('id_user');
         $user = $this->M_user;
         $data["myuser"] = $user->getById($id);

		$data['headernya'] = $this->load->view('template/back_end/header',$data,TRUE);
		$data['isinya'] = $this->load->view($content,$data,TRUE);
		$data['footernya'] = $this->load->view('template/back_end/footer',$data,TRUE);
		$data['jsnya'] = $this->load->view('template/back_end/js',$data,TRUE);
		$this->load->view('template/back_end/index',$data);
	}

	function page_grafik($content,$data=NULL){
		 $id = $this->session->userdata('id_user');
         $user = $this->M_user;
         $data["myuser"] = $user->getById($id);

		$data['headernya'] = $this->load->view('template/back_end/header',$data,TRUE);
		$data['isinya'] = $this->load->view($content,$data,TRUE);
		$data['footernya'] = $this->load->view('template/back_end/footer',$data,TRUE);
		$data['jsnya'] = $this->load->view('template/back_end/js3',$data,TRUE);
		$this->load->view('template/back_end/index',$data);
	}

	function page_mahasiswa($content,$data=NULL){
		 $this->load->model("admin/mhs_model", "M_mhs");
		 $id = $this->session->userdata('nim');
         $mhss = $this->M_mhs;
         $data["mhsprofil"] = $mhss->getById($id);

		$data['headernya'] = $this->load->view('template/back_end/header_mahasiswa',$data,TRUE);
		$data['isinya'] = $this->load->view($content,$data,TRUE);
		$data['footernya'] = $this->load->view('template/back_end/footer',$data,TRUE);
		$data['jsnya'] = $this->load->view('template/back_end/js2',$data,TRUE);
		$this->load->view('template/back_end/index',$data);
	}

	function page_form($content,$data=NULL){
		 $id = $this->session->userdata('id_user');
         $user = $this->M_user;
         $data["myuser"] = $user->getById($id);

		$data['headernya'] = $this->load->view('template/back_end/header',$data,TRUE);
		$data['isinya'] = $this->load->view($content,$data,TRUE);
		$data['footernya'] = $this->load->view('template/back_end/footer',$data,TRUE);
		$data['jsnya'] = $this->load->view('template/back_end/js2',$data,TRUE);
		$this->load->view('template/back_end/index',$data);
	}

	function page_umum($content,$data=NULL){
		$this->load->model("admin/link_model", "M_link");
		$this->load->model("admin/download_model", "My_File");
        $this->load->model("admin/profil_model", "My_model");
        $this->load->model("admin/background_model", "My_bgku");

        $data["fileku"] = $this->My_File->getAll();
        $data["linkku"] = $this->M_link->get_cic();
        $data["linkku2"] = $this->M_link->get_terkait();
        $data["cic"] = $this->My_model->get_profil(1);
        $background = $this->My_bgku;
        $data["background"] = $background->getById();

		$data['headernya'] = $this->load->view('template/front_end/header',$data,TRUE);
		$data['isinya'] = $this->load->view($content,$data,TRUE);
		$data['footernya'] = $this->load->view('template/front_end/footer',$data,TRUE);
		$this->load->view('template/front_end/index',$data);
	}

	function blog($content,$data=NULL){
        $this->load->model("admin/background_model", "My_bgku");
        $this->load->model("admin/profil_model", "My_model");

        $background = $this->My_bgku;
        $data["background"] = $background->getById();
        $data["cic"] = $this->My_model->get_profil(1);

		$data['headernya'] = $this->load->view('template/blog/header',$data,TRUE);
		$data['isinya'] = $this->load->view($content,$data,TRUE);
		$data['footernya'] = $this->load->view('template/blog/footer',$data,TRUE);
		$this->load->view('template/blog/index',$data);
	}

}
