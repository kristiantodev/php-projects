<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kerjasama_model extends CI_Model
{
    private $_table = "kerja_sama";
    public $id_kerjasama;
    public $nm_perusahaan;
    public $thn_mulai;
    public $thn_berakhir;
    public $keterangan;
    

    public function rules()
    {
        return [
            ['field' => 'nm_perusahaan',
            'label' => 'Nm_perusahaan',
            'rules' => 'required']

        ];
    }

    

    public function getAll()
    {
      $this->db->select('*');
      $this->db->from('kerja_sama');
      $this->db->order_by('thn_berakhir', 'DESC');
      $query = $this->db->get();
      return $query->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_kerjasama" => $id])->row();
    }


    public function save()
    {
        $post = $this->input->post();
        $this->id_kerjasama = rand();
        $this->nm_perusahaan = $post["nm_perusahaan"];
        $this->thn_mulai = $post["thn_mulai"];
        $this->thn_berakhir = $post["thn_berakhir"];
        $this->keterangan = $post["keterangan"];
        
        $this->db->insert($this->_table, $this);
    }

 public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_kerjasama" => $id));
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_kerjasama = $post["id_kerjasama"];
        $this->nm_perusahaan = $post["nm_perusahaan"];
        $this->thn_mulai = $post["thn_mulai"];
        $this->thn_berakhir = $post["thn_berakhir"];
        $this->keterangan = $post["keterangan"];
        $this->db->update($this->_table, $this, array('id_kerjasama' => $post['id_kerjasama']));
    }
 

}
