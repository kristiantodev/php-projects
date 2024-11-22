  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey extends My_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->library('form_validation');
        $this->load->library('session');

	}

	

    public function index()
    {
         $this->Mysurvey('vsurvey');
    }

    public function modalsurvey()
    {
         $data=array(
            "biodataku"=>$this->db->get('tblbiodata')->result(),
        );
         $this->Mysurvey('tabel_survey', $data);
    }

    public function modalsurvey3()
    {
         $data=array(
            "biodataku"=>$this->db->get('tblbiodata')->result(),
        );
         $this->Mysurvey('tabel_survey3', $data);
    }

    public function modalsurvey2()
    {
         $data=array(
            "biodataku"=>$this->db->get('tblbiodata')->result(),
        );
         $this->Mysurvey('tabel_survey2', $data);
    }

	

     

    public function proses_survey()
    {
        $this->form_validation->set_rules('i', 'i', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('welcome/survey');
        }else{
            $data=array(
                "i"=>$_POST['i'],
                "p"=>$_POST['p'],
                "hasil"=>$_POST['hasil']
            );
            $this->db->insert('survey',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
            redirect('welcome/survey');
        }
    }
	
}
