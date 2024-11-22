<?php defined('BASEPATH') OR exit('No direct script access allowed');

class mengajar_model extends CI_Model
{
    private $_table = "riwayat_mengajar";
    private $_table2 = "matkul";

    public $id_rm;
    public $id_user;
    public $kode_mk;

    public function rules()
    {
        return [

            ['field' => 'kode_mk',
            'label' => 'kode_mk',
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
    
    public function get_by_user(){     
       
        $this->db->select('matkul.semester, matkul.kode_mk, matkul.nama_mk, riwayat_mengajar.id_rm');    
        $this->db->from('matkul');
        $this->db->join('riwayat_mengajar', 'riwayat_mengajar.kode_mk = matkul.kode_mk');
        $this->db->where('riwayat_mengajar.id_user',$this->session->userdata('id_user'));

        return $this->db->get()->result();     
    }
   
    public function get_RP($id){     
       $this->db->where('id_user', $id);
       $query = $this->db->get('riwayat_mengajar');
       return $query->result();      
    }

    public function saveajar($data){
            return $this->db->insert('riwayat_mengajar',$data);
    }

    public function get_ajar($id)
    {
        $this->db->select('matkul.semester, matkul.kode_mk, matkul.nama_mk');    
        $this->db->from('matkul');
        $this->db->join('riwayat_mengajar', 'riwayat_mengajar.kode_mk = matkul.kode_mk');
       
        $this->db->where('riwayat_mengajar.id_user',$id);
        $this->db->order_by('matkul.semester', 'ASC');

        return $this->db->get()->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_rm" => $id])->row();
    }


    public function save()
    {
        $post = $this->input->post();
        $this->id_rm = rand();
        $this->id_user = $this->session->userdata('id_user');
        $this->kode_mk = $post["kode_mk"];
        
        $this->db->insert($this->_table, $this);
    }


 public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_rm" => $id));
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_rm = $post["id_rm"];
        $this->id_user = $post['id_user'];
        $this->kode_mk = $post["kode_mk"];
        
        $this->db->update($this->_table, $this, array('id_rm' => $post['id_rm']));
    }

 
}
