<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends Main_model
{

    protected $table = "tbl_users";

    public function getPicture($key, $value)
    {
        $sql = $this->db->select("user_image")->from($this->table)
            ->where($key, $value)->get();
        return $sql->row();
    }
    public function getAllUser()
    {
      $this->db->where_not_in('is_deleted', '0');
      $query = $this->db->from($this->table.' a')->join('groups b','b.id = a.user_groups_id','left')->get();
      return $query->result();
    }
}

/* End of file User_model.txt */
/* Location: ./application/models/User_model.txt */
