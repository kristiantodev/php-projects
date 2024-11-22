<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH.'third_party/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class Mahasiswa extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        is_logged_in(); //helper fungsi
        $this->load->library('form_validation');
        $this->load->model('M_mahasiswa'); 
    }

    public function index()
    {
    	$data['session'] = $this->db->select('*')
        ->from('user')
        ->join('prodi', 'user.id_prodi = prodi.id_prodi')
        ->where('username', $this->session->userdata('username'))
        ->get()->row_array();

        $data['mahasiswa']= $this->M_mahasiswa->tampil_data()->result(); //menampilkan semua data

	 	$this->load->view('template/header',$data);
	 	$this->load->view('template/sidebar',$data);
	 	$this->load->view('mahasiswa/data',$data);
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
        $this->form_validation->set_rules('nim','Nim','required');
        $this->form_validation->set_rules('nama','nama','required');
        $this->form_validation->set_rules('angkatan','Angkatan','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('telephone','Telephone','required');
        $this->form_validation->set_rules('dosen_wali','Dosen_wali','required');
       
        //Jika form validasi salah
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header',$data);
            $this->load->view('template/sidebar',$data);
            $this->load->view('mahasiswa/tambah_mahasiswa',$data);
            $this->load->view('template/footer');

            //jika form validasi benar
        } else {
            $this->M_mahasiswa->save();
            $this->session->set_flashdata('message', '
            <div class="alert alert-info"> 
                <i class="fas fa-user-circle"></i> Mahasiswa Baru telah Ditambahkan !!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                    <span aria-hidden="true">&times;</span> 
                </button>
            </div>');
            redirect('mahasiswa');
        }    
    }

    public function edit_mahasiswa($nim = null) 
    {
        $data['session'] = $this->db->select('*')
        ->from('user')
        ->join('prodi', 'user.id_prodi = prodi.id_prodi')
        ->where('username', $this->session->userdata('username'))
        ->get()->row_array();

        $data['prodi'] = $this->db->get('prodi')->result_array();
        // $data['mahasiswa'] = $this->db->get_where('mahasiswa',['nim'=>$nim])->row();
        $data['mahasiswa'] = $this->M_mahasiswa->data_id($nim);
        $data['nilai'] = $this->db->get_where('nilai', ['nim' => $nim])->row();

        //set rules validasi
        $this->form_validation->set_rules('nim','Nim','required');
        $this->form_validation->set_rules('nama','nama','required');
        $this->form_validation->set_rules('angkatan','Angkatan','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('telephone','Telephone','required');
        $this->form_validation->set_rules('dosen_wali','Dosen_wali','required');
        //Jika form validasi salah
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header',$data);
            $this->load->view('template/sidebar',$data);
            $this->load->view('mahasiswa/edit_mahasiswa',$data);
            $this->load->view('template/footer');

            //jika form validasi benar
        } else {
            $this->M_mahasiswa->update();
            $this->M_mahasiswa->update_nilai();
            $this->session->set_flashdata('message', '
            <div class="alert alert-info"> 
                <i class="fas fa-user-circle"></i> Data Mahasiswa telah Diubah !!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                    <span aria-hidden="true">&times;</span> 
                </button>
            </div>');
            redirect('mahasiswa');
        }    
    }

    public function detail($nim=null)
    {
        $data['session'] = $this->db->select('*')
        ->from('user')
        ->join('prodi', 'user.id_prodi = prodi.id_prodi')
        ->where('username', $this->session->userdata('username'))
        ->get()->row_array();

        $data['mahasiswa'] = $this->db->select('*')
            ->from('mahasiswa')
            ->join('prodi', 'mahasiswa.id_prodi = prodi.id_prodi')
            ->where(['nim' => $nim])
            ->get()->row();

        $data['prodi'] = $this->db->get('prodi')->result_array();
        $data['nilai'] = $this->db->get_where('nilai',['nim'=>$nim])->row();


        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('mahasiswa/detail_mahasiswa',$data);
        $this->load->view('template/footer');
    }

    public function hapus($id)
    {
        $this->M_mahasiswa->delete($id);
        $this->M_mahasiswa->delete_nilai($id);
        $this->session->set_flashdata('message', '
        <div class="alert alert-danger"> 
            <i class="fas fa-user-circle"></i> Mahasiswa telah Dihapus !!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                <span aria-hidden="true">&times;</span> 
            </button>
        </div>');
        redirect('mahasiswa');
    }
     public function nilai($nim = null) 
    {
        $data['session'] = $this->db->select('*')
        ->from('user')
        ->join('prodi', 'user.id_prodi = prodi.id_prodi')
        ->where('username', $this->session->userdata('username'))
        ->get()->row_array();

        $data['prodi'] = $this->db->get('prodi')->result_array();
        $data['mahasiswa'] = $this->db->get_where('mahasiswa',['nim'=>$nim])->row_array();


        //set rules validasi
        $this->form_validation->set_rules('nim','Nim','required');
        $this->form_validation->set_rules('nama','nama','required');
        $this->form_validation->set_rules('ipk','Ipk','required',[
        'required'=> 'IPK Harap Diisi'
            ]);
        $this->form_validation->set_rules('sks','Sks','required',[
        'required'=> 'SKS Harap Diisi'
            ]);
        $this->form_validation->set_rules('uang','Uang','required',[
        'required'=> 'Keuangan Harap Diisi'
            ]);
        $this->form_validation->set_rules('cuti','Cuti','required',
            ['required'=> 'Cuti Harap Diisi']);
        $this->form_validation->set_rules('stat','stat','required',[
        'required'=> 'Status Harap Diisi'
            ]);
        //Jika form validasi salah
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header',$data);
            $this->load->view('template/sidebar',$data);
            $this->load->view('mahasiswa/tambah_nilai',$data);
            $this->load->view('template/footer');

            //jika form validasi benar
        } else {
            $this->M_mahasiswa->nilai();
            $this->session->set_flashdata('message', '
            <div class="alert alert-info"> 
                <i class="fas fa-user-circle"></i> Nilai Mahasiswa telah Ditambahkan !!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                    <span aria-hidden="true">&times;</span> 
                </button>
            </div>');
            redirect('mahasiswa');
        }    
    }



    // IMPORT DATA TABEL

    public function import() 
    {
        $data['session'] = $this->db->select('*')
        ->from('user')
        ->join('prodi', 'user.id_prodi = prodi.id_prodi')
        ->where('username', $this->session->userdata('username'))
        ->get()->row_array();

        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('mahasiswa/import',$data);
        $this->load->view('template/footer');
    }

    public function uploaddata()
    {
        $config['upload_path'] = './assets/uploads/import/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc'.time();
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();

            $reader->open('./assets/uploads/import/'.$file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $mahasiswa = [
                            'nim'           => $row->getCellAtIndex(1),
                            'nama'    => $row->getCellAtIndex(2),
                            'jk'            => $row->getCellAtIndex(3),
                            'angkatan'        => $row->getCellAtIndex(4),
                            'id_prodi'           => $row->getCellAtIndex(5),
                            'alamat'    => $row->getCellAtIndex(6),
                            'telephone'            => $row->getCellAtIndex(7),
                            'dosen_wali'        => $row->getCellAtIndex(8),
                        ];
                        $this->M_mahasiswa->import_data_mahasiswa($mahasiswa);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('./assets/uploads/import/' . $file['file_name']);
                $this->session->set_flashdata('message', '
                <div class="alert alert-info"> 
                    <i class="fas fa-user-circle"></i> Siswa Baru telah Ditambahkan !!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                        <span aria-hidden="true">&times;</span> 
                    </button>
                </div>');
                redirect('mahasiswa');
            }
        } else {
            echo "Error :" . $this->upload->display_errors();
        };
    }

}
