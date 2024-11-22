<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Akademik2 extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        is_logged_in(); //helper fungsi
        $this->load->library('form_validation');
        $this->load->model('M_Data_nonAkademik'); 
    }

    public function index()
    {
    	$data['session'] = $this->db->select('*')
        ->from('user')
        ->join('prodi', 'user.id_prodi = prodi.id_prodi')
        ->where('username', $this->session->userdata('username'))
        ->get()->row_array();


        // $data['nilaiku']= $this->db->get('nilai')->result();
       $data['nilaiku'] = $this->db->select('*')
       ->from('nilai')
       ->join('mahasiswa','nilai.nim = mahasiswa.nim')
       ->where('mahasiswa.id_prodi', $this->session->userdata('id_prodi'))
       ->get()->result();

	 	$this->load->view('template/header',$data);
	 	$this->load->view('template/sidebar',$data);
	 	$this->load->view('akademik/data_akademik2',$data);
	 	$this->load->view('template/footer');
    }

    

}
