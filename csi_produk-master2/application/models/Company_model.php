<?php


class Company_model extends Main_model
{
  protected $pk = 'id_profile_perusahaan';
  protected $table = 'tbl_perusahaan';
  public function getProfile()
  {
    $query = $this->db->get($this->table);
    if ($query->num_rows() < 0) {
      return 'none';
    }else{
      return $query->row();
    }
  }
}

?>
