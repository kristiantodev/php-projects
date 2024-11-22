<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
{
    private $_table = "mahasiswa";
    public $nim;
    public $nm_mhs;
    public $jk;
    public $angkatan;
    public $alamat;
    public $status;
    public $password;
    public $foto = "default.jpg";
    

    public function rules()
    {
        return [
            
            ['field' => 'nim',
            'label' => 'Nim',
            'rules' => 'required|is_unique[mahasiswa.nim]'],

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
            'rules' => 'required'],

            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required|min_length[7]|max_length[10]']

        ];
    }

   

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["nim" => $id])->row();
    }


    public function save($img)
    {
        $post = $this->input->post();
        $this->nim = $post["nim"];
        $this->nm_mhs = $post["nm_mhs"];
        $this->jk = $post["jk"];
        $this->angkatan = $post["angkatan"];
        $this->alamat = $post["alamat"];
        $this->status = $post["status"];
        $this->password = $post["password"];        
        $this->foto = $img;
        
        $this->db->insert($this->_table, $this);
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

    public function update($img)
    {
        $post = $this->input->post();
        $this->nim = $post["nim"];
        $this->nm_mhs = $post["nm_mhs"];
        $this->jk = $post["jk"];
        $this->angkatan = $post["angkatan"];
        $this->alamat = $post["alamat"];
        $this->status = $post["status"];
        $this->password = $post["password"];  

       
        $this->foto = $img;
      
        $this->db->update($this->_table, $this, array('nim' => $post['nim']));
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
