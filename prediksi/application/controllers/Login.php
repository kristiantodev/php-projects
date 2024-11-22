<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('username','Username','required|trim',
			['required' => 'Username tidak boleh kosong']
		);
		$this->form_validation->set_rules('password','Password','required',
			['required' => 'Password tidak boleh kosong']
		);

		if ($this->form_validation->run() == false) {
			$this->load->view('template/login');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			$session = $this->db->get_where('user', ['username' => $username])->row_array();

		    if ($password == $session['password']){
		        $data = [
		        	'id_user' => $session['id_user'],
		        	'username' => $session['username'], 
		        	'id_prodi' => $session['id_prodi'],
		        	'level' => $session['level'],
		        ];
		    	$this->session->set_userdata($data);

		    	if ($session['level'] == "Admin") { //session  
					redirect('admin');
				} else {
					redirect('kaprodi');
				}

		    } else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" align="center" role="alert">Login Gagal, Username / Password Salah !!</div>');
				redirect('login');
			}
		}
	}


	public function logout()
	{
		$this->session->sess_destroy();
     	redirect('login');
	}
}
