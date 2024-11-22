<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mahasiswa extends CI_Model {

	public function tampil_data()
	{
		$this->db->select('*'); 
        $this->db->from('mahasiswa');
        $this->db->join('prodi', 'mahasiswa.id_prodi = prodi.id_prodi');
        $this->db->order_by('mahasiswa.nim','asc');
        return $this->db->get();
	}

	public function save()
	{
		$data = [
			"nim"=>$this->input->post('nim', true),
        	"nama"=>$this->input->post('nama', true),
        	"jk"=>$this->input->post('jk',true),
        	"angkatan"=>$this->input->post('angkatan', true),
        	"id_prodi"=>$this->input->post('id_prodi', true),
        	"alamat"=>$this->input->post('alamat', true),
        	"telephone"=>$this->input->post('telephone',true),
        	"dosen_wali"=>$this->input->post('dosen_wali', true),
        	
		];
        $this->db->insert('mahasiswa', $data);
	}

	public function data_id($id)
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->join('prodi', 'mahasiswa.id_prodi = prodi.id_prodi');
        $this->db->join('nilai', 'mahasiswa.nim = nilai.nim');
        $this->db->where(['mahasiswa.nim' => $id]);
        return $this->db->get('')->row();
    }

    public function detail($id)
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->join('nilai', 'mahasiswa.nim = nilai.nim');
        $this->db->where(['mahasiswa.nim' => $id]);
        return $this->db->get('')->row();
    }


	public function update() 
    {
    	$nim = $this->input->post('id');
        $data = [
            "nim"=>$this->input->post('nim', true),
        	"nama"=>$this->input->post('nama', true),
        	"jk"=>$this->input->post('jk',true),
        	"angkatan"=>$this->input->post('angkatan', true),
        	"id_prodi"=>$this->input->post('id_prodi', true),
        	"alamat"=>$this->input->post('alamat', true),
        	"telephone"=>$this->input->post('telephone',true),
        	"dosen_wali"=>$this->input->post('dosen_wali', true),
        ]; 
        $this->db->where(['nim'=> $nim]);
        $this->db->update('mahasiswa', $data);
    }

    public function update_nilai() 
    {
        $nim = $this->input->post('id');
        $data = [
            "nim"=>$this->input->post('nim', true),
            "nama"=>$this->input->post('nama', true),
            //"jk"=>$this->input->post('jk',true),
            //"angkatan"=>$this->input->post('angkatan', true),
            //"id_prodi"=>$this->input->post('id_prodi', true),
            //"alamat"=>$this->input->post('alamat', true),
            //"telephone"=>$this->input->post('telephone',true),
            //"dosen_wali"=>$this->input->post('dosen_wali', true),
            "ipk"=>$this->input->post('ipk', true),
            "sks"=>$this->input->post('sks', true),
            "uang"=>$this->input->post('uang', true),
            "cuti"=>$this->input->post('cuti', true),
            "stat"=>$this->input->post('stat', true),
        ]; 
        $this->db->where(['nim'=> $nim]);
        $this->db->update('nilai', $data);
    }

    public function delete($id)
    {
        $this->db->where('nim', $id);
        $this->db->delete('mahasiswa');
    }

    public function delete_nilai($id)
    {
        $this->db->where('nim', $id);
        $this->db->delete('nilai');
    }

    public function nilai()
    {
        $data = [
            "nim"=>$this->input->post('nim', true),
            "nama"=>$this->input->post('nama', true),
            "ipk"=>$this->input->post('ipk', true),
            "sks"=>$this->input->post('sks', true),
            "uang"=>$this->input->post('uang',true),
            "cuti"=>$this->input->post('cuti', true),
            "stat"=>$this->input->post('stat', true),
        ];
        $this->db->insert('nilai', $data);
    }

    public function import_data_mahasiswa($mahasiswa)
    {
        $jumlah = count($mahasiswa);
        if ($jumlah > 0) {
            $this->db->replace('mahasiswa',$mahasiswa);
        }
    }
}