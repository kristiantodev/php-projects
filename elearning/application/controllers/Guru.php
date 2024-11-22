<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper(array('url','download'));
		$this->load->library('pdf');
		
		if($this->session->userdata('status') != "Guru"){
			redirect(base_url("Auth"));
		}else {

		$this->load->model('m_admin');
                $this->load->helper('url'); }	
	}

    public function index()
	{
		
		$this->load->view('guru/templates/header');
		$this->load->view('guru/templates/sidebar');
		$this->load->view('guru/main/dashboard');
		$this->load->view('guru/templates/footer');
	}

	// Materi

	public function Materi(){

		$nama1 = $this->session->userdata('nama');
		$nama = $this->db->query("SELECT * FROM user WHERE username = '$nama1' ");
          foreach ($nama->result_array() as $nm) {
              $namalengkap = $nm['nama'];
              $levell = $nm['level'];
          } 


    $where = array('guru' => $namalengkap);
		$data['materi'] = $this->m_admin->edit($where,'materi')->result();
		$this->load->view('Guru/templates/header');
		$this->load->view('Guru/templates/sidebar');
		$this->load->view('Guru/main/materi',$data);
		$this->load->view('Guru/templates/footer');
	}

	function Add_Materi(){
		$kode_materi = htmlspecialchars($this->input->post('kode_materi'));
		$judul = htmlspecialchars($this->input->post('judul'));
		$mapel = htmlspecialchars($this->input->post('mapel'));
		$kelas = htmlspecialchars($this->input->post('kelas'));
		$isi = htmlspecialchars($this->input->post('isi'));
		$guru = htmlspecialchars($this->input->post('guru'));
		$pdf = $_FILES['pdf'];

		$config['upload_path']          = './vendor/upload';
    $config['allowed_types']        = 'pdf';
    $config['max_size']             = '1024';
		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('pdf')) {
        	$this->session->set_flashdata('pesan','Salah Format, ex : PDF dengan size Max 1 Mb');
			} else {
				$pdf = $this->upload->data('file_name');

				$data = array(
					'kode_materi' => $kode_materi,
					'judul' => $judul,
					'mapel' => $mapel,
					'kelas' => $kelas,
					'isi' => $isi,
					'guru' => $guru,
					'pdf' => $pdf
				);
				
				$this->m_admin->input($data,'materi');
				$this->session->set_flashdata('message','ditambah');
				redirect('Guru/Materi');
			}
			$this->session->set_flashdata('pesan','Salah Format, ex : PDF dengan size Max 1 Mb');
			redirect('Guru/Materi');
		
	}

	function Update_Materi(){
		$id = $this->input->post('id');
		$kode_materi = htmlspecialchars($this->input->post('kode_materi'));
		$judul = htmlspecialchars($this->input->post('judul'));
		$mapel = htmlspecialchars($this->input->post('mapel'));
		$kelas = htmlspecialchars($this->input->post('kelas'));
		$isi = htmlspecialchars($this->input->post('isi'));
		$guru = htmlspecialchars($this->input->post('guru'));
		$pdf = $_FILES['pdf'];

		$config['upload_path']          = './vendor/upload';
    $config['allowed_types']        = 'pdf';
    $config['max_size']             = '1024';
		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('pdf')) {
        	$data = array(
						'kode_materi' => $kode_materi,
						'judul' => $judul,
						'mapel' => $mapel,
						'kelas' => $kelas,
						'isi' => $isi,
						'guru' => $guru
					);
				
					$where = array(
						'id' => $id
					);
					$this->m_admin->update($where,$data,'materi');
				$this->session->set_flashdata('message','diperbarui');
				redirect('Guru/Materi');
				
			} else {
				$pdf = $this->upload->data('file_name');
				$data = array(
					'kode_materi' => $kode_materi,
					'judul' => $judul,
					'mapel' => $mapel,
					'kelas' => $kelas,
					'isi' => $isi,
					'guru' => $guru,
					'pdf' => $pdf
				);
			
				$where = array(
					'id' => $id
				);
			
				$this->m_admin->update($where,$data,'materi');
				$this->session->set_flashdata('message','diperbarui');
				redirect('Guru/Materi');
			}
			$this->session->set_flashdata('pesan','Salah Format, ex : PDF dengan size Max 1 Mb');
			redirect('Guru/Materi');
		

	}

	function Delete_Materi($id){
		$where = array('id' => $id);
		$this->m_admin->hapus($where,'materi');
		$this->session->set_flashdata('message','dihapus');
		redirect('Guru/Materi');
	}

	function Download($pdf){

		force_download('./vendor/upload/'.$pdf,NULL);
	}


	// Quiz

	public function Quiz(){
		$nama = $this->session->userdata('nama');
		$where = array('pembuat' => $nama);
		$data['quiz'] = $this->m_admin->edit($where,'quiz')->result();
		$this->load->view('Guru/templates/header');
		$this->load->view('Guru/templates/sidebar');
		$this->load->view('Guru/main/quiz',$data);
		$this->load->view('Guru/templates/footer');
	}

	function Add_Quiz(){
		$kode_quiz = htmlspecialchars($this->input->post('kode_quiz'));
		$kode_materi = htmlspecialchars($this->input->post('kode_materi'));
		$soal = htmlspecialchars($this->input->post('soal'));
		$pembuat = htmlspecialchars($this->input->post('pembuat'));

		$data = array(
			'kode_quiz' => $kode_quiz,
			'kode_materi' => $kode_materi,
			'soal' => $soal,
			'pembuat' => $pembuat
		);
		
		$this->m_admin->input($data,'quiz');
		$this->session->set_flashdata('message','ditambah');
		redirect('Guru/Quiz');
	}

	function Update_Quiz(){
		$id = $this->input->post('id');
		$kode_quiz = htmlspecialchars($this->input->post('kode_quiz'));
		$kode_materi = htmlspecialchars($this->input->post('kode_materi'));
		$soal = htmlspecialchars($this->input->post('soal'));
		$pembuat = htmlspecialchars($this->input->post('pembuat'));

		$data = array(
			'kode_quiz' => $kode_quiz,
			'kode_materi' => $kode_materi,
			'soal' => $soal,
			'pembuat' => $pembuat
		);
	
		$where = array(
			'id' => $id
		);
	
		$this->m_admin->update($where,$data,'quiz');
		$this->session->set_flashdata('message','diperbarui');
		redirect('Guru/Quiz',$data);
	}

	function Delete_Quiz($id){
		$where = array('id' => $id);
		$this->m_admin->hapus($where,'quiz');
		$this->session->set_flashdata('message','dihapus');
		redirect('Guru/Quiz');
	}

	function Jawaban_Quiz($kode_quiz){
		$where = array('kode_quiz' => $kode_quiz);
		$data['jawaban'] = $this->m_admin->edit($where,'jawaban')->result();
		
		$this->load->view('guru/templates/header');
		$this->load->view('guru/templates/sidebar');
		$this->load->view('guru/main/jawaban',$data);
		$this->load->view('guru/templates/footer');
	}

	function Nilai(){
		$id = $this->input->post('id');
		$kode_quiz = $this->input->post('kode_quiz');
		$nilai = htmlspecialchars($this->input->post('nilai'));

		$data = array(
			'nilai' => $nilai
		);
	
		$where = array(
			'id' => $id
		);
	
		$this->m_admin->update($where,$data,'jawaban');
		$this->session->set_flashdata('message','diberikan nilai');
		redirect('Guru/Jawaban_Quiz/'.$kode_quiz);
	}

