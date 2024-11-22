<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_model extends CI_Model
{
    private $_table = "tentang_kami";
    public $id_profil;
    public $sambutan_kaprodi;
    public $visi;
    public $misi;
    public $tujuan;
    public $tentang;
    public $url_gmap;
    public $alamat;
    public $icon = "default.png";
    

    public function rules()
    {
        return [
            ['field' => 'visi',
            'label' => 'Visi',
            'rules' => 'required'],

            ['field' => 'misi',
            'label' => 'Misi',
            'rules' => 'required']

        ];
    }

    

    public function getAll($id)
    {
        return $this->db->get_where($this->_table, ["id_profil" => $id])->row();
    }
    
   public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_profil" => $id])->row();
    }

    public function get_profil($id)
    {
        return $this->db->get_where($this->_table, ["id_profil" => $id])->row();
    }

   
private function _uploadImage()
   {

    $config['upload_path']          = './assets/images/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->id_profil;
    $config['overwrite']            = true;
    $config['max_size']             = 1024; 

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('icon')) {
        return $this->upload->data("file_name");
    }
    
    return "default.png";
}

 public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_profil" => $id));
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_profil = $post["id_profil"];
        $this->icon = $post["old_image"];
        $this->sambutan_kaprodi = $post["sambutan_kaprodi"];
        $this->visi = $post["visi"];
        $this->misi= $post["misi"];
        $this->tujuan = $post["tujuan"];
        $this->tentang = $post["tentang"];
        $this->url_gmap = $post["url_gmap"];
        $this->alamat = $post["alamat"];

       
        $this->db->update($this->_table, $this, array('id_profil' => $post['id_profil']));
    }
 

 private function _deleteImage($id)
{
    $profil = $this->getById($id);
    if ($album->icon != "default.jpg") {
        $filename = explode(".", $profil->icon)[0];
        return array_map('unlink', glob(FCPATH."assets/images/$filename.*"));
    }
}

}
