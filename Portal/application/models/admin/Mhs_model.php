<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mhs_model extends CI_Model
{
    private $_table = "mhs";
    public $nim;
    public $nama;
    public $angkatan;
    public $status;
    public $password;
    public $foto = "default.jpg";
    

    public function rules()
    {
        return [
            
            ['field' => 'nim',
            'label' => 'Nim',
            'rules' => 'required|is_unique[mhs.nim]|min_length[10]|max_length[10]'],

            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required|min_length[10]|max_length[20]']

        ];
    }

    public function ruless()
    {
        return [
            
            ['field' => 'nim',
            'label' => 'Nim',
            'rules' => 'required']

        ];
    }

 public function login($user, $pass)
    {
     $this->db->select('nim, nama, password, status');  
     $this->db->from('mhs'); 
     $this->db->where('nim', $user);
     $this->db->where('password', $pass);
     $this->db->limit(1);

     $query = $this->db->get();

     if($query->num_rows()==1){
        return $query->result();
     }else{
        return false;
     }
    }    

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["nim" => $id])->row();
    }


    public function save()
    {
        $post = $this->input->post();
        $this->nim = $post["nim"];
        $this->nama = $post["nama"];
        $this->password = $post["password"]; 
        $this->angkatan = $post["angkatan"];
        $this->status = "Mahasiswa";         
        $this->foto = "default.jpg";
        
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();

        $this->nim = $post["nim"];
        $this->nama = $post["nama"];
        $this->password = $post["password"]; 
        $this->angkatan = $post["angkatan"];

       if (!empty($_FILES["foto"]["name"])) {
        $this->foto = $this->_uploadImage();
        } else {
        $this->foto = $post["old_image"];
        }

        $this->status = "Mahasiswa";
        
        $this->db->update($this->_table, $this, array('nim' => $post['nim']));
    }

private function _uploadImage()
   {

    $config['upload_path']          = './assets/images/mahasiswa/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->nim;
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
        return $this->db->delete($this->_table, array("nim" => $id));
    }
 

 private function _deleteImage($id)
{
    $mahasiswa = $this->getById($id);
    if ($mahasiswa->foto != "default.jpg") {
        $filename = explode(".", $mahasiswa->foto)[0];
        return array_map('unlink', glob(FCPATH."assets/images/mahasiswa/$filename.*"));
    }
}

}
