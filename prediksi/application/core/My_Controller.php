<?php
defined('BASEPATH') or exit('No direct script access allowed');

class My_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //is_logged_in(); //helper fungsi
    }

    public function pagging($content, $data = NULL)
    {
        $data['header'] = $this->load->view('template/header', $data, TRUE);
        $data['sidebar'] = $this->load->view('template/sidebar', $data, TRUE);
        $data['content'] = $this->load->view($content, $data, TRUE);
        $data['footer'] = $this->load->view('template/footer', $data, TRUE);
        $this->load->view('template/index', $data);
    }
}
