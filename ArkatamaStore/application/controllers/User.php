<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {
        $data['barang'] = $this->M_user->tampil_data();
        $data['hero'] = $this->M_hero->tampil_data();

        $this->load->view('user/index', $data);
    }

    public function tampil_login()
    {
        $this->load->view('login/login');
    }

    public function tampil_registrasi()
    {
        $this->load->view('login/registrasi');
    }

    public function page_produk()
    {
        $data['barang'] = $this->M_user->tampil_data();
        $data['kategori'] = $this->M_user->tampil_data_kategori();
        $this->load->view('user/page_produk', $data);
    }

    public function kategori($id_kategori)
    {
        $judul = $this->input->post('judul');
        if ($judul) {
            $data['judul'] = $this->M_user->ambil_kategori($id_kategori);
            $data['search'] = $this->M_user->search_data($judul);
            $data['kategori'] = $this->M_user->tampil_data_kategori();
            $data['produk'] = $this->M_user->kategori($id_kategori);
        } else {
            $data['judul'] = $this->M_user->ambil_kategori($id_kategori);
            // $data['search'] = $this->M_user->search_data();
            $data['kategori'] = $this->M_user->tampil_data_kategori();
            $data['produk'] = $this->M_user->kategori($id_kategori);
        }


        $this->load->view('user/page_kategori', $data);
    }

    public function page_search()
    {
        $this->load->view('user/page_search');
    }

    public function search()
    {
        $judul = $this->input->post('nama_produk');
        if ($judul === ' ') {
            $this->load->view('user/page_search');
        } else {
            $data['produk'] = $this->M_user->search_data($judul);
            $this->load->view('user/pencarian', $data);
        }
    }

    public function detail_produk($id_barang)
    {
        $data['detail'] = $this->M_user->tampil_detail($id_barang);
        $this->load->view('user/page_detail', $data);
    }
}
