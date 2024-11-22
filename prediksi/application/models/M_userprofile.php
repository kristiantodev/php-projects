<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_userprofile extends CI_Model {

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
        $data = [
            "nidn"=>$this->input->post('nidn', true),
            "nama_u"=>$this->input->post('nama', true),
            "password"=>$this->input->post('password', true),
            "jk"=>$this->input->post('jk',true),
            "id_prodi"=>$this->input->post('id_prodi', true),
            "alamat"=>$this->input->post('alamat', true),
        ]; 
        $this->db->where(['id_user'=> $id_user]);
        $this->db->update('user', $data);
    }

    public function update_foto()
    {

        $id_user = $this->input->post('id2');

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
        $this->db->where('id_user', $id_user);
        $this->db->update('user');
    }
} 