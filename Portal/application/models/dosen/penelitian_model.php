<?php defined('BASEPATH') OR exit('No direct script access allowed');

class penelitian_model extends CI_Model
{
    private $_table = "penelitian";

    public $id_penelitian;
    public $id_user;
    public $judul_penelitian;
    public $tempat_publikasi;
    public $link;
    public $tahun;

    public function rules()
    {
        return [

            ['field' => 'judul_penelitian',
            'label' => 'Judul_penelitian',
            'rules' => 'required']

        ];
    }

    
    public function getAll()
    {
        $this->db->select('*');
      $this->db->join('profil_dosen', 'profil_dosen.id_user = penelitian.id_user');
      $this->db->from('penelitian');
      $this->db->order_by('penelitian.tahun', 'DESC');
      $query = $this->db->get();
      return $query->result();
    }
    
    public function get_by_user(){     
       $this->db->where('id_user', $this->session->userdata('id_user'));
       $query = $this->db->get('penelitian');
       return $query->result();      
    }

    public function get_penelitian($id){     
       $this->db->where('id_user', $id);
       $query = $this->db->get('penelitian');
       return $query->result();      
    }


    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_penelitian" => $id])->row();
    }


    public function save()
    {
        $post = $this->input->post();
        $this->id_penelitian = rand();
        $this->id_user = $this->session->userdata('id_user');
        $this->judul_penelitian = $post["judul_penelitian"];
        $this->tempat_publikasi = $post["tempat_publikasi"];
        $this->tahun = $post["tahun"];
        $this->link = $post["link"];
        
        $this->db->insert($this->_table, $this);
    }


 public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_penelitian" => $id));
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_penelitian = $post["id_penelitian"];
        $this->id_user = $post['id_user'];
        $this->judul_penelitian = $post["judul_penelitian"];
        $this->tempat_publikasi = $post["tempat_publikasi"];
        $this->tahun = $post["tahun"];
        $this->link = $post["link"];
        
        $this->db->update($this->_table, $this, array('id_penelitian' => $post['id_penelitian']));
    }

 
}
