  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends My_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->library('form_validation');
        $this->load->library('session');

	}

	public function index(){
		$this->db->select('*');
         $this->db->from('users');
         $query = $this->db->get();
         $data=array(
            "users"=>$query->result(),
        );
		$this->Paging('isi/adm/pengguna',$data);

	}

	public function hapus($id)
    {
        if($id==""){
            $this->session->set_flashdata('error',"Data Gagal Di Hapus");
            redirect('adm/pengguna');
        }else{
            $this->db->where('id_user', $id);
            $this->db->delete('users');
            $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
            redirect('adm/pengguna');
        }
    }

    public function add()
    {
        $this->form_validation->set_rules('nama_user', 'nama_user', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('adm/pengguna');
        }else{
            $pass = password_hash ($_POST['password'], PASSWORD_DEFAULT);
            $data=array(
                "username"=>$_POST['username'],
                "password"=>$pass,
                "nama_user"=>$_POST['nama_user'],
                "level"=>$_POST['level']
            );
            $this->db->insert('users',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
            redirect('adm/pengguna');
        }
    }

    public function edit()
    {
        $this->form_validation->set_rules('id_user', 'id_user', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('adm/pengguna');
        }else{
            $data=array(
                "nama_user"=>$_POST['nama_user'],
                "username"=>$_POST['username'],
                "level"=>$_POST['level']
            );
            $this->db->where('id_user', $_POST['id_user'] );
            $this->db->update('users',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Diedit");
            redirect('adm/pengguna');
        }
    }

	
}
