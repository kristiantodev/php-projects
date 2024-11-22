<?php 

class M_admin extends CI_Model{
	
	function tampil_user(){
		return $this->db->get('user');
	}

	function tampil_siswa(){
		return $this->db->get('siswa');
	}

	function tampil_materi(){
		return $this->db->get('materi');
	}

	function tampil_mapel(){
		return $this->db->get('mapel');
	}

	function tampil_quiz(){
		return $this->db->get('quiz');
	}



	function input($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}