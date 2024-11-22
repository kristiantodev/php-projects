  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends My_Controller {


	public function index()
	{
		 $this->load->model("tamu_model");
         $this->load->library('session');
         $this->load->helper(array('captcha','form'));
		 $tamu = $this->tamu_model;

    $config_captcha = array(
    'img_path'  => './captcha/',
    'img_url'  => base_url().'captcha/',
    'img_width'  => '223',
    'img_height' => 45,
    'border' => 0, 
    'expiration' => 7200
   );

   $cap = create_captcha($config_captcha);
  
   $data['img'] = $cap['image'];
  
   $this->session->set_userdata('mycaptcha', $cap['word']);
   
      $data["title"] = "Buku Tamu - Program Studi Teknik Informatika - Universitas CIC";
      $this->page_umum('isi/umum/contact',$data);
	}

	function cek() {
         $this->load->model("tamu_model");
         $this->load->library('session');

   $secutity_code = $this->input->post('secutity_code');
    $a = $this->input->post('nama');
     $b = $this->input->post('email');
      $c = $this->input->post('subjek');
       $d = $this->input->post('pesan');
   $mycaptcha = $this->session->userdata('mycaptcha');
   
   if ($this->input->post() && ($secutity_code == $mycaptcha)) {
    $data = array(
                    'id_tamu' => rand(),
                    'nama' => $a,
                    'email' => $b,
                    'subjek' => $c,
                    'pesan' => $d,
                    'id_user'=> "Admin",
                    'tgl_tamu' => date('Y-m-d')
                );
              $this->tamu_model->savetamu($data);
    $this->session->set_flashdata('success','<b><i class="icon fa fa-check-square"></i> Success!!</b><br> Terimakasih! Pesan kritik dan saran anda telah terkirim...');
    redirect('kontak');
   } else {
    
    $this->session->set_flashdata('salah','<b><i class="icon fa fa-close"></i> Kode Keamanan Salah :( </b><br> Silahkan Masukan Kembali Kode Keamanannya...');
    redirect('kontak');
   }
  }
}
