<?php
class Questionnaire extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
  }
  public function index($params = '')
  {
    if ($params === '') {
      $message = [
        'type'=> "error",
        'text' => "Sorry, Token Not Exist"
      ];
      $this->session->set_userdata('message', $message);
      redirect(site_url());
    }
    $check = $this->Customer->countBy('customer_token',['customer_token'=>$params]);
    if ($check->jumlah > 0) {
      $cust = $this->Customer->findById(['customer_token'=>$params]);
      $question = $this->Questionnaire->countBy('customer_id',['customer_id' => $cust->customer_id]);
      if($question->jumlah > 0){
        $data = [
          'title' => 'Result | Padi Kapas',
          'customer' => $this->Customer->findById(['customer_token'=>$params]),
          'total_layanan' => $this->Questionnaire->avgBy(['SUM(respon_perception_answer) as perception','SUM(respon_reality_answer) as reality'],['customer_id' => $cust->customer_id, 'indicator_type'=>'layanan'],'id_pertanyaan'),
          'total_produk' => $this->Questionnaire->avgBy(['SUM(respon_perception_answer) as perception','SUM(respon_reality_answer) as reality'],['customer_id' => $cust->customer_id, 'indicator_type'=>'produk'],'id_pertanyaan'),
          'responden' => $this->Questionnaire->responden('customer_id', ['customer_id' => $cust->customer_id]),
        ];
        $this->main_lib->getFrontend('result_per_customer', $data);
      }else{
        $data = [
          'title' => 'Take A Customer Questionnaire',
          'customer' => $this->Customer->findById(['customer_token'=>$params]),
          'indikator' => $this->Indikator->all(),
        ];
        $this->main_lib->getFrontend('question', $data);
      }
    }else{
      $message = [
        'type'=> "error",
        'text' => "Sorry, Token Not Registered"
      ];
      $this->session->set_userdata('message', $message);
      redirect(site_url());
    }

  }
  public function setAnswer()
  {
    // code...
    if (isset($_POST['submit'])) {
      $customer_token = $this->main_lib->getPost('customer_token');
      $customer_id = $this->main_lib->getPost('customer_id');
      $id_indikator = $this->main_lib->getPost('id_indikator');
      $id_pertanyaan = $this->main_lib->getPost('id_pertanyaan');
      $presepsi = $this->main_lib->getPost('presepsi');
      $reality = $this->main_lib->getPost('reality');
      $indicator_type = $this->main_lib->getPost('indicator_type');
      $data_respon = [];
      $indikator = $this->Indikator->all();
      foreach ($indikator as $key => $value) {
        $pertanyaan = $this->Pertanyaan->only('tbl_indikator_pertanyaan',['id_indikator'=>$value->id_indikator]);
        foreach ($pertanyaan as $key => $row) {
          array_push($data_respon, [
            'customer_id'=> $customer_id[$row->id_pertanyaan],
            'indicator_type' => $indicator_type[$row->id_pertanyaan],
            'id_indikator'=> $id_indikator[$row->id_pertanyaan],
            'id_pertanyaan'=> $id_pertanyaan[$row->id_pertanyaan],
            'respon_perception_answer' => $presepsi[$row->id_pertanyaan],
            'respon_reality_answer' => $reality[$row->id_pertanyaan]
          ]);
        }
      }
      $insert = $this->Questionnaire->insert($data_respon, TRUE);
      if ($insert) {
        $message = [
          'type' => 'success',
          'text' => 'Respon has been saved!'
        ];
      }else{
        $message = [
          'type' => 'error',
          'text' => 'Respon Failed Saved!'
        ];
      }
      $this->session->set_flashdata('message', $message);
      $this->session->set_userdata('customer_token', $customer_token);
      redirect(site_url('questionnaire/'.$customer_token), 'reload');
    }
  }
}

?>
