<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Link_model extends CI_Model
{
    private $_table = "link";
    public $id_link;
    public $nama_link;
    public $jenis_link;
    public $url;
    public $tanggal;

    public function rules()
    {
        return [

            ['field' => 'nama_link',
            'label' => 'Nama_link',
            'rules' => 'required'],

            ['field' => 'url',
            'label' => 'Url',
            'rules' => 'required|is_unique[link.id_link]']

        ];
    }

    public function ruless()
    {
        return [

            ['field' => 'nama_link',
            'label' => 'Nama_link',
            'rules' => 'required'],

            ['field' => 'url',
            'label' => 'Url',
            'rules' => 'required']

        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function get_cic(){     
       $this->db->where('jenis_link','Internal');
       $query = $this->db->get('link');
       return $query->result();      
    }

    public function get_terkait(){  
       $this->db->where('jenis_link','Eksternal');
       $query = $this->db->get('link');
       return $query->result();      
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_link" => $id])->row();
    }


    public function save()
    {
        $post = $this->input->post();
        $this->id_link = rand();
        $this->nama_link = $post["nama_link"];
        $this->jenis_link = $post["jenis_link"];
        $this->url = $post["url"];
        
        $this->db->insert($this->_table, $this);
    }

 public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_link" => $id));
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_link = $post["id_link"];
        $this->nama_link = $post["nama_link"];
        $this->jenis_link = $post["jenis_link"];
        $this->url = $post["url"];
        $this->tanggal = $post["tanggal"];

        $this->db->update($this->_table, $this, array('id_link' => $post['id_link']));
    }
 

 
}
