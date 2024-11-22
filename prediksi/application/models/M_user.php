<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	public function tampil_data()
	{
		$this->db->select('*'); 
        $this->db->from('user');
        $this->db->join('prodi', 'user.id_prodi = prodi.id_prodi');
        $this->db->order_by('user.id_user','asc');
        return $this->db->get();
	}

	public function save()
	{
		$data = [
            "nidn"=>$this->input->post('nidn', true),
        	"nama_u"=>$this->input->post('nama', true),
        	"username"=>$this->input->post('username', true),
            "password"=>$this->input->post('password', true),
        	"jk"=>$this->input->post('jk',true),
        	"alamat"=>$this->input->post('alamat', true),
            "image"=>"default.png",
        	"id_prodi"=>$this->input->post('id_prodi', true),
            "level"=>$this->input->post('level', true),
		];
        $this->db->insert('user', $data);
	}

	public function data_id($id)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('prodi', 'user.id_prodi = prodi.id_prodi');
        $this->db->where(['id_user' => $id]);
        return $this->db->get('')->row();
    }

	public function update()
    {
        $id_user = $this->input->post('id');
        $nidn = $this->input->post('nidn');
        $nama_u = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $jk = $this->input->post('jk');
        $alamat = $this->input->post('alamat');
        $id_prodi = $this->input->post('id_prodi');
        $level = $this->input->post('level');

        //cek jika ada gambar
        $upload_image = $_FILES['image']['name'];
        if ($upload_image) 
        {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '3072';
            $config['upload_path']   = './assets/uploads/foto/';
            $config['overwrite'] = TRUE;

            $this->load->library('upload', $config); 

            if ($this->upload->do_upload('image')) {

                // upload foto dan edit di database
                $new_image = $this->upload->data('file_name');
                $this->db->set('image', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        //update nama, email dan telepon
        $this->db->set('id_user', $id_user);
        $this->db->set('nidn', $nidn);
        $this->db->set('nama_u', $nama_u);
        $this->db->set('username', $username);
        $this->db->set('password', $password);
        $this->db->set('id_prodi', $id_prodi);
        $this->db->set('jk', $jk);
        $this->db->set('alamat', $alamat);
        $this->db->set('level', $level);
        $this->db->where('id_user', $id_user);
        $this->db->update('user');
    }

    public function delete($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('user');
    }
}