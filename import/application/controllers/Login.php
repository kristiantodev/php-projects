  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->helper("form");
        $this->load->library('form_validation');
        $this->load->library('session');

    }

    public function index()
    {
         $this->form_validation->set_rules('username', 'Username','trim|required');
         $this->form_validation->set_rules('password', 'Password','trim|required');

         if($this->form_validation->run() == false){
          
          $this->load->view('login');
         
         }else{

            $this-> _auth();

         }
         
    }

    private function _auth(){

        $userku = $this->input->post('username');
        $passku = $this->input->post('password');
        $levelku = $this->input->post('level');

        $array = array('username' => $userku, 'level' => $levelku);
        $user_auth = $this->db->get_where('users', $array)->row_array();

        if($user_auth){
                
               if(password_verify($passku, $user_auth['password'])){

                $data = [
                'id_user' => $user_auth['id_user'],
                'username' => $user_auth['username'],
                'level' => $user_auth['level']
                ];

                $this->session->set_userdata($data);

                 if($this->session->userdata('level')=="Administrator"){
                        redirect('adm/dashboard');
                    }elseif ($this->session->userdata('level')=="Direktur"){
                        redirect('direktur/dashboard');
                         }

               }else{

                $this->session->set_flashdata('pesan', 'Password yang Anda Masukan Salah !!');
                redirect('login/');

               }


        }else{
            $this->session->set_flashdata('pesan', 'Username atau Level User yang Anda Masukan Salah !!');
            redirect('login/');
        }

    }
    
    
        
    public function logout()
    {
         $this->session->sess_destroy();
         redirect('login/');
    }

}
