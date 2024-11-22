<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Slider_model extends CI_Model
{
    private $_table = "slider";
    public $keterangan;
    public $status;
    public $foto = "default.jpg";
    
 public function rules()
    {
        return [
            ['field' => 'keterangan',
            'label' => 'Keterangan',
            'rules' => 'required']
        ];
    }
    public function getAll()
    {
        $this->db->select('*');  
        $this->db->from('slider'); 
        $this->db->order_by('status', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_slider" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_slider = rand();
        $this->foto = $this->_uploadImage();
        $this->status = $post["status"];
        $this->keterangan = $post["keterangan"];
        
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_slider = $post["id_slider"];

        if (!empty($_FILES["foto"]["name"])) {
        $this->foto = $this->_uploadImage();
        } else {
        $this->foto = $post["old_image"];
        }
        
        $this->status = $post["status"];
        $this->keterangan = $post["keterangan"];

        $this->db->update($this->_table, $this, array('id_slider' => $post['id_slider']));
    }
 

private function _uploadImage()
   {

    $config['upload_path']          = './assets/images/slider/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->id_slider;
    $config['overwrite']            = true;
    $config['max_size']             = 1024; 

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('foto')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
}

 public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_slider" => $id));
    }

    

 private function _deleteImage($id)
{
    $slider = $this->getById($id);
    if ($slider->foto != "default.jpg") {
        $filename = explode(".", $slider->foto)[0];
        return array_map('unlink', glob(FCPATH."assets/images/slider/$filename.*"));
    }
}

}
