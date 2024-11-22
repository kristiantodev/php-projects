<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
    public function tampil_data_barang()
    {
        // $this->db->select('*');
        // $this->db->from('tabel_barang');
        // return $this->db->get()->result();

        $sql = "    SELECT  jp.*, m.nama_kategori
                    FROM    tabel_barang jp
                    LEFT JOIN tabel_kategori m ON m.id_kategori = jp.id_kategori ";
        return $this->db->query($sql)->result_array();
    }

    public function tambah_barang($data)
    {
        $this->db->insert('tabel_barang', $data);
    }

    public function edit_barang($edit)
    {
        $this->db->where('id_barang', $edit['id_barang']);
        $this->db->update('tabel_barang', $edit);
    }

    public function hapus_barang($delete)
    {
        $this->db->where('id_barang', $delete['id_barang']);
        $this->db->delete('tabel_barang', $delete);
    }



    public function detail_barang($id_barang)
    {
        $sql = "    SELECT  jp.*, m.nama_kategori
                    FROM    tabel_barang jp
                    LEFT JOIN tabel_kategori m ON m.id_kategori = jp.id_kategori 
                    WHERE jp.id_barang = '$id_barang' ";
        return $this->db->query($sql)->result_array();
    }

    public function get_barang($id_barang)
    {
        $this->db->select('*');
        $this->db->from('tabel_barang');
        $this->db->where('id_barang', $id_barang);
        return $this->db->get()->row();
    }

    public function tampil_data_kategori()
    {
        return $this->db->get('tabel_kategori')->result_array();
    }

    public function tambah_kategori($data)
    {
        $this->db->insert('tabel_kategori', $data);
    }

    public function edit_kategori($edit)
    {
        $this->db->where('id_kategori', $edit['id_kategori']);
        $this->db->update('tabel_kategori', $edit);
    }

    public function hapus_kategori($delete)
    {
        $this->db->where('id_kategori', $delete['id_kategori']);
        $this->db->delete('tabel_kategori', $delete);
    }

    public function detail_kategori($id_kategori)
    {
        $this->db->select('*');
        $this->db->from('tabel_kategori');
        $this->db->where('id_kategori', $id_kategori);
        return $this->db->get()->row();
    }

    public function ambil_barang($where)
    {
        return $this->db->get_where('tabel_barang', $where);
    }
}
