<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Data_Akademik extends CI_Model {

	public function tampil_data()
	{
		$this->db->select('*'); 
        $this->db->from('data_akademik');;
        $this->db->order_by('data_akademik.nim','asc');
        return $this->db->get();
	}

	public function save()
	{
		$data = [
			"id_akademik"=>$this->input->post('id_akademik', true),
        	"nim"=>$this->input->post('nim', true),
        	"nama"=>$this->input->post('nama',true),
        	"ipk"=>$this->input->post('ipk', true),
        	"sks"=>$this->input->post('sks', true),
            "uang"=>$this->input->post('uang',true),
            "cuti"=>$this->input->post('cuti', true),
            "status"=>$this->input->post('status', true),
        	"prediksi"=>$this->input->post('prediksi', true),
		];
        $this->db->insert('data_akademik', $data);
	}

	public function data_id($id)
    {
        $this->db->select('*');
        $this->db->from('data_akademik');
        $this->db->where(['nim' => $id]);
        return $this->db->get('')->row();
    }

	public function update() 
    {
    	$nim = $this->input->post('id');
        $data = [
        	"id_akademik"=>$this->input->post('id_akademik', true),
            "nim"=>$this->input->post('nim', true),
            "nama"=>$this->input->post('nama',true),
            "ipk"=>$this->input->post('ipk', true),
            "sks"=>$this->input->post('sks', true),
            "uang"=>$this->input->post('uang',true),
            "cuti"=>$this->input->post('cuti', true),
            "status"=>$this->input->post('status', true),
            "prediksi"=>$this->input->post('prediksi', true),
        ]; 
        $this->db->where(['nim'=> $nim]);
        $this->db->update('data_akademik', $data);
    }

    public function delete($id)
    {
        $this->db->where('nim', $id);
        $this->db->delete('data_akademik');
    }
    public function akademik()
    {
        $data = [
            "id_akademik"=>$this->input->post('id_akademik', true),
            "nim"=>$this->input->post('nim', true),
            "nama"=>$this->input->post('nama',true),
            "ipk"=>$this->input->post('ipk', true),
            "sks"=>$this->input->post('sks', true),
            "uang"=>$this->input->post('uang',true),
            "cuti"=>$this->input->post('cuti', true),
            "status"=>$this->input->post('status', true),
            "prediksi"=>$this->input->post('prediksi', true),
        ];
        $this->db->insert('data_akademik', $data);
    }
}