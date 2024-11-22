<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login_super extends CI_Model {

    public function __construct(){
        parent::__construct();
        // $this->load->helper('guzzle_request_helper');
    }

    function authentication($username, $password, $level){
        $this->db->select('*');
        $this->db->from("user");
        $this->db->where("username like binary",$username);
        $this->db->where("password",$password);
        $this->db->where("level",$level);
        // $this->db->where("status","Aktif");
        // $this->db->query("SELECT * FROM user WHERE username = '".$username."' AND password = '". 
        // $password ."' AND level = ". $level)
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            return $query->result_array();
        }
        return false;
    }

    function auth_super($username,$password){
        $this->db->select('*');
        $this->db->from("admin");
        $this->db->where("username like binary",$username);
        $this->db->where("password",$password);
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
        return $query->result_array();
        }
        return false;
    }

    function auth_tps($username,$password){
        $this->db->select('admin_tps.*, kegiatan.*');
        $this->db->from('admin_tps');
        $this->db->join('kegiatan','admin_tps.id_kegiatan = kegiatan.id_kegiatan');
        $this->db->where('admin_tps.username like binary',$username);
        $this->db->where('admin_tps.password',$password);
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
        return $query->result_array();
        }
        return false;
    }

    function register_user($data){
        $this->db->insert('user', $data);
    }

    function register_pelanggan($data){
        $this->db->insert('data_pelanggan', $data);
        $inserted_id = $this->db->insert_id();
        return $inserted_id;
    }
}
