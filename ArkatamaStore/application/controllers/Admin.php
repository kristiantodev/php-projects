<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Admin extends CI_Controller
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
        $data = array(
            'judul' => 'Data Barang',
            'page' => 'admin/data_barang',
            'admin' => $this->M_admin->tampil_data_barang(),
            'isiKategori' => $this->M_admin->tampil_data_kategori(),
        );
        $this->load->view('admin/index', $data, false);
    }

    public function tambah_barang()
    {
        $nama_barang = htmlspecialchars($this->input->post('nama_barang', true));
        $keterangan_barang = htmlspecialchars($this->input->post('keterangan_barang', true));
        $kategori_barang = htmlspecialchars($this->input->post('id_kategori', true));
        $harga_barang = htmlspecialchars($this->input->post('harga_barang', true));
        $gambar_barang = $_FILES['gambar_barang'];

        if ($gambar_barang = '') {
        } else {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar_barang')) {
                echo "gambar gagal upload!";
            } else {
                $gambar_barang = $this->upload->data('file_name');
            }

            $data = array(
                'nama_barang' => $nama_barang,
                'keterangan_barang' => $keterangan_barang,
                'id_kategori' => $kategori_barang,
                'harga_barang' => $harga_barang,
                'gambar_barang' => $gambar_barang,
                'status_produk' => 'BS'
            );

            $this->M_admin->tambah_barang($data);
            $this->session->set_flashdata('pesan',  '<div class="alert alert-success">Data barang Berhasil Ditambah !!</div>');
            redirect('admin');
        }
    }

    public function edit_barang($id_barang)
    {

        $data = array(
            'judul' => 'Edit Data Barang',
            'page' => 'admin/edit_barang',
            'admin' => $this->M_admin->detail_barang($id_barang),
            'isiKategori' => $this->M_admin->tampil_data_kategori(),
        );
        $this->load->view('admin/index', $data, false);
    }

    public function update_barang($id_barang)
    {
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required', array(
            'required' => '%s Wajib Diisi !'
        ));

        $this->form_validation->set_rules('keterangan_barang', 'Keterangan', 'required', array(
            'required' => '%s Wajib Diisi !'
        ));

        $this->form_validation->set_rules('harga_barang', 'Harga', 'required', array(
            'required' => '%s Wajib Diisi !'
        ));

        if ($this->form_validation->run() == false) {
            $data = array(
                'judul' => 'Edit Data Barang',
                'page' => 'admin/edit_barang',
                'admin' => $this->M_admin->detail_barang($id_barang),
                'isiKategori' => $this->M_admin->tampil_data_kategori(),
            );
            $this->load->view('admin/index', $data, false);
        } else {
            $nama_barang = htmlspecialchars($this->input->post('nama_barang', true));
            $keterangan_barang = htmlspecialchars($this->input->post('keterangan_barang', true));
            $kategori_barang = htmlspecialchars($this->input->post('id_kategori', true));
            $harga_barang = htmlspecialchars($this->input->post('harga_barang', true));
            $gambar_barang = $_FILES['gambar_barang'];

            if ($gambar_barang = '') {
            } else {
                $config['upload_path'] = './uploads';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';

                $this->upload->initialize($config);
                if (!$this->upload->do_upload('gambar_barang')) {
                    $data = array(
                        'id_barang' => $id_barang,
                        'nama_barang' => $nama_barang,
                        'keterangan_barang' => $keterangan_barang,
                        'id_kategori' => $kategori_barang,
                        'harga_barang' => $harga_barang,
                        'status_produk' => 'BS'
                    );

                    $this->M_admin->edit_barang($data);

                    // Data berhasil diubah di db
                    $this->session->set_flashdata('pesan',  '<div class="alert alert-success">Data barang Berhasil Diubah !!</div>');
                    redirect('admin');
                } else {
                    $barang = $this->M_admin->get_barang($id_barang);
                    if ($barang->gambar_barang != "") {
                        unlink('./uploads/' . $barang->gambar_barang);
                    }
                    $gambar_barang = $this->upload->data('file_name');
                    $data = array(
                        'id_barang' => $id_barang,
                        'nama_barang' => $nama_barang,
                        'keterangan_barang' => $keterangan_barang,
                        'id_kategori' => $kategori_barang,
                        'harga_barang' => $harga_barang,
                        'gambar_barang' => $gambar_barang,
                        'status_produk' => 'BS'
                    );

                    $this->M_admin->edit_barang($data);
                    $this->session->set_flashdata('pesan',  '<div class="alert alert-success">Data barang Berhasil Diubah !!</div>');
                    redirect('admin');
                }
            }
        }
    }

    public function delete_barang($id_barang)
    {
        $barang = $this->M_admin->get_barang($id_barang);
        if ($barang->gambar_barang != "") {
            unlink('./uploads/' . $barang->gambar_barang);
        }
        $data = array(
            'id_barang' => $id_barang,
        );
        $this->M_admin->hapus_barang($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger">Data Barang Berhasil Dihapus !!</div>');
        redirect('admin');
    }

    public function data_kategori()
    {
        $data = array(
            'judul' => 'Data Kategori',
            'page' => 'admin/data_kategori',
            'admin' => $this->M_admin->tampil_data_kategori(),
        );
        $this->load->view('admin/index', $data, false);
    }

    public function tambah_kategori()
    {
        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required', array(
            'required' => '%s Wajib Diisi !'
        ));


        $nama_kategori = htmlspecialchars($this->input->post('nama_kategori', true));

        $data = array(
            'nama_kategori' => $nama_kategori,
        );

        $this->M_admin->tambah_kategori($data);
        $this->session->set_flashdata('pesan',  '<div class="alert alert-success">Data barang Berhasil Ditambah !!</div>');
        redirect('admin/data_kategori');
    }


    public function edit_kategori($id_kategori)
    {

        $data = array(
            'judul' => 'Edit Data Kategori',
            'page' => 'admin/edit_kategori',
            'admin' => $this->M_admin->detail_kategori($id_kategori),
        );
        $this->load->view('admin/index', $data, false);
    }

    public function update_kategori($id_kategori)
    {
        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required', array(
            'required' => '%s Wajib Diisi !'
        ));

        $nama_kategori = htmlspecialchars($this->input->post('nama_kategori', true));


        $data = array(
            'id_kategori' => $id_kategori,
            'nama_kategori' => $nama_kategori,
        );

        $this->M_admin->edit_kategori($data);
        $this->session->set_flashdata('pesan',  '<div class="alert alert-success">Data Kategori Berhasil Diubah !!</div>');
        redirect('admin/data_kategori');
    }


    public function delete_kategori($id_kategori)
    {

        $data = array(
            'id_kategori' => $id_kategori,
        );
        $this->M_admin->hapus_kategori($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger">Data Kategori Berhasil Dihapus !!</div>');
        redirect('admin/data_kategori');
    }
}
