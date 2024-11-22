  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->helper("form");
        $this->load->model("admin/mhs_model", "My_Model");
        $this->load->library('form_validation');
        $this->load->library('session');
    }
  public function login()
  {
     $this->load->view('form_login_mhs');
  }
  
  public function proses_login()
  {
     $user = $this->input->post('nim');
     $pass = $this->input->post('password');

     $ceklogin = $this->My_Model->login($user, $pass); 

     if($ceklogin){
      
      foreach ($ceklogin as $row );
        $this->session->set_userdata('nim', $row->nim);
        $this->session->set_userdata('password', $row->password); 
                $this->session->set_userdata('status', $row->status); 

                      redirect('page/mahasiswa/profil');
                      
                    }else{
        $data['pesan']= "Username atau Password yang Anda Masukan Salah !!";
        $this->load->view('form_login_mhs', $data);
      }
      }
    
  public function logout()
  {
     $this->session->sess_destroy();
     redirect('mahasiswa/login/');
  }

}
