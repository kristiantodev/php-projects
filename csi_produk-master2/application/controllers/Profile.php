<?php
/**
 *
 */
class Profile extends CI_Controller
{
  public $data = [];
  function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
    $params = $this->session->userdata('url');
    $this->data['title'] = 'Selamat Datang | '.appName();
    $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
    $this->data['customer'] = $this->Customer->findById(['customer_token'=>$params]);
    $this->main_lib->getFrontend('profile', $this->data);
  }
  public function check_ip()
  {
    $ip = $this->input->ip_address();
    $no_hp = $this->main_lib->getPost('customer_hp');
    $gender = $this->main_lib->getPost('customer_gender');
    $profession = $this->main_lib->getPost('customer_profession');
    $name = $this->main_lib->getPost('customer_name');
    $datacustomer = [
      'customer_name' => $name,
      'customer_hp' => $no_hp,
      'customer_profession' => $profession,
      'customer_gender' => $gender,
      'customer_ip' => $ip
    ];
    $already = $this->Customer->countBy('customer_ip',['customer_ip'=>$ip, 'customer_hp'=>$no_hp]);
    if($already->jumlah > 0){
      $message = [
        'type' => 'error',
        'text' => 'Identitas Sudah Digunakan'
      ];
      $this->session->set_flashdata('message', $message);
      redirect(site_url());
    }else{
      $token = $this->db->set('customer_token','UUID_SHORT()', FALSE);
      $this->Customer->insert($datacustomer);
      $cust = $this->Customer->findById($datacustomer);
      $message = [
        'type' => 'success',
        'text' => 'Identitas berhasil disimpan!'
      ];
      $this->session->set_flashdata('message', $message);
      $this->session->set_userdata('url', $cust->customer_token);
      $this->session->set_userdata('customer', $cust);
      redirect(site_url('questionnaire/'.$cust->customer_token));
    }

  }
}

?>
