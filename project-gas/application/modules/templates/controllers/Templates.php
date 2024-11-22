<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Templates extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
        parent::__construct();
        // $this->load->helper('guzzle_request_helper');
        $this->load->model('templates/m_template');
    }

	public function pageTemplates($page_content)
	{
		$dataNotifikasi = $this->m_template->getNotification();
		$data["page_content"] = $page_content["page"];
        $data["css"] = $page_content["css"];
        $data["js"] = $page_content["js"];
        $data["title"] = $page_content["title"];
		$data["data"] = $page_content["data"];
		$data["data"]["notifikasi"] = $dataNotifikasi;
		
		$this->load->view("templates/templates", $data);
	}
}
