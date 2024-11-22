<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table = "users";
    public $id_user;
    public $username;
    public $password;
    public $level;
    public $nm_user;
    public $status;
    public $avatar = "default.jpg";
    

    public function rules()
    {
        return [
            
            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required|is_unique[users.username]'],

            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required|min_length[10]|max_length[20]'],

            ['field' => 'nm_user',
            'label' => 'Nm_user',
            'rules' => 'required']

        ];
    }

    public function ruless()
    {
        return [

            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required'],

            ['field' => 'nm_user',
            'label' => 'Nm_user',
            'rules' => 'required']

        ];
    }

    

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_user" => $id])->row();
    }


    public function save()
    {
        
        $post = $this->input->post();
        $level = $post["level"];
        if ($level == "Dosen") {
            $this->load->model("dosen/profildosen_model", "My_profildos");
            $post = $this->input->post();
            $string=preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $post["nm_user"]); 
                $trim=trim($string); 
                $pre_slug=strtolower(str_replace(" ", "-", $trim)); 
            $this->id_user=$pre_slug;
            $idku = $pre_slug;
            $this->username = $post["username"];
            $this->password = password_hash ($post["password"], PASSWORD_DEFAULT);
            $this->level = $post["level"];
            $this->nm_user = $post["nm_user"];
            $this->status = $post["status"];
            $this->avatar =    $this->_uploadImage();
            $nm_lengkap=$this->input->post('nm_user');
            $this->My_profildos->savebio($idku, $nm_lengkap);  
            $this->db->insert($this->_table, $this);
            }else{
            $post = $this->input->post();
        $idku = uniqid();
        $this->id_user = $idku;
        $this->username = $post["username"];
        $this->password = password_hash ($post["password"], PASSWORD_DEFAULT);
        $this->level = $post["level"];
        $this->nm_user = $post["nm_user"];
        $this->status = $post["status"];
        $this->avatar =    $this->_uploadImage();  
        $this->db->insert($this->_table, $this); 
            }
    }
private function _uploadImage()
   {

    $config['upload_path']          = './assets/images/user/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->id_user;
    $config['overwrite']            = true;
    $config['max_size']             = 1024; 

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('avatar')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
}

 public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_user" => $id));
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_user = $post["id_user"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->level = $post["level"];
        $this->nm_user = $post["nm_user"];
        $this->status = $post["status"];

       if (!empty($_FILES["avatar"]["name"])) {
        $this->avatar = $this->_uploadImage();
        } else {
        $this->avatar = $post["old_image"];
        }
       
        $this->db->update($this->_table, $this, array('id_user' => $post['id_user']));
    }
 

 private function _deleteImage($id)
{
    $user = $this->getById($id);
    if ($user->avatar != "default.jpg") {
        $filename = explode(".", $user->avatar)[0];
        return array_map('unlink', glob(FCPATH."assets/images/user/$filename.*"));
    }
}

}
