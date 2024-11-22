<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Himatif_model extends CI_Model
{
    private $_table = "himatif";
    public $id_himatif;
    public $info_himatif;
    public $visi;
    public $misi;
    public $struktur_organisasi = "default.png";
    public $logo = "default.jpg";
    

   public function rules()
    {
        return [
            ['field' => 'visi',
            'label' => 'Visi',
            'rules' => 'required']

        ];
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_himatif" => $id])->row();
    }


private function _uploadImage()
   {

    $config['upload_path']          = './assets/images/himatif/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->id_himatif;
    $config['overwrite']            = true;
    $config['max_size']             = 1024; 

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('logo')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
}

private function _uploadImage2()
   {

    $config['upload_path']          = './assets/images/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = "Himatif";
    $config['overwrite']            = true;
    $config['max_size']             = 1024; 

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('struktur_organisasi')) {
        return $this->upload->data("file_name");
    }
    
    return "default.png";
}

public function update()
    {
        $post = $this->input->post();
        $this->id_himatif = $post["id_himatif"];

        if (!empty($_FILES["logo"]["name"])) {
        $this->logo = $this->_uploadImage();
        } else {
        $this->logo = $post["old_image"];
        }

        $this->info_himatif = $post["info_himatif"];
        $this->visi = $post["visi"];
        $this->misi = $post["misi"]; 
        
        if (!empty($_FILES["struktur_organisasi"]["name"])) {
        $this->struktur_organisasi = $this->_uploadImage2();
        } else {
        $this->struktur_organisasi = $post["old_image2"];
        }

        $this->db->update($this->_table, $this, array('id_himatif' => $post['id_himatif']));
    }

    
}
