  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends My_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model("tamu_model");
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('statistik_model');

        if($this->session->userdata('level')!="Dosen"){
        	$this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman ini !!');
            redirect(site_url('login/'));
        }

    }
	public function index()
	{
         foreach($this->statistik_model->statistik_pengunjung2()->result_array() as $row)
   {
    $data['grafik'][]=(float)$row['Januari'];
    $data['grafik'][]=(float)$row['Februari'];
    $data['grafik'][]=(float)$row['Maret'];
    $data['grafik'][]=(float)$row['April'];
    $data['grafik'][]=(float)$row['Mei'];
    $data['grafik'][]=(float)$row['Juni'];
    $data['grafik'][]=(float)$row['Juli'];
    $data['grafik'][]=(float)$row['Agustus'];
    $data['grafik'][]=(float)$row['September'];
    $data['grafik'][]=(float)$row['Oktober'];
    $data['grafik'][]=(float)$row['November'];
    $data['grafik'][]=(float)$row['Desember'];
   }
         $data["tamuku"] = $this->tamu_model->get_tamu2();
         $data["title"] = "Dashboard - Dosen";
         $this->page_grafik('isi/home2', $data);       
	}

    
}
