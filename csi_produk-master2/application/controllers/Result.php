<?php

class Result extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
    $data = [
      'title' => 'Result | Padi Kapas',
      'total_layanan' => $this->Questionnaire->avgBy(['SUM(respon_perception_answer) as perception','SUM(respon_reality_answer) as reality'],['indicator_type'=>'layanan'],'id_pertanyaan'),
      'total_produk' => $this->Questionnaire->avgBy(['SUM(respon_perception_answer) as perception','SUM(respon_reality_answer) as reality'],['indicator_type'=>'produk'],'id_pertanyaan'),
      'responden' => $this->Questionnaire->responden('customer_id'),
    ];
    $this->main_lib->getFrontend('result', $data);
  }
}

?>
