<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_User extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        is_logged_in(); //helper fungsi
        $this->load->library('form_validation');
        $this->load->model('M_Laporan_User'); 
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
        $data['nilaiku2']= $this->db->get('nilai')->result();
        $data['laporan_user']= $this->M_Laporan_User->tampil_data()->result();

        $data['nilaiku'] = $this->db->select('*')
        ->from('nilai')
        ->join('mahasiswa', 'nilai.nim = mahasiswa.nim')
        ->where('mahasiswa.id_prodi', $this->session->userdata('id_prodi'))
        ->get()->result();

	 	$this->load->view('template/header',$data);
	 	$this->load->view('template/sidebar',$data);
	 	$this->load->view('laporan/laporan_user',$data);
	 	$this->load->view('template/footer');
    }

    

}
