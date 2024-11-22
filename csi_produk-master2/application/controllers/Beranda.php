<?php
/**
 *
 */
class Beranda extends CI_Controller
{
  public $data = [];
  function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
    $this->data['title'] = 'Selamat Datang | '.appName();
    $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
    $this->main_lib->getFrontend2('beranda', $this->data);
  }
  
}

?>
