<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Indikator_model extends Main_model
{
    protected $table = "tbl_indikator_penilaian";
    public function getJoin()
    {
      $query = $this->db->query("SELECT DISTINCT tbl_indikator_penilaian.id_indikator, indikator_name, SUM(tbl_indikator_pertanyaan.id_indikator) AS `jumlah` FROM `tbl_indikator_penilaian` JOIN `tbl_indikator_pertanyaan` ON `tbl_indikator_penilaian`.`id_indikator` = `tbl_indikator_pertanyaan`.`id_indikator` GROUP BY tbl_indikator_pertanyaan.id_indikator");
      if($query->num_rows() > 0){
        return $query->result();
      }else{
        return 0;
      }
    }
}
?>
