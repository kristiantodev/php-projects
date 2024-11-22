<?php defined('BASEPATH') OR exit('No direct script access allowed');

class pkm_model extends CI_Model
{
    private $_table = "pkm";

    public $id_pkm;
    public $id_user;
    public $nm_kegiatan;
    public $tahun;

    public function rules()
    {
        return [

            ['field' => 'nm_kegiatan',
            'label' => 'nm_kegiatan',
            'rules' => 'required']

        ];
    }

    
    public function getAll()
    {
        $this->db->select('*');
      $this->db->join('profil_dosen', 'profil_dosen.id_user = pkm.id_user');
      $this->db->from('pkm');
      $this->db->order_by('pkm.tahun', 'DESC');
      $query = $this->db->get();
      return $query->result();
    }
    
    public function get_by_user(){     
       $this->db->where('id_user', $this->session->userdata('id_user'));
       $query = $this->db->get('pkm');
       return $query->result();      
    }

    public function get_pkm($id){     
       $this->db->where('id_user', $id);
       $query = $this->db->get('pkm');
       return $query->result();      
    }


    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_pkm" => $id])->row();
    }


    public function save()
    {
        $post = $this->input->post();
        $this->id_pkm = rand();
        $this->id_user = $this->session->userdata('id_user');
        $this->nm_kegiatan = $post["nm_kegiatan"];
        $this->tahun = $post["tahun"];
        
        $this->db->insert($this->_table, $this);
    }


 public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_pkm" => $id));
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_pkm = $post["id_pkm"];
        $this->id_user = $post['id_user'];
        $this->nm_kegiatan = $post["nm_kegiatan"];
        $this->tahun = $post["tahun"];
        
        $this->db->update($this->_table, $this, array('id_pkm' => $post['id_pkm']));
    }

 
}
