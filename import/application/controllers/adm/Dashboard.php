  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends My_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->library('form_validation');
        $this->load->library('session');

	}

	public function index(){
		$this->Paging('portal');

	}

	public function survei_masuk(){
		$this->Paging('isi/adm/survei_masuk');

	}
	
}