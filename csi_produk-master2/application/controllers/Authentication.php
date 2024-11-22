<?php
/**
 *
 */
class Authentication extends CI_Controller
{
  public function __construct()
    {
        parent::__construct();
        $this->main_lib->createFirstUser();
    }
  function index()
  {
    if(isAuthenticated()) {
            redirect(base_url('dashboard'));
        }
    if(isset($_POST['submit'])) {
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $rules = [
        [
					'field' => 'username',
					'label'	=> 'Username',
					'rules' => 'required'
				],
				[
					'field' => 'password',
					'label'	=> 'Password',
					'rules' => 'required'
				]
			];
			$this->form_validation->set_rules($rules);
			$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
      if ($this->form_validation->run() === FALSE) {
        $data = ['title' => "Login - CSI Produk"];
        $this->load->view('login', $data);
      } else {
        $credentials = [
            'username' => $username,
            'password' => $password
        ];
        $login = $this->Auth->login($credentials);
        if ($login) {
					redirect(site_url('dashboard'));
				} else {
					$this->session->set_flashdata('pesan', 'Username atau password yang Anda masukan salah !!');
            redirect('login/');
				}
      }
    }else{
      $this->load->view('login');
    }
  }
  public function logout()
  {
            $this->session->sess_destroy();
            $this->session->unset_userdata('user');
            redirect(site_url());
  }
}

?>
