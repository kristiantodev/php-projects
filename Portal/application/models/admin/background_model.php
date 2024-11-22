<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Background_model extends CI_Model
{
    private $_table = "background";
    public $id_background;
    public $foto = "default.png";
    

    public function rules()
    {
        return [
            ['field' => 'id_background',
            'label' => 'Id_background',
            'rules' => 'required']
        ];
    }

    
    public function getById()
    {
        return $this->db->get_where($this->_table, ["id_background" => "bg"])->row();
    }


private function _uploadImage()
   {

    $config['upload_path']          = './assets/images/bg/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->id_background;
    $config['overwrite']            = true;
    $config['max_size']             = 1024; 

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('foto')) {
        return $this->upload->data("file_name");
    }
    
    return "default.png";
}


    public function update()
    {
        $post = $this->input->post();
        $this->id_background= $post["id_background"];
        

       if (!empty($_FILES["foto"]["name"])) {
        $this->foto = $this->_uploadImage();
        } else {
        $this->foto = $post["old_image"];
        }
 
        $this->db->update($this->_table, $this, array('id_background' => $post['id_background']));
    }
 

 

}
