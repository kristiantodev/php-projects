<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Akademik extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        is_logged_in(); //helper fungsi
        $this->load->library('form_validation');
        $this->load->model('M_Data_Akademik'); 
    }

    public function index()
    {
        $data['session'] = $this->db->select('*')
        ->from('user')
        ->join('prodi', 'user.id_prodi = prodi.id_prodi')
        ->where('username', $this->session->userdata('username'))
        ->get()->row_array();

        $data['nilaiku']= $this->db->get('nilai')->result(); //menampilkan semua data
    

	 	$this->load->view('template/header',$data);
	 	$this->load->view('template/sidebar',$data);
	 	$this->load->view('akademik/data_akademik',$data);
	 	$this->load->view('template/footer');
    }

    

}
