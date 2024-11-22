  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends My_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->helper("form");
        $this->load->model("login_model");
        $this->load->library('form_validation');
        $this->load->library('session');
    }
	public function index()
	{
		 $this->form_validation->set_rules('username', 'Username','trim|required');
		 $this->form_validation->set_rules('password', 'Password','trim|required');

		 if($this->form_validation->run() == false){
          
          $this->load->view('form_login');
		 
		 }else{

		 	$this-> _auth();

		 }
		 
	}

	private function _auth(){

		$userku = $this->input->post('username');
		$passku = $this->input->post('password');

		$user_auth = $this->db->get_where('users', ['username'=>$userku])->row_array();

        if($user_auth){

        	if ($user_auth['status'] == 'Aktif') {
        		
               if(password_verify($passku, $user_auth['password'])){

               	$data = [
               	'id_user' => $user_auth['id_user'],
               	'username' => $user_auth['username'],
                'nm_user' => $user_auth['nm_user'],
               	'level' => $user_auth['level']
               	];

               	$this->session->set_userdata($data);

                 if($this->session->userdata('level')=="Administrator"){
                    	redirect('page/admin/dashboard');
                    }elseif ($this->session->userdata('level')=="BAAK"){
                    	redirect('page/baak/dashboard');
                    	 }elseif ($this->session->userdata('level')=="Kaprodi"){
                      redirect('page/kaprodi/dashboard');
                       }

               }else{

               	$this->session->set_flashdata('pesan', 'Password yang Anda Masukan Salah !!');
        	    redirect('login/');

               }

        	}else{

        	$this->session->set_flashdata('pesan', 'Username Tidak Aktif, Silahkan Hubungi Administrator !!');
        	redirect('login/');

        	}

        }else{
        	$this->session->set_flashdata('pesan', 'Username Tidak Terdaftar !!');
        	redirect('login/');
        }

	}
	
	public function proses_login()
	{
		 $user = $this->input->post('username');
		 $pass = $this->input->post('password');

		 $ceklogin = $this->login_model->login($user, $pass); 

		 if($ceklogin){
		 	foreach ($ceklogin as $row );
		 		$this->session->set_userdata('id_user', $row->id_user); 
		 		$this->session->set_userdata('username', $row->username); 
                $this->session->set_userdata('level', $row->level); 
                $this->session->set_userdata('nm_user', $row->nm_user); 
                $this->session->set_userdata('avatar', $row->avatar); 

                    if($this->session->userdata('level')=="Administrator"){
                    	redirect('page/admin/dashboard');
                    }elseif ($this->session->userdata('level')=="Dosen"){
                    	redirect('page/dosen/dashboard');
                    	 }
                    }else{
		 		$data['pesan']= "Username atau Password yang Anda Masukan Salah !!";
		 		$this->load->view('form_login', $data);
		 	}
		 	}
		
	public function logout()
	{
		 $this->session->sess_destroy();
		 redirect('login/');
	}

}
