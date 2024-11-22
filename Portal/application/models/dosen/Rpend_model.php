<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Rpend_model extends CI_Model
{
    private $_table = "riwayat_pendidikan";

    public $id_rp;
    public $id_user;
    public $perguruan_tinggi;
    public $gelar_akademik;
    public $tahun_ijazah;
    public $jenjang;

    public function rules()
    {
        return [

            ['field' => 'perguruan_tinggi',
            'label' => 'Perguruan_tinggi',
            'rules' => 'required']

        ];
    }

    
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function get_by_user(){     
       $this->db->where('id_user', $this->session->userdata('id_user'));
       $query = $this->db->get('riwayat_pendidikan');
       return $query->result();      
    }

    public function get_RP($id){     
       $this->db->where('id_user', $id);
       $query = $this->db->get('riwayat_pendidikan');
       return $query->result();      
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_rp" => $id])->row();
    }


    public function save()
    {
        $post = $this->input->post();
        $this->id_rp = rand();
        $this->id_user = $this->session->userdata('id_user');
        $this->perguruan_tinggi = $post["perguruan_tinggi"];
        $this->gelar_akademik = $post["gelar_akademik"];
        $this->tahun_ijazah = $post["tahun_ijazah"];
        $this->jenjang = $post["jenjang"];
        
        $this->db->insert($this->_table, $this);
    }


 public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_rp" => $id));
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_rp = $post["id_rp"];
        $this->id_user = $post['id_user'];
        $this->perguruan_tinggi = $post["perguruan_tinggi"];
        $this->gelar_akademik = $post["gelar_akademik"];
        $this->tahun_ijazah = $post["tahun_ijazah"];
        $this->jenjang = $post["jenjang"];
        

        $this->db->update($this->_table, $this, array('id_rp' => $post['id_rp']));
    }

 
}
