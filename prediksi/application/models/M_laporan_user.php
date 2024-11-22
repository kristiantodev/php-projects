<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporan_user extends CI_Model {

	public function tampil_data()
	{
		$this->db->select('*'); 
        $this->db->from('laporan');
        $this->db->order_by('laporan.nim_l','asc');
        return $this->db->get();
	}

	public function save()
	{
		$data = [
			"nim"=>$this->input->post('nim_l', true),
        	"nama_l"=>$this->input->post('nama_l', true),
        	"id_prodi"=>$this->input->post('id_prodi',true),
        	"angkatan_l"=>$this->input->post('angkatan_l', true),
            "dosen_wali"=>$this->input->post('dosen_wali', true),
        	"ipk_l"=>$this->input->post('ipk_l', true),
        	"sks_l"=>$this->input->post('sks_l',true),
        	"keuangan_l"=>$this->input->post('keuangan_l', true),
        	"cuti_l"=>$this->input->post('cuti_l', true),
        	"prediksi_a"=>$this->input->post('prediksi_a',true),
        	"prediksi_b"=>$this->input->post('prediksi_b', true),
		];
        $this->db->insert('laporan', $data);
	}

	public function data_id($id)
    {
        $this->db->select('*');
        $this->db->from('laporan');
        $this->db->where(['nim_l' => $id]);
        return $this->db->get('')->row();
    }

    
}