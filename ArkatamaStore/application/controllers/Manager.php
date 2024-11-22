<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manager extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data2 = array(
            'judul' => 'Barang',
            'page' => 'manager/barang',
            'admin' => $this->M_admin->tampil_data_barang(),
            'isiKategori' => $this->M_admin->tampil_data_kategori(),
        );
        $this->load->view('manager/index', $data2, false);
    }

    public function hero()
    {
        $data2 = array(
            'judul' => 'Hero',
            'page' => 'manager/hero',
            'hero' => $this->M_hero->tampil_data(),
        );
        $this->load->view('manager/index', $data2, false);
    }

    public function setujui($id_hero)
    {

        $data = array(
            'id_hero' => $id_hero,
            'status_hero' => 'disetujui',
        );

        $this->M_hero->edit_setujui($data);
        $this->session->set_flashdata('pesan',  '<div class="alert alert-success">Berhasil Diubah !!</div>');
        redirect('manager/hero');
    }

    public function setujui_produk($id_barang)
    {

        $data = array(
            'id_barang' => $id_barang,
            'status_produk' => 'disetujui',
        );

        $this->M_hero->edit_setujui_produk($data);
        $this->session->set_flashdata('pesan',  '<div class="alert alert-success">Berhasil Diubah !!</div>');
        redirect('manager');
    }
}
