<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda_model extends CI_Model
{
    private $_table = "agenda";
    public $id_agenda;
    public $nm_agenda;
    public $tgl_agenda;
    public $tgl_selesai;
    public $waktu_agenda;
    public $tempat_agenda;
    public $status;
    public $status_after;

    public function rules()
    {
        return [

            ['field' => 'nm_agenda',
            'label' => 'Nama_agenda',
            'rules' => 'required'],

            ['field' => 'tgl_selesai',
            'label' => 'Tgl_selesai',
            'rules' => 'required'],

            ['field' => 'waktu_agenda',
            'label' => 'Waktu_agenda',
            'rules' => 'required'],

            ['field' => 'tempat_agenda',
            'label' => 'Tempat_agenda',
            'rules' => 'required']

        ];
    }


    public function getAll()
    {
        $tgl = date('y-m-d');
        $this->db->select('*');
      $this->db->from('agenda');
      $this->db->where('status', 'Publish');
      $this->db->limit(4);
      $this->db->order_by('tgl_selesai', 'DESC');
      $query = $this->db->get();
      return $query->result();
    }

    public function getA()
    {
        $this->db->select('*');
      $this->db->from('agenda');
      $this->db->where('status', 'Publish');
      $this->db->order_by('tgl_selesai', 'DESC');
      $query = $this->db->get();
      return $query->result();
    }
	
    public function getAll2()
    {
        return $this->db->get($this->_table)->result();
    }

    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_agenda" => $id])->row();
    }


    public function save()
    {
        $post = $this->input->post();
        $this->id_agenda = rand();
        $this->nm_agenda = $post["nm_agenda"];
        $this->tgl_agenda = $post["tgl_agenda"];
        $this->tgl_selesai = $post["tgl_selesai"];
        $this->waktu_agenda = $post["waktu_agenda"];
        $this->tempat_agenda = $post["tempat_agenda"];
        $this->status = "Publish";
        $this->status_after = "Selesai";
        
        $this->db->insert($this->_table, $this);
    }

 public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_agenda" => $id));
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_agenda = $post["id_agenda"];
        $this->nm_agenda = $post["nm_agenda"];
        $this->tgl_agenda = $post["tgl_agenda"];
        $this->tgl_selesai = $post["tgl_selesai"];
        $this->waktu_agenda = $post["waktu_agenda"];
        $this->tempat_agenda = $post["tempat_agenda"];
        $this->status = "Publish";
        $this->status_after = "Selesai";

        $this->db->update($this->_table, $this, array('id_agenda' => $post['id_agenda']));
    }
 

 
}
