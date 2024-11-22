<?php defined('BASEPATH') OR exit('No direct script access allowed');

class materi_model extends CI_Model
{
    private $_table = "materi";
    private $_table2 = "matkul";
    public $id_materi;
    public $id_user;
    public $kode_mk;
    public $nm_materi;
    public $pertemuan_ke;
    public $link_materi;
    public $status;
    public $file = "default.jpg";
    

   public function rules()
    {
        return [
            
             ['field' => 'kode_mk',
            'label' => 'Kode_mk',
            'rules' => 'required'],

            ['field' => 'nm_materi',
            'label' => 'Nm_materi',
            'rules' => 'required']

        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getMatkul()
    {
        return $this->db->get($this->_table2)->result();
    }

    public function getMatkul2()
    {
        $this->db->select('matkul.semester, matkul.kode_mk, matkul.nama_mk, riwayat_mengajar.id_rm');    
        $this->db->from('matkul');
        $this->db->join('riwayat_mengajar', 'riwayat_mengajar.kode_mk = matkul.kode_mk');
        $this->db->where('riwayat_mengajar.id_user',$this->session->userdata('id_user'));

        return $this->db->get()->result();
    }


     public function get_by_user(){     
       $this->db->where('id_user', $this->session->userdata('id_user'));
       $query = $this->db->get('materi');
       return $query->result();      
    }
    
    public function get_materi($id)
  {
      $this->db->select('*');
      $this->db->join('materi', 'materi.kode_mk = matkul.kode_mk');
      $this->db->from('matkul');
      $this->db->where('materi.id_user', $id);
      $this->db->where('materi.status', 'Publish');
      $query = $this->db->get();
      return $query->result();
  }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_materi" => $id])->row();
    }


    public function save($img)
    {
        $post = $this->input->post();
        $this->id_materi = rand();
        $this->id_user = $this->session->userdata('id_user');
        $this->kode_mk = $post["kode_mk"];
        $this->nm_materi = $post["nm_materi"];
        $this->pertemuan_ke = $post["pertemuan_ke"];
        $this->status = $post["status"];
        $this->link_materi = $post["link_materi"];
        $this->file = $img;
        
        $this->db->insert($this->_table, $this);
    }
private function _uploadImage()
   {

    $config['upload_path']          = './assets/file/materi/';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf|doc|docx|ppt|pptx|xls|xlsx|rar|zip';
    $config['file_name']            = $this->id_materi;
    $config['overwrite']            = true;
    $config['max_size']             = 5120; 

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('file')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
}

 public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_materi" => $id));
    }

    public function update($img)
    {
        $post = $this->input->post();
        $this->id_materi = $post["id_materi"];
        $this->id_user = $post["id_user"];
        $this->kode_mk = $post["kode_mk"];
        $this->nm_materi = $post["nm_materi"];
        $this->pertemuan_ke = $post["pertemuan_ke"];
        $this->status = $post["status"];
        $this->link_materi = $post["link_materi"];
        $this->file = $img;

        $this->db->update($this->_table, $this, array('id_materi' => $post['id_materi']));
    }
 

 private function _deleteImage($id)
{
    $materi = $this->getById($id);
    if ($materi->file != "default.jpg") {
        $filename = explode(".", $materi->file)[0];
        return array_map('unlink', glob(FCPATH."assets/file/materi/$filename.*"));
    }
}

}
