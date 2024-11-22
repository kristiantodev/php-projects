<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_profile extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('M_userprofile');
		is_logged_in(); //helper fungsi

		//$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation'); 
	}

	public function index()
	{
		$data['session'] = $this->db->select('*')
          ->from('user')
          ->join('prodi', 'user.id_prodi = prodi.id_prodi')
          ->where('username', $this->session->userdata('username'))
          ->get()->row_array();

        $data['prodi'] = $this->db->get('prodi')->result_array();
		$data['user']= $this->M_userprofile->data_id($this->session->userdata('id_user'));

	 	$this->load->view('template/header',$data);
	 	$this->load->view('template/sidebar',$data);
	 	$this->load->view('myprofile/profile',$data);
	 	$this->load->view('template/footer');
	}

	public function edit_profile()
	{
        $this->M_userprofile->update();
        redirect('user_profile');
	}

	public function edit_foto($id=null)
	{
        $this->M_userprofile->update_foto();
        redirect('user_profile');
	}

}