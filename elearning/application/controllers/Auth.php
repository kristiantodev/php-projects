<?php 

class Auth extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
		$this->load->library('session');

	}

	function index(){
		$this->load->view('main/login-siswa');
	}

	function Log(){
		$this->load->view('main/login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);


		$cek = $this->m_login->cek_login('user',$where)->row_array();

		 if($cek) {


			if($cek['level'] == 'Administrator') {

				$data_session = array(
				'nama' => $username,
				'status' => "Administrator"
				);

			$this->session->set_userdata($data_session);	
			redirect(base_url("Admin"));

			} else 

			if($cek['level'] == 'Guru') {

				$data_session = array(
				'nama' => $username,
				'status' => "Guru"
				);

			$this->session->set_userdata($data_session);	
			redirect(base_url("Guru"));

			}
			 

		}else{

			redirect(base_url('Auth/log'));
		}
	}

	function aksi_login2(){
		$tgl_lahir = $this->input->post('tgl_lahir');
		$no_induk = $this->input->post('no_induk');
		$where = array(
			'tgl_lahir' => $tgl_lahir,
			'no_induk' => $no_induk
			);

		$cek = $this->m_login->cek_login('siswa',$where)->row_array();

		 if($cek) {

		 	$data_session = array(
				'nama' => $no_induk,
				'status' => "Siswa",
				'namaSiswa' => $cek['nama'],
				);
			$this->session->set_userdata($data_session);	
			redirect(base_url("Siswa"));

			} else{

			redirect(base_url('Auth/'));
		}
	}

	function Out(){
		$this->session->sess_destroy();
		redirect(base_url('Auth/'));
	}
}