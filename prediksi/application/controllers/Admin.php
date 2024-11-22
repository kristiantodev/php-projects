<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        is_logged_in(); //helper fungsi   
    }

    public function index()
    {
        $query = $this->db->select('*')
          ->from('user')
          ->join('prodi', 'user.id_prodi = prodi.id_prodi')
          ->where('username', $this->session->userdata('username'))
          ->get();

      $grafik = $this->db->query("SELECT angkatan, COUNT(*) as total 
         FROM mahasiswa GROUP BY angkatan");

      $data=array(
            "session"=>$query->row_array(),
            "hasil"=>$grafik->result()
        );


	 	$this->load->view('template/header',$data);
	 	$this->load->view('template/sidebar',$data);
	 	$this->load->view('admin/home',$data);
	 	$this->load->view('template/footer');
    }


}
