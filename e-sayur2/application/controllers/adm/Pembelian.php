  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian extends MY_Controller {

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

       if(isset($_POST['bulan']) )
        {
            $bulan = $_POST['bulan'];
            $tahun = $_POST['tahun'];
            $sayur = $this->db->query("SELECT*FROM keranjang LEFT JOIN sayur ON sayur.id_sayur=keranjang.id_sayur WHERE keranjang.status=2 AND keranjang.deleted=0 ");
            $transaksi = $this->db->query("SELECT transaksi.id_transaksi, user.nm_user, transaksi.file_pembayaran, transaksi.status, tgl_transaksi, SUM(sayur.harga*keranjang.qty) AS total FROM transaksi LEFT JOIN keranjang ON keranjang.id_transaksi=transaksi.id_transaksi LEFT JOIN sayur ON keranjang.id_sayur=sayur.id_sayur LEFT JOIN user ON user.id_user=transaksi.id_user 
                WHERE MONTH(transaksi.tgl_transaksi)='$bulan' AND YEAR(transaksi.tgl_transaksi)='$tahun' GROUP BY transaksi.id_transaksi ORDER BY transaksi.tgl_transaksi DESC");
        }else{
            $bulan = "";
            $tahun = "";
            $sayur = $this->db->query("SELECT*FROM keranjang LEFT JOIN sayur ON sayur.id_sayur=keranjang.id_sayur WHERE keranjang.status=2 AND keranjang.deleted=0 ");
            $transaksi = $this->db->query("SELECT transaksi.id_transaksi, user.nm_user, transaksi.file_pembayaran, transaksi.status, tgl_transaksi, SUM(sayur.harga*keranjang.qty) AS total FROM transaksi LEFT JOIN keranjang ON keranjang.id_transaksi=transaksi.id_transaksi LEFT JOIN sayur ON keranjang.id_sayur=sayur.id_sayur LEFT JOIN user ON user.id_user=transaksi.id_user GROUP BY transaksi.id_transaksi ORDER BY transaksi.tgl_transaksi DESC");
        }

         $data=array(
            "sayurku"=>$sayur->result(),
            "transaksiku"=>$transaksi->result(),
            "bulanShow"=>$bulan,
            "tahunShow"=>$tahun,
        );

         $data=array(
            "sayurku"=>$sayur->result(),
            "transaksiku"=>$transaksi->result(),
        );

		 $this->Mypage('isi/adm/pembelian',$data);
	}

    public function konfirmasi($id)
    {
        if($id==""){
            $this->session->set_flashdata('error',"Data Gagal Di Update");
            redirect('adm/pembelian');
        }else{
            $data=array(
                "status"=> 2
            );
            $this->db->where('id_transaksi', $id);
            $this->db->update('transaksi',$data);
            $this->session->set_flashdata('sukses',"berhasil");
            redirect('adm/pembelian');
        }
    }
	
}
