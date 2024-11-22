<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Data_NonAkademik extends CI_Model {

	public function tampil_data()
	{
		$this->db->select('*'); 
        $this->db->from('data_nonakademik');
        $this->db->order_by('data_nonakademik.nim','asc');
        return $this->db->get();
	}

	public function save()
	{
		$data = [
			"id_nonakademik"=>$this->input->post('id_nonakademik', true),
        	"nim"=>$this->input->post('nim', true),
        	"nama"=>$this->input->post('nama',true),
        	"keuangan"=>$this->input->post('keuangan', true),
        	"cuti"=>$this->input->post('cuti', true),
        	"prediksi_b"=>$this->input->post('prediksi_b', true),
		];
        $this->db->insert('data_nonakademik', $data);
	}

	public function data_id($id)
    {
        $this->db->select('*');
        $this->db->from('data_nonakademik');
        $this->db->where(['nim' => $id]);
        return $this->db->get('')->row();
    }

	public function update() 
    {
    	$nim = $this->input->post('id');
        $data = [
        	"id_nonakademik"=>$this->input->post('id_nonakademik', true),
            "nim"=>$this->input->post('nim', true),
            "nama"=>$this->input->post('nama',true),
            "keuangan"=>$this->input->post('keuangan', true),
            "cuti"=>$this->input->post('cuti', true),
            "prediksi_a"=>$this->input->post('prediksi_a', true),
        ]; 
        $this->db->where(['nim'=> $nim]);
        $this->db->update('data_nonakademik', $data);
    }

    public function delete($id)
    {
        $this->db->where('nim', $id);
        $this->db->delete('data_nonakademik');
    }
}