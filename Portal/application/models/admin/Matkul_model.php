<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Matkul_model extends CI_Model
{
    private $_table = "matkul";
    public $kode_mk;
    public $nama_mk;
    public $sks;
    public $semester;
    public $jenis_mk;
    public $konsentrasi;

    public function rules()
    {
        return [
            ['field' => 'kode_mk',
            'label' => 'Kode_mk',
            'rules' => 'required|is_unique[matkul.kode_mk]'],

            ['field' => 'nama_mk',
            'label' => 'Nama_mk',
            'rules' => 'required'],

            ['field' => 'sks',
            'label' => 'Sks',
            'rules' => 'required'],

            ['field' => 'semester',
            'label' => 'Semester',
            'rules' => 'required'],

            ['field' => 'jenis_mk',
            'label' => 'Jenis_mk',
            'rules' => 'required'],

            ['field' => 'konsentrasi',
            'label' => 'Konsentrasi',
            'rules' => 'required']

        ];
    }

    public function ruless()
    {
        return [

            ['field' => 'nama_mk',
            'label' => 'Nama_mk',
            'rules' => 'required'],

            ['field' => 'sks',
            'label' => 'Sks',
            'rules' => 'required'],

            ['field' => 'semester',
            'label' => 'Semester',
            'rules' => 'required'],

            ['field' => 'jenis_mk',
            'label' => 'Jenis_mk',
            'rules' => 'required'],

            ['field' => 'konsentrasi',
            'label' => 'Konsentrasi',
            'rules' => 'required']

        ];
    }

public function getMatkul()
    {
      $this->db->select('*');
      $this->db->from('matkul');
      $this->db->order_by('semester', 'ASC');
      $query = $this->db->get();
      return $query->result();
    }

    
    public function getMatkulku()
    {
      $this->db->select('*');
      $this->db->from('matkul');
      $this->db->where('semester', 1);
      $query = $this->db->get();
      return $query->result();
    }

    public function getMatkulku2()
    {
      $this->db->select('*');
      $this->db->from('matkul');
      $this->db->where('semester', 2);
      $query = $this->db->get();
      return $query->result();
    }

    public function getMatkulku3()
    {
      $this->db->select('*');
      $this->db->from('matkul');
      $this->db->where('semester', 3);
      $query = $this->db->get();
      return $query->result();
    }

    public function getMatkulku4()
    {
      $this->db->select('*');
      $this->db->from('matkul');
      $this->db->where('semester', 4);
      $query = $this->db->get();
      return $query->result();
    }

    public function getMatkulku5()
    {
      $this->db->select('*');
      $this->db->from('matkul');
      $this->db->where('semester', 5);
      $query = $this->db->get();
      return $query->result();
    }

    public function getMatkulku6()
    {
      $this->db->select('*');
      $this->db->from('matkul');
      $this->db->where('semester', 6);
      $query = $this->db->get();
      return $query->result();
    }

    public function getMatkulku7()
    {
      $this->db->select('*');
      $this->db->from('matkul');
      $this->db->where('semester', 7);
      $query = $this->db->get();
      return $query->result();
    }

    public function getMatkulku8()
    {
      $this->db->select('*');
      $this->db->from('matkul');
      $this->db->where('semester', 8);
      $query = $this->db->get();
      return $query->result();
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["kode_mk" => $id])->row();
    }


    public function save()
    {
        $post = $this->input->post();
        $this->kode_mk = $post["kode_mk"];
        $this->nama_mk = $post["nama_mk"];
        $this->sks = $post["sks"];
        $this->semester = $post["semester"];
        $this->jenis_mk = $post["jenis_mk"];
         $this->konsentrasi = $post["konsentrasi"];
        
        $this->db->insert($this->_table, $this);
    }

 public function delete($id)
    {
        return $this->db->delete($this->_table, array("kode_mk" => $id));
    }

    public function update()
    {
        $post = $this->input->post();
        $this->kode_mk = $post["kode_mk"];
        $this->nama_mk = $post["nama_mk"];
        $this->sks = $post["sks"];
        $this->semester = $post["semester"];
        $this->jenis_mk = $post["jenis_mk"];
        $this->konsentrasi = $post["konsentrasi"];

        $this->db->update($this->_table, $this, array('kode_mk' => $post['kode_mk']));
    }
 

 
}
