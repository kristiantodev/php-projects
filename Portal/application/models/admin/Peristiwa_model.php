<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Peristiwa_model extends CI_Model
{
     function __construct(){
      parent::__construct();
      $this->load->database();
    }
    private $_table = "peristiwa";
    public $id_peristiwa;
    public $id_user;
    public $jdl_peristiwa;
    public $foto = "default.jpg";
    public $tgl_post;
    public $status;
    public $author;
    public $isi;
   
    public function get_current_page($limit, $start) {
        $this->db->limit($limit, $start);
        $this->db->select('*');  
        $this->db->from('peristiwa'); 
        $this->db->where('status', 'Ya');
        $this->db->order_by('tgl_post', 'DESC');
        $query = $this->db->get();
        
        $rows = $query->result();
 
        if ($query->num_rows() > 0) {
            foreach ($rows as $row) {
                $data[] = $row;
            }
             
            return $data;
        }
 
        return false;
     }

    public function terbaru()
    {
      $this->db->select('*');
      $this->db->from('peristiwa');
      $this->db->where('status', 'Ya');
      $this->db->limit(1);
      $this->db->order_by('tgl_post', 'DESC');
      $query = $this->db->get();
      return $query->result();
    }
	
	
     
    public function get_total() {
        return $this->db->count_all('peristiwa');
    }
  

    public function rules()
    {
        return [
            ['field' => 'jdl_peristiwa',
            'label' => 'Jdl_peristiwa',
            'rules' => 'required|trim'],

           ['field' => 'isi',
            'label' => 'Isi',
            'rules' => 'required|trim']

        ];
    }

    public function getAll()
    {
      $this->db->select('*');
      $this->db->from('peristiwa');
      $this->db->where('peristiwa.status', 'Ya');
      $query = $this->db->get();
      return $query->result();
    }

    public function get_by_user(){     
       $this->db->where('id_user', 'Admin');
       $query = $this->db->get('peristiwa');
       return $query->result();      
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_peristiwa" => $id])->row();
    }


    public function save($id, $img)
    {
        $post = $this->input->post();
        $this->id_peristiwa = $id;
        $this->id_user = "Admin";
        $this->foto = $img;
        $this->jdl_peristiwa = $post["jdl_peristiwa"];
        $this->status = $post["status"];
        $this->author = "Admin";
        $this->isi = $post["isi"];
       
        
        $this->db->insert($this->_table, $this);
    }
private function _uploadImage()
   {

    $config['upload_path']          = './assets/images/peristiwa/';
    $config['allowed_types']        = 'gif|jpg|png|jpeg';
    $config['file_name']            = $this->id_peristiwa;
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
        return $this->db->delete($this->_table, array("id_peristiwa" => $id));
    }

    public function update($img)
    {
        $post = $this->input->post();
        $this->id_peristiwa = $post["id_peristiwa"];
        $this->id_user = "Admin";
        $this->jdl_peristiwa = $post["jdl_peristiwa"];
        
        $this->foto = $img;

        $this->tgl_post = $post["tgl_post"];
        $this->status = $post["status"];
        $this->author = "Admin";
        $this->isi = $post["isi"];

        $this->db->update($this->_table, $this, array('id_peristiwa' => $post['id_peristiwa']));
    }
 

 private function _deleteImage($id)
{
    $peristiwa = $this->getById($id);
    if ($peristiwa->foto != "default.jpg") {
        $filename = explode(".", $peristiwa->foto)[0];
        return array_map('unlink', glob(FCPATH."assets/images/peristiwa/$filename.*"));
    }
}

}
