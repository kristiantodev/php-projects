  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends My_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->library('form_validation');
        $this->load->library('session');
        if($this->session->userdata('level')!="Administrator"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }
	}

	public function index()
	{

    $grafik = $this->db->query("SELECT YEAR(transaksi.tgl_transaksi) AS tahun, SUM(sayur.harga*keranjang.qty) AS total FROM transaksi LEFT JOIN keranjang ON keranjang.id_transaksi=transaksi.id_transaksi LEFT JOIN sayur ON keranjang.id_sayur=sayur.id_sayur GROUP BY YEAR(transaksi.tgl_transaksi)");
      
         $dataArray=array(
            "grafikku" => $grafik->result(),
                  );
        // var_dump($dataArray);die;
		 $this->Mypage('isi/adm/dashboard', $dataArray);
	}

    
	
}
