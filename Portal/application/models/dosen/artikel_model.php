<?php defined('BASEPATH') OR exit('No direct script access allowed');

class artikel_model extends CI_Model
{
     
    private $_table = "artikel";
    private $_table2 = "kategori";
    public $id_artikel;
    public $id_user;
    public $judul_artikel;
    public $foto = "default.jpg";
    public $id_kategori;
    public $slug;
    public $tgl_post;
    public $status;
    public $author;
    public $isi;
   
  

    public function rules()
    {
        return [
            ['field' => 'judul_artikel',
            'label' => 'Judul_artikel',
            'rules' => 'required|trim'],

           ['field' => 'isi',
            'label' => 'Isi',
            'rules' => 'required|trim']

        ];
    }

    
    public function getKategori()
    {
        return $this->db->get($this->_table2)->result();
    }

    public function get_by_user(){     
       $this->db->where('id_user', $this->session->userdata('id_user'));
       $query = $this->db->get('artikel');
       return $query->result();      
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_artikel" => $id])->row();
    }

    function get_post_by_slug($slug){ 
        $hsl=$this->db->query("SELECT * FROM artikel WHERE slug='$slug' AND status='Ya'");
        return $hsl;
    }


    public function save($id, $img)
    {
        $post = $this->input->post();
        $this->id_artikel = $id;
        $this->id_user = $this->session->userdata('id_user');
        $this->foto = $img;
        $this->id_kategori = $post["id_kategori"];
        $this->judul_artikel = $post["judul_artikel"];
        $string=preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $post["judul_artikel"]); 
                $trim=trim($string); 
                $pre_slug=strtolower(str_replace(" ", "-", $trim)); 
        $this->slug=$pre_slug.'.html';
        $this->status = $post["status"];
        $this->author = $this->session->userdata('nm_user');
        $this->isi = $post["isi"];
       
        
        $this->db->insert($this->_table, $this);
    }
private function _uploadImage()
   {

    $config['upload_path']          = './assets/images/artikel/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->id_artikel;
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
        return $this->db->delete($this->_table, array("id_artikel" => $id));
    }

    public function update($img)
    {
        $post = $this->input->post();
        $this->id_artikel = $post["id_artikel"];
        $this->id_user = $this->session->userdata('id_user');
        $this->judul_artikel = $post["judul_artikel"];
        
        $this->foto = $img;
        
        $this->id_kategori = $post["id_kategori"];
          
        $string=preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $post["judul_artikel"]); 
                $trim=trim($string); 
                $pre_slug=strtolower(str_replace(" ", "-", $trim)); 
        $this->slug=$pre_slug.'.html';
        $this->tgl_post = $post["tgl_post"];
        $this->status = $post["status"];
        $this->author = $this->session->userdata('nm_user');
        $this->isi = $post["isi"];

        $this->db->update($this->_table, $this, array('id_artikel' => $post['id_artikel']));
    }
 

 private function _deleteImage($id)
{
    $artikel = $this->getById($id);
    if ($artikel->foto != "default.jpg") {
        $filename = explode(".", $artikel->foto)[0];
        return array_map('unlink', glob(FCPATH."assets/images/artikel/$filename.*"));
    }
}

}
