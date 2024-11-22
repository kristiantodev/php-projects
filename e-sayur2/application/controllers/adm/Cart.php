  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends MY_Controller {

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
        $idUser= $this->session->userdata("id_user");
        $sayur = $this->db->query("SELECT*FROM keranjang LEFT JOIN sayur ON sayur.id_sayur=keranjang.id_sayur WHERE keranjang.status=1 AND id_user=".$idUser." AND keranjang.deleted=0 ");
        $kategori = $this->db->query("SELECT*FROM kategori WHERE deleted=0");
        $sayur2 = $this->db->query("SELECT*FROM sayur WHERE deleted=0");



         $data=array(
            "sayurku"=>$sayur->result(),
            "kategoriku"=>$kategori->result(),
            "sayurku2"=>$sayur2->result(),
        );

         $this->MyPage('isi/front/keranjang',$data);
    }

    public function hapus($id)
    {
        if($id==""){
            $this->session->set_flashdata('error',"Data Gagal Di Hapus");
            redirect('adm/cart');
        }else{
            $data=array(
                "deleted"=> 1
            );
            $this->db->where('id_keranjang', $id);
            $this->db->update('keranjang',$data);
            $this->session->set_flashdata('sukses',"hapus");
            redirect('adm/cart');
        }
    }

    public function keranjang($id){

        if($id==""){
            $this->session->set_flashdata('error',"Data Gagal Di Tambah");
            redirect('adm/cart');
        }else{
            $idUser= $this->session->userdata("id_user");
            $idSayur = $id;
            $cekQuery = $this->db->query("SELECT * FROM keranjang WHERE id_user = '$idUser' AND id_sayur=$idSayur AND status=1 ")->result_array();
            if(count($cekQuery) <= 0){
            $data=array(
                "id_sayur"=>$idSayur,
                "id_user"=>$idUser,
                "status" => 1,
                "deleted" => 0
            );
            $this->db->insert('keranjang',$data);
            $this->session->set_flashdata('sukses',"berhasil");
            redirect('adm/cart');
            }else{
            $this->session->set_flashdata('sukses',"gagalkeranjang");
            redirect('adm/cart');
            }
        }
    }

    public function checkout(){
    $check = $this->input->post('pilihanku');
    $keranjangCek = $this->input->post('keranjang');
    $idSayur = $this->input->post('idSayur');
    $qtySayur = $this->input->post('qtySayur');
    $time =  Date('Y-m-d h:i:s');
    
            $idku = rand();
            $u=0;
            while ($u < sizeof($keranjangCek)) {

                    $data = array(
                    'status' => 2,
                    'id_transaksi' => $idku
                    );
                    $this->db->where('id_keranjang', $keranjangCek[$u]);
                    $this->db->update('keranjang',$data);
                    
                    $stock = array(
                        'stock' => $qtySayur[$u]
                    );
                    $this->db->where('id_sayur', $idSayur[$u]);
                    $this->db->update('sayur',$stock);

                 $u++;
            } 
            // var_dump($idSayur);
               
            $dataTransaksi = array(
                'id_transaksi' => $idku,
                'tgl_transaksi' => $time,
                'id_user' => $this->session->userdata("id_user"),
                'hp' => $this->input->post('hp'),
                'alamat' => $this->input->post('alamat')
            );

            $this->db->insert('transaksi',$dataTransaksi);
            $this->session->set_flashdata('sukses',"berhasil");
            redirect('adm/cart');
  }

    public function add()
    {
        $this->form_validation->set_rules('id_sayur', 'id_sayur', 'required');
        $idSayur = $_POST['id_sayur'];
        $cekQty = $this->db->query("SELECT stock FROM sayur WHERE id_sayur = '".$idSayur."'")->row();
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('adm/cart');
        } else if ($_POST['qty'] > $cekQty->stock){
            $this->session->set_flashdata('sukses','gagalqty');
            redirect('adm/cart');
        } else {

            $idUser= $this->session->userdata("id_user");
            $cekQuery = $this->db->query("SELECT * FROM keranjang WHERE id_user = '$idUser' AND id_sayur=$idSayur AND status=1 AND deleted=0 ")->result_array();
            if(count($cekQuery) <= 0){
            $data=array(
                "id_sayur"=>$_POST['id_sayur'],
                "id_user"=>$idUser,
                "status" => 1,
                "deleted" => 0,
                "qty" => $_POST['qty']
            );
            $this->db->insert('keranjang',$data);
            $this->session->set_flashdata('sukses',"berhasil");
            redirect('adm/cart');
            }else{
            $this->session->set_flashdata('sukses',"gagalkeranjang");
            redirect('adm/cart');
            }
        }
    }
}
