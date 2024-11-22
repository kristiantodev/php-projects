<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi_model extends CI_Model
{
    private $_table = "mhs_berprestasi";
    
    public $id_prestasi;
    public $nm_mhs;
    public $jenis_prestasi;
    public $foto = "default.jpg";
     public $detail_prestasi;
    

    public function rules()
    {
        return [
            
             ['field' => 'nm_mhs',
            'label' => 'Nama Mahasiswa',
            'rules' => 'required'],
            ['field' => 'detail_prestasi',
            'label' => 'Detail Prestasi',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    

    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_gallery" => $id])->row();
    }


    public function save($id, $img)
    {
        $post = $this->input->post();
        $this->id_prestasi = $id;
        $this->nm_mhs = $post["nm_mhs"];
         $this->jenis_prestasi = $post["jenis_prestasi"];
        $this->foto = $img;
        $this->detail_prestasi = $post["detail_prestasi"];
        
        $this->db->insert($this->_table, $this);
    }


 public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_gallery" => $id));
    }

    public function update($img)
    {
        $post = $this->input->post();
        $this->id_gallery = $post["id_gallery"];
        $this->id_user = "Admin";

        $this->foto = $img;

        $this->ket = $post["ket"];
        $this->db->update($this->_table, $this, array('id_gallery' => $post['id_gallery']));
    }
 

 private function _deleteImage($id)
{
    $gallery = $this->getById($id);
    if ($gallery->foto != "default.jpg") {
        $filename = explode(".", $gallery->foto)[0];
        return array_map('unlink', glob(FCPATH."assets/images/gallery/$filename.*"));
    }
}

}
