  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servperf extends My_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->library('form_validation');
        $this->load->library('session');

	}

	public function index(){
		$this->Paging('isi/adm/servperf');

	}
	
}
