<?php

class KuesionerReport extends CI_Controller
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
    $indicator_type = $this->input->get('indicator_type');
    $tahun = $this->input->get('tahun');
    $submitted = $this->input->get('submitted');
    if(empty($indicator_type) && empty($tahun) && empty($submitted)){
      $lap = $this->db->query("SELECT indicator_type, ROUND(AVG(respon_reality_answer),3) as avgKinerja, ROUND(AVG(respon_perception_answer),3) as avgHarapan, 
SUM(IF(respon_reality_answer=4, 1, 0)) as aa,
SUM(IF(respon_reality_answer=3, 1, 0)) as ab,
SUM(IF(respon_reality_answer=2, 1, 0)) as ac,
SUM(IF(respon_reality_answer=1, 1, 0)) as ad,

         COUNT(*) as total 
FROM tbl_respon WHERE YEAR(created_at) = YEAR(NOW()) GROUP BY indicator_type");

      $data = [
        'title' => "Hasil Kuesioner ".appName(),
        'total_layanan' => $this->Questionnaire->avgBy(['SUM(respon_perception_answer) as perception','SUM(respon_reality_answer) as reality'],['indicator_type'=>'layanan'],'id_pertanyaan'),
        'total_produk' => $this->Questionnaire->avgBy(['SUM(respon_perception_answer) as perception','SUM(respon_reality_answer) as reality'],['indicator_type'=>'produk'],'id_pertanyaan'),
        'responden' => $this->Questionnaire->responden('customer_id'),
        'a' => "A",
        'questionnaire' => $this->Questionnaire->all(),
        "laporan"=>$lap->result(),
      ];
      $this->main_lib->getTemplate('admin/kuesioner/report/report', $data);
    }else {

      $lap = $this->db->query("SELECT indicator_type, ROUND(AVG(respon_reality_answer),3) as avgKinerja, ROUND(AVG(respon_perception_answer),3) as avgHarapan, 
SUM(IF(respon_reality_answer=4, 1, 0)) as aa,
SUM(IF(respon_reality_answer=3, 1, 0)) as ab,
SUM(IF(respon_reality_answer=2, 1, 0)) as ac,
SUM(IF(respon_reality_answer=1, 1, 0)) as ad,
COUNT(*) as total 
FROM tbl_respon WHERE YEAR(created_at) = $tahun GROUP BY indicator_type");

      $data = [
        'title' => "Hasil Kuesioner ".appName(),
        'total_layanan' => $this->Questionnaire->avgBy(['SUM(respon_perception_answer) as perception','SUM(respon_reality_answer) as reality'],['indicator_type'=>$indicator_type],'id_pertanyaan',$tahun),
        'indicator_type' => $indicator_type,
        'tahun' =>$tahun,
        'responden' => $this->Questionnaire->responden('customer_id'),
        'a' => "A",
        'questionnaire' => $this->Questionnaire->all(),
        "laporan"=>$lap->result(),
      ];
      $this->main_lib->getTemplate('admin/kuesioner/report/report', $data);
    }
  }
}

?>
