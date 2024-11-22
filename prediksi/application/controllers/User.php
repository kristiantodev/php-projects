<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        is_logged_in(); //helper fungsi
        $this->load->library('form_validation');
        $this->load->model('M_user'); 
    }

    public function index()
    {
    	$data['session'] = $this->db->select('*')
        ->from('user')
        ->join('prodi', 'user.id_prodi = prodi.id_prodi')
        ->where('username', $this->session->userdata('username'))
        ->get()->row_array();

        $data['user']= $this->M_user->tampil_data()->result(); //menampilkan semua data

	 	$this->load->view('template/header',$data);
	 	$this->load->view('template/sidebar',$data);
	 	$this->load->view('user/data',$data);
	 	$this->load->view('template/footer');
    }

    public function add() 
    {
        $data['session'] = $this->db->select('*')
        ->from('user')
        ->join('prodi', 'user.id_prodi = prodi.id_prodi')
        ->where('username', $this->session->userdata('username'))
        ->get()->row_array();

        $data['prodi'] = $this->db->get('prodi')->result_array();

        //set rules validasi
        $this->form_validation->set_rules('nidn','nidn','required');
         $this->form_validation->set_rules('nama','nama','required');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('id_prodi','Id_prodi','required');
        $this->form_validation->set_rules('level','Level','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        //Jika form validasi salah
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header',$data);
            $this->load->view('template/sidebar',$data);
            $this->load->view('user/tambah_user',$data);
            $this->load->view('template/footer');

            //jika form validasi benar
        } else {
            $this->M_user->save();
            $this->session->set_flashdata('message', '
            <div class="alert alert-info"> 
                <i class="fas fa-user-circle"></i> User Baru telah Ditambahkan !!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                    <span aria-hidden="true">&times;</span> 
                </button>
            </div>');
            redirect('user');
        }    
    }

    public function edit($id_user = null) 
    {
        $data['session'] = $this->db->select('*')
        ->from('user')
        ->join('prodi', 'user.id_prodi = prodi.id_prodi')
        ->where('username', $this->session->userdata('username'))
        ->get()->row_array();

        $data['prodi'] = $this->db->get('prodi')->result_array();
        $data['user'] = $this->db->get_where('user',['id_user'=>$id_user])->row();

        //set rules validasi
        //set rules validasi
        $this->form_validation->set_rules('nidn','nidn','required');
        $this->form_validation->set_rules('nama','nama','required');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('id_prodi','Id_prodi','required');
        $this->form_validation->set_rules('level','Level','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        //Jika form validasi salah
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header',$data);
            $this->load->view('template/sidebar',$data);
            $this->load->view('user/edit_user',$data);
            $this->load->view('template/footer');

            //jika form validasi benar
        } else {
            $this->M_user->update();
            $this->session->set_flashdata('message', '
            <div class="alert alert-info"> 
                <i class="fas fa-user-circle"></i> Data User telah Diubah !!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                    <span aria-hidden="true">&times;</span> 
                </button>
            </div>');
            redirect('user');
        }    
    }

    public function detail($id=null)
    {
        $data['session'] = $this->db->select('*')
        ->from('user')
        ->join('prodi', 'user.id_prodi = prodi.id_prodi')
        ->where('username', $this->session->userdata('username'))
        ->get()->row_array();

        $data['user'] = $this->db->select('*')
            ->from('user')
            ->join('prodi', 'user.id_prodi = prodi.id_prodi')
            ->where(['id_user' => $id])
            ->get()->row();

        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('user/detail_user',$data);
        $this->load->view('template/footer');
    }

    public function hapus($id)
    {
        $this->M_user->delete($id);
        $this->session->set_flashdata('message', '
        <div class="alert alert-danger"> 
            <i class="fas fa-user-circle"></i> User telah Dihapus !!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                <span aria-hidden="true">&times;</span> 
            </button>
        </div>');
        redirect('user');
    }
}
