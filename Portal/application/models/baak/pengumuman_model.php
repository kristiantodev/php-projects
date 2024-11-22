<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman_model extends CI_Model
{
     function __construct(){
      parent::__construct();
      $this->load->database();
    }
    private $_table = "pengumuman";
    public $id_pengumuman;
    public $id_user;
    public $jdl_pengumuman;
    public $foto = "default.jpg";
	public $slug;
    public $tgl_post;
    public $status;
    public $author;
    public $isi;
   
    public function get_current_page($limit, $start) {
        $this->db->limit($limit, $start);
        $this->db->select('*');  
        $this->db->from('pengumuman'); 
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
      $this->db->from('pengumuman');
      $this->db->where('status', 'Ya');
      $this->db->limit(1);
      $this->db->order_by('tgl_post', 'DESC');
      $query = $this->db->get();
      return $query->result();
    }
	
	public function terbaru2()
    {
      $this->db->select('*');
      $this->db->from('pengumuman');
      $this->db->where('status', 'Ya');
      $this->db->order_by('tgl_post', 'DESC');
      $query = $this->db->get();
      return $query->result();
    }
	
	
     
    public function get_total() {
        return $this->db->count_all('pengumuman');
    }
  

    public function rules()
    {
        return [
            ['field' => 'jdl_pengumuman',
            'label' => 'Jdl_pengumuman',
            'rules' => 'required|trim'],

           ['field' => 'isi',
            'label' => 'Isi',
            'rules' => 'required|trim']

        ];
    }

    public function getAll()
    {
      $this->db->select('*');
      $this->db->from('pengumuman');
      $this->db->where('pengumuman.status', 'Ya');
      $query = $this->db->get();
      return $query->result();
    }

    public function get_by_user(){     
       $this->db->where('id_user', $this->session->userdata('id_user'));
       $query = $this->db->get('pengumuman');
       return $query->result();      
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_pengumuman" => $id])->row();
    }
	
	function get_post_by_slug($slug){ 
        $hsl=$this->db->query("SELECT * FROM pengumuman WHERE slug='$slug' AND status='Ya'");
        return $hsl;
    }


    public function save($id, $img)
    {
        $post = $this->input->post();
        $this->id_pengumuman = $id;
        $this->id_user = $this->session->userdata('id_user');
        $this->foto = $img;
        $this->jdl_pengumuman = $post["jdl_pengumuman"];
		$string=preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $post["jdl_pengumuman"]); 
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

    $config['upload_path']          = './assets/images/pengumuman/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->id_pengumuman;
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
        return $this->db->delete($this->_table, array("id_pengumuman" => $id));
    }

    public function update($img)
    {
        $post = $this->input->post();
        $this->id_pengumuman = $post["id_pengumuman"];
        $this->id_user = $this->session->userdata('id_user');
        $this->jdl_pengumuman = $post["jdl_pengumuman"];
        
        $this->foto = $img;
		$string=preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $post["jdl_pengumuman"]); 
                $trim=trim($string); 
                $pre_slug=strtolower(str_replace(" ", "-", $trim)); 

        $this->slug=$pre_slug.'.html';
        $this->tgl_post = $post["tgl_post"];
        $this->status = $post["status"];
        $this->author = $this->session->userdata('nm_user');
        $this->isi = $post["isi"];

        $this->db->update($this->_table, $this, array('id_pengumuman' => $post['id_pengumuman']));
    }
 

 private function _deleteImage($id)
{
    $pengumuman = $this->getById($id);
    if ($pengumuman->foto != "default.jpg") {
        $filename = explode(".", $pengumuman->foto)[0];
        return array_map('unlink', glob(FCPATH."assets/images/pengumuman/$filename.*"));
    }
}

}
