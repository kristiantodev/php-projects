  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portal extends My_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->library('form_validation');
        $this->load->library('session');

	}

	public function index(){
		$this->load->view('isi/home');

	}

	public function survei(){
	    $this->load->view('survei');	
	}

	public function sejarah(){
		$data=array(
            "perusahaan" => $this->db->get_where('profil_perusahaan', ['id'=> 1])->row()
        );
	    $this->load->view('isi/sejarah', $data);	
	}

public function kontak(){
	$data=array(
            "perusahaan" => $this->db->get_where('profil_perusahaan', ['id'=> 1])->row()
        );
	    $this->load->view('isi/kontak', $data);	
	}

	public function admin(){
		 $this->Paging('portal');
	}
	
}
