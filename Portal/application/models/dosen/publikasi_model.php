<?php defined('BASEPATH') OR exit('No direct script access allowed');

class publikasi_model extends CI_Model
{
    private $_table = "publikasi";
    public $id_publikasi;
    public $id_user;
    public $judul_publikasi;
    public $jenis_publikasi;
    public $status;
    public $file = "default.jpg";
    

   public function rules()
    {
        return [
            
             ['field' => 'judul_publikasi',
            'label' => 'Judul_publikasi',
            'rules' => 'required']

        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

     public function get_by_user(){     
       $this->db->where('id_user', $this->session->userdata('id_user'));
       $query = $this->db->get('publikasi');
       return $query->result();      
    }
    
    public function get_publikasi($id)
  {
      $this->db->where('id_user', $id);
      $this->db->where('jenis_publikasi', 'Jurnal');
      $this->db->where('status', 'Publish');
      $query = $this->db->get('publikasi');
       return $query->result();  
  }

  public function get_publikasi2($id)
  {
      $this->db->where('id_user', $id);
      $this->db->where('jenis_publikasi', 'Prosiding');
      $this->db->where('status', 'Publish');
      $query = $this->db->get('publikasi');
       return $query->result();  
  }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_publikasi" => $id])->row();
    }


    public function save()
    {
        $post = $this->input->post();
        $this->id_publikasi = rand();
        $this->id_user = $this->session->userdata('id_user');
        $this->judul_publikasi = $post["judul_publikasi"];
        $this->jenis_publikasi = $post["jenis_publikasi"];
        $this->status = $post["status"];
        $this->file = $this->_uploadImage();
        
        $this->db->insert($this->_table, $this);
    }
private function _uploadImage()
   {

    $config['upload_path']          = './assets/file/publikasi/';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf|doc|docx|ppt|pptx|xls|xlsx|rar|zip';
    $config['file_name']            = $this->id_publikasi;
    $config['overwrite']            = true;
    $config['max_size']             = 2048; 

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('file')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
}

 public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_publikasi" => $id));
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_publikasi = $post["id_publikasi"];
        $this->id_user = $post["id_user"];
        $this->judul_publikasi = $post["judul_publikasi"];
        $this->jenis_publikasi = $post["jenis_publikasi"];
        $this->status = $post["status"];

       if (!empty($_FILES["file"]["name"])) {
        $this->file = $this->_uploadImage();
        } else {
        $this->file = $post["old_image"];
        }

        $this->db->update($this->_table, $this, array('id_publikasi' => $post['id_publikasi']));
    }
 

 private function _deleteImage($id)
{
    $publikasi = $this->getById($id);
    if ($publikasi->file != "default.jpg") {
        $filename = explode(".", $publikasi->file)[0];
        return array_map('unlink', glob(FCPATH."assets/file/publikasi/$filename.*"));
    }
}

}
