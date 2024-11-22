  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class grafik extends My_Controller {
public function __construct()
    {
        parent::__construct();
         $this->load->model("tamu_model");
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('statistik_model');

        if($this->session->userdata('level')!="Administrator"){
        	$this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }

    }
	public function index()
	{
         foreach($this->statistik_model->statistik_pengunjung3()->result_array() as $row)
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
    $data['grafik'][]=(float)$row['Januari2'];
    $data['grafik'][]=(float)$row['Februari2'];
    $data['grafik'][]=(float)$row['Maret2'];
    $data['grafik'][]=(float)$row['April2'];
    $data['grafik'][]=(float)$row['Mei2'];
    $data['grafik'][]=(float)$row['Juni2'];
    $data['grafik'][]=(float)$row['Juli2'];
    $data['grafik'][]=(float)$row['Agustus2'];
    $data['grafik'][]=(float)$row['September2'];
    $data['grafik'][]=(float)$row['Oktober2'];
    $data['grafik'][]=(float)$row['November2'];
    $data['grafik'][]=(float)$row['Desember2'];
    $data['grafik'][]=(float)$row['Juni3'];
    $data['grafik'][]=(float)$row['Juli3'];
    $data['grafik'][]=(float)$row['Agustus3'];
    $data['grafik'][]=(float)$row['September3'];
    $data['grafik'][]=(float)$row['Oktober3'];
    $data['grafik'][]=(float)$row['November3'];
    $data['grafik'][]=(float)$row['Desember3'];
   }
         $data["tamuku"] = $this->tamu_model->get_tamu();
         $data["title"] = "Grafik Kunjungan Website - Admin";
         $this->page_grafik('isi/grafik',$data);
       
	}

public function lihat()
    {
         $b = $this->input->post('bl');
         $tahun = $this->input->post('year');
         foreach($this->statistik_model->statistik_filter($b, $tahun)->result_array() as $row)
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
    $data['grafik'][]=(float)$row['Januari2'];
    $data['grafik'][]=(float)$row['Februari2'];
    $data['grafik'][]=(float)$row['Maret2'];
    $data['grafik'][]=(float)$row['April2'];
    $data['grafik'][]=(float)$row['Mei2'];
    $data['grafik'][]=(float)$row['Juni2'];
    $data['grafik'][]=(float)$row['Juli2'];
    $data['grafik'][]=(float)$row['Agustus2'];
    $data['grafik'][]=(float)$row['September2'];
    $data['grafik'][]=(float)$row['Oktober2'];
    $data['grafik'][]=(float)$row['November2'];
    $data['grafik'][]=(float)$row['Desember2'];
    $data['grafik'][]=(float)$row['Juni3'];
    $data['grafik'][]=(float)$row['Juli3'];
    $data['grafik'][]=(float)$row['Agustus3'];
    $data['grafik'][]=(float)$row['September3'];
    $data['grafik'][]=(float)$row['Oktober3'];
    $data['grafik'][]=(float)$row['November3'];
    $data['grafik'][]=(float)$row['Desember3'];
   }
 
         $data['b'] = $b;
         $data['y'] = $tahun;
         $data["title"] = "Grafik Kunjungan Website - Admin";
         $this->page_grafik('isi/grafik_filter',$data);
       
    }

    
}
