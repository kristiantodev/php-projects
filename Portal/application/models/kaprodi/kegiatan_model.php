<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan_model extends CI_Model
{
     function __construct(){
      parent::__construct();
      $this->load->database();
    }
    private $_table = "kegiatan";
    public $id_kegiatan;
    public $id_user;
    public $judul_kegiatan;
    public $foto = "default.jpg";
    public $slug;
    public $tgl_post;
    public $status;
    public $author;
    public $isi;
   
    public function get_current_page($limit, $start) {
        $this->db->limit($limit, $start);
        $this->db->select('*');  
        $this->db->from('kegiatan'); 
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
      $this->db->from('kegiatan');
      $this->db->where('status', 'Ya');
      $this->db->limit(6);
      $this->db->order_by('tgl_post', 'DESC');
      $query = $this->db->get();
      return $query->result();
    }
	
	public function terbaru2()
    {
      $this->db->select('*');
      $this->db->from('kegiatan');
      $this->db->where('kegiatan.status', 'Ya');
      $this->db->limit(1);
      $this->db->order_by('kegiatan.tgl_post', 'DESC');
      $query = $this->db->get();
      return $query->result();
    }
     
    public function get_total() {
        return $this->db->count_all('kegiatan');
    }
  

    public function rules()
    {
        return [
            ['field' => 'judul_kegiatan',
            'label' => 'Judul_kegiatan',
            'rules' => 'required|trim'],

           ['field' => 'isi',
            'label' => 'Isi',
            'rules' => 'required|trim']

        ];
    }

    public function getAll()
    {
      $this->db->select('*');
      $this->db->from('kegiatan');
      $this->db->where('kegiatan.status', 'Ya');
      $query = $this->db->get();
      return $query->result();
    }

    public function get_by_user(){     
       $this->db->where('id_user', $this->session->userdata('id_user'));
       $query = $this->db->get('kegiatan');
       return $query->result();      
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_kegiatan" => $id])->row();
    }

    function get_post_by_slug($slug){ 
        $hsl=$this->db->query("SELECT * FROM kegiatan WHERE slug='$slug' AND status='Ya'");
        return $hsl;
    }

    public function get_detail($slug)
    {
        return $this->db->get_where($this->_table, ["slug" => $slug])->row();
    }


    public function save($id, $img)
    {
        $post = $this->input->post();
        $this->id_kegiatan = $id;
        $this->id_user = $this->session->userdata('id_user');
        $this->foto = $img;
        $this->judul_kegiatan = $post["judul_kegiatan"];
        $string=preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $post["judul_kegiatan"]); 
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

    $config['upload_path']          = './assets/images/kegiatan/';
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
        return $this->db->delete($this->_table, array("id_kegiatan" => $id));
    }

    public function update($img)
    {
        $post = $this->input->post();
        $this->id_kegiatan = $post["id_kegiatan"];
        $this->id_user = $this->session->userdata('id_user');
        $this->judul_kegiatan = $post["judul_kegiatan"];
        
        $this->foto = $img;

          
        $string=preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $post["judul_kegiatan"]); 
                $trim=trim($string); 
                $pre_slug=strtolower(str_replace(" ", "-", $trim)); 

        $this->slug=$pre_slug.'.html';
        $this->tgl_post = $post["tgl_post"];
        $this->status = $post["status"];
        $this->author = $this->session->userdata('nm_user');
        $this->isi = $post["isi"];

        $this->db->update($this->_table, $this, array('id_kegiatan' => $post['id_kegiatan']));
    }
 

 private function _deleteImage($id)
{
    $kegiatan = $this->getById($id);
    if ($kegiatan->foto != "default.jpg") {
        $filename = explode(".", $kegiatan->foto)[0];
        return array_map('unlink', glob(FCPATH."assets/images/kegiatan/$filename.*"));
    }
}

}
