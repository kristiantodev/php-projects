<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Download_model extends CI_Model
{
    private $_table = "download";
    public $id_download;
    public $nm_download;
    public $file = "default.jpg";
    

   public function rules()
    {
        return [
            
            ['field' => 'nm_download',
            'label' => 'Nm_download',
            'rules' => 'required']

        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_download" => $id])->row();
    }


    public function save($img)
    {
        $post = $this->input->post();
        $this->id_download = rand();
        $this->nm_download = $post["nm_download"];
        $this->file = $img;
        
        $this->db->insert($this->_table, $this);
    }
private function _uploadImage()
   {

    $config['upload_path']          = './assets/file/download/';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf|doc|docx|ppt|pptx|xls|xlsx|rar|zip';
    $config['file_name']            = $this->id_download;
    $config['overwrite']            = true;
    $config['max_size']             = 5120; 

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('file')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
}

 public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_download" => $id));
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_download = $post["id_download"];
        $this->nm_download = $post["nm_download"];
    
       if (!empty($_FILES["file"]["name"])) {
        $this->file = $this->_uploadImage();
        } else {
        $this->file = $post["old_image"];
        }

        $this->db->update($this->_table, $this, array('id_download' => $post['id_download']));
    }
 

 private function _deleteImage($id)
{
    $download = $this->getById($id);
    if ($download->file != "default.jpg") {
        $filename = explode(".", $download->file)[0];
        return array_map('unlink', glob(FCPATH."assets/file/download/$filename.*"));
    }
}

}