public function Laporan(){
		$key1 = $this->input->post('mapel');
		$key2 = $this->input->post('kelas');

		if ($key1 != "" && $key2 != "") {
			$pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->Cell(190,7,'LAPORAN NILAI',0,1,'C');
        $pdf->SetFont('Arial','',12);
        // mencetak string
        $pdf->Cell(190,7,'Pelajaran  : '.' '.$key1,0,1,'');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(190,7,'Kelas        : '.' '.$key2,0,1,'');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(25,6,'No.',1,0);
        $pdf->Cell(40,6,'NIS',1,0);
        $pdf->Cell(95,6,'Nama',1,0);
        $pdf->Cell(30,6,'Nilai',1,1);
        $pdf->SetFont('Arial','',10);


        $laporan = $this->db->query("SELECT a.no_induk, a.siswa, a.nilai FROM jawaban a
         LEFT JOIN materi b ON a.kode_materi = b.kode_materi
LEFT JOIN siswa c ON a.no_induk = c.no_induk WHERE b.mapel = '$key1' AND c.kelas = '$key2'")->result();

        $no=1;
        foreach ($laporan as $row){
            $pdf->Cell(25,6,$no,1,0);
            $pdf->Cell(40,6,$row->no_induk,1,0);
            $pdf->Cell(95,6,$row->siswa,1,0);
            $pdf->Cell(30,6,$row->nilai,1,1);
            $no++;
        }

        $pdf->Output();
		}
	}
}
?>