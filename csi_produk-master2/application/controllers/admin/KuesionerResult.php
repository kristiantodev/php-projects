<?php

class KuesionerResult extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    if (!isAuthenticated()) {
        redirect(site_url('login'));
    }
  }
  public function index()
  {
    $data = [
      'title' => "Hasil Kuesioner ".appName(),
      'responden' => $this->Customer->all(),
      'indikator' => $this->Indikator->all(),
    ];
    $this->main_lib->getTemplate('admin/kuesioner/result/result', $data);
  }
}

?>
