<?php defined('BASEPATH') OR exit('No direct script access allowed');

class gallery_model extends CI_Model
{
    private $_table = "gallery";
    public $id_gallery;
    public $id_user;
    public $ket;
    public $foto = "default.jpg";
    

    public function rules()
    {
        return [
            
             ['field' => 'ket',
            'label' => 'Ket',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

     public function get_by_user(){     
       $this->db->where('id_user', $this->session->userdata('id_user'));
       $query = $this->db->get('gallery');
       return $query->result();      
    }

    public function get_gallery($id)
    {
      $this->db->select('*');
      $this->db->from('gallery');
      $this->db->where('id_user', $id);
      $this->db->order_by('tgl_input', 'DESC');
      $query = $this->db->get();
      return $query->result();
    }
 
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_gallery" => $id])->row();
    }


    public function save($id, $img)
    {
        $post = $this->input->post();
        $this->id_gallery = $id;
        $this->id_user = $this->session->userdata('id_user');
        $this->foto = $img;
        $this->ket = $post["ket"];
        
        $this->db->insert($this->_table, $this);
    }
private function _uploadImage()
   {

    $config['upload_path']          = './assets/images/gallery/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->id_gallery;
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
        return $this->db->delete($this->_table, array("id_gallery" => $id));
    }

    public function update($img)
    {
        $post = $this->input->post();
        $this->id_gallery = $post["id_gallery"];
        $this->id_user = $this->session->userdata('id_user');

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
