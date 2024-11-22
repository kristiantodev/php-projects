<?php defined('BASEPATH') OR exit('No direct script access allowed');

class penunjang_model extends CI_Model
{
    private $_table = "kegiatan_penunjang";
    public $id_penunjang;
    public $id_user;
    public $nm_acara;
    public $status_kepanitiaan;
    public $privasi;
    public $tahun;
    public $url_sertifikat;
    public $sertifikat = "default.jpg";
    

   public function rules()
    {
        return [
            
             ['field' => 'nm_acara',
            'label' => 'nm_acara',
            'rules' => 'required']

        ];
    }

   public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function get_by_user(){     
       $this->db->where('id_user', $this->session->userdata('id_user'));
       $query = $this->db->get('kegiatan_penunjang');
       return $query->result();      
    }

    public function get_penunjang($id){     
       $this->db->where('id_user', $id);
       $query = $this->db->get('kegiatan_penunjang');
       return $query->result();      
    }


    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_penunjang" => $id])->row();
    }


    public function save($id, $img)
    {
        $post = $this->input->post();
        $this->id_penunjang = $id;
        $this->id_user = $this->session->userdata('id_user');
        $this->nm_acara = $post["nm_acara"];
        $this->status_kepanitiaan = $post["status_kepanitiaan"];
        $this->sertifikat = $img;
        $this->url_sertifikat = $post["url_sertifikat"];
        $this->privasi = $post["privasi"];
        $this->tahun = $post["tahun"];
        
        
        $this->db->insert($this->_table, $this);
    }
private function _uploadImage()
   {

    $config['upload_path']          = './assets/images/sertifikat/';
    $config['allowed_types']        = 'gif|jpg|png|jpeg';
    $config['file_name']            = $this->id_penunjang;
    $config['overwrite']            = true;
    $config['max_size']             = 2420; 

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('sertifikat')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
}

 public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_penunjang" => $id));
    }

    public function update($img)
    {
        $post = $this->input->post();
        $this->id_penunjang = $post["id_penunjang"];
        $this->id_user = $post["id_user"];
        $this->nm_acara = $post["nm_acara"];
        $this->status_kepanitiaan = $post["status_kepanitiaan"];

        $this->sertifikat = $img;
        
        $this->url_sertifikat = $post["url_sertifikat"];
        $this->privasi = $post["privasi"];
        $this->tahun = $post["tahun"];

        $this->db->update($this->_table, $this, array('id_penunjang' => $post['id_penunjang']));
    }
 

 private function _deleteImage($id)
{
    $penunjang = $this->getById($id);
    if ($penunjang->sertifikat != "default.jpg") {
        $filename = explode(".", $penunjang->sertifikat)[0];
        return array_map('unlink', glob(FCPATH."assets/images/sertifikat/$filename.*"));
    }
}

}
