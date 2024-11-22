  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria extends My_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->library('form_validation');
        $this->load->library('session');

	}

	public function index()
	{
      $this->db->select('*');
      $this->db->join('dimensi', 'kriteria.id_dimensi = dimensi.id_dimensi');
      $this->db->from('kriteria');
      $query = $this->db->get();
         $data=array(
            "dimensies"=>$this->db->get('dimensi')->result(),
            "kriterias"=>$query->result()
        );
		 $this->Paging('isi/adm/kriteria',$data);
	}


	
      public function add()
    {
        $this->form_validation->set_rules('kriteria', 'kriteria', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('adm/kriteria');
        }else{
            $data=array(
                "kriteria"=>$_POST['kriteria'],
                "id_dimensi"=>$_POST['id_dimensi']
            );
            $this->db->insert('kriteria',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
            redirect('adm/kriteria');
        }
    }

    public function edit()
    {
        $this->form_validation->set_rules('id_kriteria', 'id_kriteria', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('adm/kriteria');
        }else{
            $data=array(
                "kriteria"=>$_POST['kriteria'],
                "id_dimensi"=>$_POST['id_dimensi']
            );
            $this->db->where('id_kriteria', $_POST['id_kriteria'] );
            $this->db->update('kriteria',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Diedit");
            redirect('adm/kriteria');
        }
    }



    public function hapus($id)
    {
        if($id==""){
            $this->session->set_flashdata('error',"Data Gagal Di Hapus");
            redirect('adm/kriteria');
        }else{
            $this->db->where('id_kriteria', $id);
            $this->db->delete('kriteria');
            $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
            redirect('adm/kriteria');
        }
    }
	
}
