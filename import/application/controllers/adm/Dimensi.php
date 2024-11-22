  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dimensi extends My_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->library('form_validation');
        $this->load->library('session');

	}

	public function index(){
		$this->db->select('*');
         $this->db->from('dimensi');
         $query = $this->db->get();
         $data=array(
            "dimensies"=>$query->result(),
        );
		$this->Paging('isi/adm/dimensi',$data);

	}

	public function hapus($id)
    {
        if($id==""){
            $this->session->set_flashdata('error',"Data Gagal Di Hapus");
            redirect('adm/dimensi');
        }else{
            $this->db->where('id_dimensi', $id);
            $this->db->delete('dimensi');
            $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
            redirect('adm/dimensi');
        }
    }

    public function add()
    {
        $this->form_validation->set_rules('nama_dimensi', 'nama_dimensi', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('adm/dimensi');
        }else{
            $data=array(
                "nama_dimensi"=>$_POST['nama_dimensi']
            );
            $this->db->insert('dimensi',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
            redirect('adm/dimensi');
        }
    }

    public function edit()
    {
        $this->form_validation->set_rules('id_dimensi', 'id_dimensi', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('adm/dimensi');
        }else{
            $data=array(
                "nama_dimensi"=>$_POST['nama_dimensi']
            );
            $this->db->where('id_dimensi', $_POST['id_dimensi'] );
            $this->db->update('dimensi',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Diedit");
            redirect('adm/dimensi');
        }
    }
	
}
