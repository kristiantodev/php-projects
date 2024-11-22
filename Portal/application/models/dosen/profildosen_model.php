<?php defined('BASEPATH') OR exit('No direct script access allowed');

class profildosen_model extends CI_Model
{
    private $_table = "profil_dosen";

    public $id_user;
    public $nidn;
    public $nm_lengkap;
    public $jk;
    public $alamat;
    public $jabatan_struktural;
    public $jabatan_fungsional;
    public $pend_tertinggi;
    public $status_ikatan_kerja;
    public $s1;
    public $s2;
    public $tgl_ditambah;

    public function rules()
    {
        return [

            ['field' => 'id_user',
            'label' => 'Id_user',
            'rules' => 'required|is_unique[dosen.id_user]']

        ];
    }

    function savebio($idku, $nm_lengkap){ 
        $hsl=$this->db->query("INSERT INTO profil_dosen (id_user, nm_lengkap) VALUES ('$idku', '$nm_lengkap')");
        return $hsl;
    }

    public function ruless()
    {
        return [

            ['field' => 'id_user',
            'label' => 'Nidn',
            'rules' => 'required']


        ];
    }

    public function getAll()
    {
      $this->db->select('*');
      $this->db->from('profil_dosen');
      $this->db->order_by('tgl_ditambah', 'ASC');
      $query = $this->db->get();
      return $query->result();
    }

    public function getAll2()
    {
      $this->db->select('*');
      $this->db->join('users', 'profil_dosen.id_user = users.id_user');
      $this->db->from('profil_dosen');
      $this->db->order_by('profil_dosen.tgl_ditambah', 'ASC');
      $query = $this->db->get();
      return $query->result();
    }
    

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_user" => $id])->row();
    }


    public function save()
    {
        $post = $this->input->post();

        $this->id_user = $post["id_user"];
        $this->nm_lengkap = $post["nm_lengkap"];
        $this->jk = $post["jk"];
        $this->alamat = $post["alamat"];
        $this->jabatan_fungsional = $post["jabatan_fungsional"];
        $this->pend_tertinggi = $post["pend_tertinggi"];
        $this->status_ikatan_kerja = $post["status_ikatan_kerja"];
        
        $this->db->insert($this->_table, $this);
    }



 public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_user" => $id));
    }

    public function update()
    {
        $post = $this->input->post();

        $this->id_user = $post["id_user"];
        $this->nidn = $post["nidn"];
        $this->nm_lengkap = $post["nm_lengkap"];
        $this->jk = $post["jk"];
        $this->alamat = $post["alamat"];
        $this->jabatan_struktural = $post["jabatan_struktural"];
        $this->jabatan_fungsional = $post["jabatan_fungsional"];
        $this->pend_tertinggi = $post["pend_tertinggi"];
        $this->status_ikatan_kerja = $post["status_ikatan_kerja"];
        $this->s1 = $post["s1"];
        $this->s2 = $post["s2"];
        $this->tgl_ditambah = $post["tgl_ditambah"];

        $this->db->update($this->_table, $this, array('id_user' => $post['id_user']));
    }

 
}
