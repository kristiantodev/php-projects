<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    public function tampil_data()
    {
        $this->db->select('*');
        $this->db->from('tabel_barang');
        return $this->db->get()->result();
    }

    public function tampil_data_kategori()
    {
        return $this->db->get('tabel_kategori')->result_array();
    }

    public function kategori($id_kategori)
    {
        $sql = "SELECT  tb.*, tk.nama_kategori
                FROM    tabel_barang tb
                LEFT JOIN tabel_kategori tk ON tk.id_kategori = tb.id_kategori 
                WHERE tk.id_kategori = '$id_kategori' ";;

        return $this->db->query($sql)->result_array();
    }

    public function ambil_kategori($id_kategori)
    {
        $this->db->select('*');
        $this->db->from('tabel_kategori');
        $this->db->where('id_kategori', $id_kategori);
        return $this->db->get()->result_array();
    }

    public function search_data($keyword)
    {
        $this->db->select('*');
        $this->db->from('tabel_barang');
        $this->db->like('nama_barang', $keyword);
        $this->db->or_like('harga_barang', $keyword);
        return $this->db->get()->result_array();
    }

    public function tampil_detail($id_barang)
    {
        $sql = "SELECT  tb.*, tk.nama_kategori
                FROM    tabel_barang tb
                LEFT JOIN tabel_kategori tk ON tk.id_kategori = tb.id_kategori 
                WHERE tb.id_barang = '$id_barang' ";;

        return $this->db->query($sql)->result();
    }
}
