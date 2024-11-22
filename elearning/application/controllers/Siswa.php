<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper(array('url','download'));
		$this->load->library('pdf');
		
		if($this->session->userdata('status') != "Siswa"){
			redirect(base_url("Auth"));
		}else {

		$this->load->model('m_admin');
                $this->load->helper('url'); }	
	}

    public function index()
	{
		
		$this->load->view('siswa/templates/header');
		$this->load->view('siswa/templates/sidebar');
		$this->load->view('siswa/main/dashboard');
		$this->load->view('siswa/templates/footer');
	}

	public function Materi(){

		$no_induk = $this->session->userdata('nama');
	    $nama = $this->db->query("SELECT * FROM siswa WHERE no_induk = '$no_induk' ");
	      foreach ($nama->result_array() as $nm) {
	          $namalengkap = $nm['nama'];
	          $kelas = $nm['kelas'];   
	     	}

        $where = array('kelas' => $kelas);
		$data['materi'] = $this->m_admin->edit($where,'materi')->result();
		$this->load->view('Siswa/templates/header');
		$this->load->view('Siswa/templates/sidebar');
		$this->load->view('Siswa/main/materi',$data);
		$this->load->view('Siswa/templates/footer');
	}

	function Download($pdf){

		force_download('./vendor/upload/'.$pdf,NULL);
	}

	function DownloadNilai($kodeMP){

		$pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->Cell(190,7,'LAPORAN NILAI',0,1,'C');
        $pdf->SetFont('Arial','',12);
        // mencetak string
        $pdf->Cell(190,7,'Nama          : '.' '.$this->session->userdata('namaSiswa'),0,1,'');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(190,7,'No. Induk    : '.' '.$this->session->userdata('nama'),0,1,'');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(25,6,'KODE QUIS',1,0);
        $pdf->Cell(40,6,'KODE MATERI',1,0);
        $pdf->Cell(95,6,'SOAL',1,0);
        $pdf->Cell(30,6,'NILAI',1,1);
        $pdf->SetFont('Arial','',10);

      $this->db->select('*');
      $this->db->where('kode_materi', $kodeMP);
      $this->db->where('no_induk', $this->session->userdata('nama'));
      $this->db->from('jawaban');
      $nilai = $this->db->get()->result();

        foreach ($nilai as $row){
            $pdf->Cell(25,6,$row->kode_quiz,1,0);
            $pdf->Cell(40,6,$row->kode_materi,1,0);
            $pdf->Cell(95,6,$row->soal,1,0);
            $pdf->Cell(30,6,$row->nilai,1,1);
        }

        $pdf->Output();
	}

	function Kerjakan_Quiz($kode_materi){
		$where = array('kode_materi' => $kode_materi);
		$data['quiz'] = $this->m_admin->edit($where,'quiz')->result();
		
		$this->load->view('siswa/templates/header');
		$this->load->view('siswa/templates/sidebar');
		$this->load->view('siswa/main/quiz',$data);
		$this->load->view('siswa/templates/footer');
	}

	function Isi_Quiz(){
		$kode_quiz = htmlspecialchars($this->input->post('kode_quiz'));
		$kode_materi = htmlspecialchars($this->input->post('kode_materi'));
		$soal = htmlspecialchars($this->input->post('soal'));
		$jawaban = htmlspecialchars($this->input->post('jawaban'));
		$siswa = htmlspecialchars($this->input->post('siswa'));
		$no_induk = htmlspecialchars($this->input->post('no_induk'));

		$data = array(
			'kode_quiz' => $kode_quiz,
			'kode_materi' => $kode_materi,
			'soal' => $soal,
			'jawaban' => $jawaban,
			'siswa' => $siswa,
			'soal' => $soal,
			'no_induk' => $no_induk
		);
	
		$this->m_admin->input($data,'jawaban');
		$this->session->set_flashdata('message','ditambah');
		redirect('Siswa/Kerjakan_Quiz/'.$kode_materi);

	}

	function Jawaban($no_induk){
		$where = array('no_induk' => $no_induk);
		$data['jawaban'] = $this->m_admin->edit($where,'jawaban')->result();
		
		$this->load->view('siswa/templates/header');
		$this->load->view('siswa/templates/sidebar');
		$this->load->view('siswa/main/jawaban',$data);
		$this->load->view('siswa/templates/footer');
	}


}
?>