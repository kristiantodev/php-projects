<?php

class Dashboard extends CI_Controller
{

  public function __construct()
    {
        parent::__construct();

        if (!isAuthenticated()) {
            redirect(site_url('auth'));
        }
    }
    public function index()
    {
      $data['title'] = 'Dashboard | Padi Kapas';
      $this->main_lib->getTemplate('admin/dashboard', $data);
    }
}


?>
