  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profil extends My_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model("dosen/profildosen_model", "My_profdos");
        $this->load->model("admin/user_model", "My_model2");
        $this->load->model("dosen/Rpend_model", "My_Rpend");
        $this->load->library('form_validation');
        $this->load->library('session');

        if($this->session->userdata('level')!="Dosen"){
        	$this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman ini !!');
            redirect(site_url('login/'));
        }

    }
	public function index()
	{
         $data["myprofil"] = $this->My_profdos->getById($this->session->userdata('id_user'));  
         $data["pendidikanku"] = $this->My_Rpend->get_by_user();   
         $data["title"] = "My Profil";     
         $this->page_data('isi/dosen/profil/profil',$data);      
	}

    public function ganti_password()
    {   
         $data["title"] = "Ganti Password"; 
         $data["password_aje"] = $this->db->get_where('users', ['id_user' => $this->session->userdata('id_user')])->row_array();
         $this->form_validation->set_rules('current_password', 'Password Lama','trim|required',
            [
             'required' => "Password Harus diisi..."
            ]);
         $this->form_validation->set_rules('pass_baru', 'Password Baru','trim|required|min_length[7]|max_length[10]|matches[pass_baru2]',
            [
             'required' => "Password Baru Harus diisi...",
             'min_length' => "Panjang Password Min. 7 Karakter...",
             'max_length' => "Panjang Password Max. 10 Karakter ...",
             'matches' => "Password Baru harus sama dengan Ulangi Password Baru..."
            ]);
         $this->form_validation->set_rules('pass_baru2', 'Password Baru Ulangi','trim|required|min_length[7]|max_length[10]|matches[pass_baru]',
            [
             'required' => "Password Baru Harus diisi...",
             'min_length' => "Panjang Password Min. 7 Karakter...",
             'max_length' => "Panjang Password Max. 10 Karakter ...",
             'matches' => "Ulangi Password Baru harus sama dengan Password Baru..."
            ]);

         if($this->form_validation->run() == false){
          
          $this->page_form('isi/dosen/profil/edit_password',$data);
         
         }else{

            $lama = $this->input->post('current_password');
            $baru = $this->input->post('pass_baru');
            $baru2 = $this->input->post('pass_baru2');

            if(!password_verify($lama, $data['password_aje']['password'])){

              $this->session->set_flashdata('success', 'Password lama yang anda Masukan salah !! ');
              redirect(site_url('page/dosen/profil/ganti_password'));

            }else{

               if($lama == $baru) {
                $this->session->set_flashdata('success', 'Password Baru sama dengan Password Lama !! ');
                redirect(site_url('page/dosen/profil/ganti_password'));

               }else{

                $password_hash =password_hash($baru, PASSWORD_DEFAULT);

                $this->db->set('password', $password_hash);
                $this->db->where('id_user', $this->session->userdata('id_user'));
                $this->db->update('users');

                $this->session->set_flashdata('successs', 'Password berhasil dirubah !! ');
                redirect(site_url('page/dosen/profil/ganti_password'));

               }
            }

         }    
               
    }

public function edit($id = null)
    {
        if (!isset($id)) redirect('page/dosen/profil/');
       
        $profil = $this->My_profdos;
        $validation = $this->form_validation;
        $validation->set_rules($profil->ruless());

        if ($validation->run()) {
            $profil->update();
            $this->session->set_flashdata('success', 'Profil Berhasil diedit...');
            redirect(site_url('page/dosen/profil/'));
        }

        $data["dosen"] = $profil->getById($id);
        if (!$data["dosen"]) show_404();
     $data["title"] = "Edit Profil";
     $this->page_form('isi/dosen/profil/edit',$data);
     
    }   

public function akun($id = null)
    {
        if (!isset($id)) redirect('page/dosen/profil/');
       
        $user = $this->My_model2;
        $validation = $this->form_validation;
        $validation->set_rules($user->ruless());

        if ($validation->run()) {
            $user->update();
            $this->session->set_flashdata('success', 'Setting Akun Berhasil diedit...');
            redirect(site_url('page/dosen/profil/'));
        }

        $data["user"] = $user->getById($id);
        if (!$data["user"]) show_404();
      $data["title"] = "Edit Akun";
     $this->page_form('isi/dosen/profil/edit_akun',$data);
     
    }
    
}
