<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_Admin extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        is_logged_in(); //helper fungsi
        $this->load->library('form_validation');
        $this->load->model('M_Laporan_Admin'); 
    }

    public function index()
    {
        $data['session'] = $this->db->select('*')
        ->from('user')
        ->join('prodi', 'user.id_prodi = prodi.id_prodi')
        ->where('username', $this->session->userdata('username'))
        ->get()->row_array();
        
        $data['kluster1']= $_POST['kluster1'];
        $data['kluster2']= $_POST['kluster2'];
        $cluster = $_POST['kluster1'];
        $cluster2 = $_POST['kluster2'];
        $data['pusat'] = $this->db->get_where('nilai', ['id_nilai'=> $cluster])->row();
        $data['pusat2'] = $this->db->get_where('nilai', ['id_nilai'=> $cluster2])->row();
        $data['nilaiku']= $this->db->get('nilai')->result();
        $data['laporan_admin']= $this->M_Laporan_Admin->tampil_data()->result(); //menampilkan semua data

	 	$this->load->view('template/header',$data);
	 	$this->load->view('template/sidebar',$data);
	 	$this->load->view('laporan/laporan_admin',$data);
	 	$this->load->view('template/footer');
    }

    

}
