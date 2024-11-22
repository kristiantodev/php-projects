  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends My_Controller {
public function __construct()
    {
        parent::__construct();
         $this->load->model("dosen/profildosen_model", "My_profdos");
         $this->load->model("admin/user_model", "My_user");
         $this->load->model("dosen/mengajar_model", "My_RM");
         $this->load->model("dosen/penelitian_model", "My_PL");
         $this->load->model("dosen/penunjang_model", "My_PE");
         $this->load->model("dosen/pkm_model", "My_PKM");
         $this->load->model("dosen/gallery_model", "M_gallery");
         $this->load->model("dosen/materi_model", "M_materi");
         $this->load->model('statistik_model');


    }
	
	public function dosen($id = null)
	{
		if (!isset($id)) redirect('welcome/');
       
        $profil = $this->My_profdos;
        $data["dosen"] = $profil->getById($id);
        if (!$data["dosen"]) show_404();
        $user = $this->My_user;
        $data["user"] = $user->getById($id);
        if (!$data["user"]) show_404();

        $ip = $this->input->ip_address();
        $tgl_kunjungan = date('y-m-d');
        $id_user = $id;

        $cek = $this->statistik_model->chekk($ip,$tgl_kunjungan,$id_user);

    if($cek){

    }else{

    $this->statistik_model->simpan_post($ip,$tgl_kunjungan,$id_user);

    }

        $data["ajarku"] = $this->My_RM->get_ajar($id);
        $data["penelitianku"] = $this->My_PL->get_penelitian($id);
        $data["pkmku"] = $this->My_PKM->get_pkm($id);
        $data["kegiatanku"] = $this->My_PE->get_penunjang($id);
        $data["title"] = "Home";
        $this->blog('isi/blog/isi', $data);
		
	}

    public function gallery($id = null)
    {
        if (!isset($id)) redirect('welcome/');
        $profil = $this->My_profdos;
        $data["dosen"] = $profil->getById($id);
        if (!$data["dosen"]) show_404();
        $data["galleryku"] = $this->M_gallery->get_gallery($id);
        $data["title"] = "Galeri Foto";
        $this->blog('isi/blog/gallery', $data);
        
    }

    public function download_materi($id = null)
    {

        if($this->session->userdata('status') == "Mahasiswa"){
            if (!isset($id)) redirect('welcome/');
        $profil = $this->My_profdos;
        $data["dosen"] = $profil->getById($id);
        if (!$data["dosen"]) show_404();
        $data["materiku"] = $this->M_materi->get_materi($id);
        $data["title"] = "Download Materi";
        $this->blog('isi/blog/materi', $data);
           
        }else{

        $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mendownload Materi Perkuliahan !!');
           redirect(base_url('mahasiswa/login'));

        }
    }

    public function buku_tamu($id = null)
    {
        if (!isset($id)) redirect('welcome/');
        $profil = $this->My_profdos;
        $data["dosen"] = $profil->getById($id);
        if (!$data["dosen"]) show_404();
        $this->load->model("tamu_model");
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper(array('captcha','form'));
        $tamu = $this->tamu_model;
        $validation = $this->form_validation;
        $validation->set_rules($tamu->rules());

        if ($validation->run()) {
            $tamu->save2();
            $this->session->set_flashdata('success', '<b>Success!!</b><br> Terimakasih! Pesan anda telah terkirim...');
            redirect(base_url('blog/buku_tamu/'.$id));
        }
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
        $data["title"] = "Buku Tamu - Universitas CIC";
        $this->blog('isi/blog/tamu', $data);
    }


    function cek() {
         $this->load->model("tamu_model");
         $this->load->library('session');

   $secutity_code = $this->input->post('secutity_code');
    $a = $this->input->post('nama');
     $b = $this->input->post('email');
      $c = $this->input->post('subjek');
       $d = $this->input->post('pesan');
        $e = $this->input->post('id_user');
   $mycaptcha = $this->session->userdata('mycaptcha');
   
   if ($this->input->post() && ($secutity_code == $mycaptcha)) {
    $data = array(
                    'id_tamu' => rand(),
                    'nama' => $a,
                    'email' => $b,
                    'subjek' => $c,
                    'pesan' => $d,
                    'id_user'=> $e,
                    'tgl_tamu' => date('Y-m-d')
                );
              $this->tamu_model->savetamu($data);
    $this->session->set_flashdata('success','<b><i class="icon fa fa-check-square"></i> Success!!</b><br> Terimakasih! Pesan kritik dan saran anda telah terkirim...');
    redirect(base_url('blog/buku_tamu/'.$e));
   } else {
    
    $this->session->set_flashdata('salah','<b><i class="icon fa fa-close"></i> Kode Keamanan Salah :( </b><br> Silahkan Masukan Kembali Kode Keamanannya...');
    redirect(base_url('blog/buku_tamu/'.$e));
   }
  }
	
}
