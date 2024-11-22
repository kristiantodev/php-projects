<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Questionnaire_model extends Main_model
{
    protected $table = "tbl_respon";
    public function responden($column, $where = NULL)
    {
      $this->db->distinct();
      $this->db->select($column);
      $this->db->group_by($column);
      if ($where != NULL) {
        $this->db->where($where);
      }
      return $this->db->get($this->table)->num_rows();
    }
}
?>
