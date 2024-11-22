<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tamu_model extends CI_Model
{
    private $_table = "buku_tamu";
    public $id_tamu;
    public $nama;
    public $email;
    public $subjek;
    public $pesan;
    public $id_user;
    public $tgl_tamu;
	
	private $_tabel = "agenda";
	public $id_agenda;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required|valid_email'],

            ['field' => 'pesan',
            'label' => 'Pesan',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
       $this->db->where('id_user', $this->session->userdata('id_user'));
       $query = $this->db->get('buku_tamu');
       return $query->result();
    }

    public function getAll2()
    {
       $this->db->where('id_user','Admin');
       $query = $this->db->get('buku_tamu');
       return $query->result();
    }

    public function savetamu($data){
            return $this->db->insert('buku_tamu',$data);
    }

    public function savetamu2($data){
            return $this->db->insert('buku_tamu',$data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_tamu" => $id));
    }

    public function get_tamu(){     
       $tgl = date('y-m-d');
       $this->db->where('id_user','Admin');
       $this->db->where('tgl_tamu',$tgl);
       $query = $this->db->get('buku_tamu');
       return $query->result();      
    }

    public function get_tamu2(){ 
       $tgl = date('y-m-d');    
       $this->db->where('id_user', $this->session->userdata('id_user'));
       $this->db->where('tgl_tamu',$tgl);
       $query = $this->db->get('buku_tamu');
       return $query->result();       
    }
    

    public function save()
    {
        $post = $this->input->post();
        $this->id_tamu = rand();
        $this->nama= $post["nama"];
        $this->email= $post["email"];
        $this->subjek= $post["subjek"];
        $this->pesan = $post["pesan"];
        $this->id_user = "Admin";
        $this->tgl_tamu = date('y-m-d');
        
        $this->db->insert($this->_table, $this);
    }

    public function save2()
    {
        $post = $this->input->post();
        $this->id_tamu = rand();
        $this->nama= $post["nama"];
        $this->email= $post["email"];
        $this->subjek= $post["subjek"];
        $this->pesan = $post["pesan"];
        $this->id_user = $post["id_user"];
        $this->tgl_tamu = date('y-m-d');
        
        $this->db->insert($this->_table, $this);
    }
   

}
