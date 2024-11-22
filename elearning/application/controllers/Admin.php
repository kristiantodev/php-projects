<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->library('pdf');
		
		if($this->session->userdata('status') != "Administrator"){
			redirect(base_url("Auth/log"));
		}else {

		$this->load->model('m_admin');
        $this->load->helper('url'); }	
	}

    public function index(){
		
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/main/dashboard');
		$this->load->view('admin/templates/footer');
	}

	

	public function User(){
		$where = array('level' => 'Administrator');
		$data['user'] = $this->m_admin->edit($where,'user')->result();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/main/user',$data);
		$this->load->view('admin/templates/footer');
	}

	function Add_User(){
		$username = htmlspecialchars($this->input->post('username'));
		$password = htmlspecialchars($this->input->post('password'));
		$nama = htmlspecialchars($this->input->post('nama'));
		$level = htmlspecialchars($this->input->post('level'));
		// $imagecam = htmlspecialchars($this->input->post('imagecam'));
		// $imagecam = str_replace('data:image/jpeg;base64,','',$imagecam);
		// $imagecam = base64_decode($imagecam, true);
		// echo $imagecam; die();
	
		$data = array(
			'username' => $username,
			'password' => $password,
			'nama' => $nama,
			'level' => $level

		);
		
		$this->m_admin->input($data,'user');
		$this->session->set_flashdata('message','ditambah');
		redirect('Admin/User');
	}

	function Update_User(){
		$id = $this->input->post('id');
		$username = htmlspecialchars($this->input->post('username'));
		$password = htmlspecialchars($this->input->post('password'));
		$nama = htmlspecialchars($this->input->post('nama'));
		$level = htmlspecialchars($this->input->post('level'));
	
		$data = array(
			'username' => $username,
			'password' => $password,
			'level' => $level,
			'nama' => $nama
		);
	
		$where = array(
			'id' => $id
		);
	
		$this->m_admin->update($where,$data,'user');
		$this->session->set_flashdata('message','diperbarui');
		redirect('Admin/User',$data);
	}

	function Delete_User($id){
		$where = array('id' => $id);
		$this->m_admin->hapus($where,'user');
		$this->session->set_flashdata('message','dihapus');
		redirect('Admin/User');
	}




	// Siswa

	public function Siswa(){
		$data['siswa'] = $this->m_admin->tampil_siswa()->result();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/main/siswa',$data);
		$this->load->view('admin/templates/footer');
	}

	function Add_Siswa(){
		$no_induk = htmlspecialchars($this->input->post('no_induk'));
		$nama = htmlspecialchars($this->input->post('nama'));
		$tgl_lahir = htmlspecialchars($this->input->post('tgl_lahir'));
		$jenkel = htmlspecialchars($this->input->post('jenkel'));
		$kelas = htmlspecialchars($this->input->post('kelas'));

		$data = array(
			'no_induk' => $no_induk,
			'nama' => $nama,
			'tgl_lahir' => $tgl_lahir,
			'jenkel' => $jenkel,
			'kelas' => $kelas

		);
		
		$this->m_admin->input($data,'siswa');
		$this->session->set_flashdata('message','ditambah');
		redirect('Admin/Siswa');
	}

	function Update_Siswa(){
		$id = $this->input->post('id');
		$no_induk = htmlspecialchars($this->input->post('no_induk'));
		$nama = htmlspecialchars($this->input->post('nama'));
		$tgl_lahir = htmlspecialchars($this->input->post('tgl_lahir'));
		$jenkel = htmlspecialchars($this->input->post('jenkel'));
		$kelas = htmlspecialchars($this->input->post('kelas'));

		$data = array(
			'no_induk' => $no_induk,
			'nama' => $nama,
			'tgl_lahir' => $tgl_lahir,
			'jenkel' => $jenkel,
			'kelas' => $kelas
		);
	
		$where = array(
			'id' => $id
		);
	
		$this->m_admin->update($where,$data,'siswa');
		$this->session->set_flashdata('message','diperbarui');
		redirect('Admin/Siswa',$data);
	}

	function Delete_Siswa($id){
		$where = array('id' => $id);
		$this->m_admin->hapus($where,'siswa');
		$this->session->set_flashdata('message','dihapus');
		redirect('Admin/Siswa');
	}



	// Guru

	public function Guru(){
		$where = array('level' => 'Guru');
		$data['user'] = $this->m_admin->edit($where,'user')->result();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/main/user',$data);
		$this->load->view('admin/templates/footer');
	}

	public function Jawaban(){
		$data['quiz'] = $this->m_admin->tampil_quiz()->result();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/main/jawaban',$data);
		$this->load->view('admin/templates/footer');
	}

	function Jawaban_Quiz($kode_quiz){
		$where = array('kode_quiz' => $kode_quiz);
		$data['jawaban'] = $this->m_admin->edit($where,'jawaban')->result();
		
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/main/jawaban_quiz',$data);
		$this->load->view('admin/templates/footer');
	}


	// Mapel

	public function Mapel(){
		$data['mapel'] = $this->m_admin->tampil_mapel()->result();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/main/mapel',$data);
		$this->load->view('admin/templates/footer');
	}

	function Add_Mapel(){
		$kode_mapel = htmlspecialchars($this->input->post('kode_mapel'));
		$mapel = htmlspecialchars($this->input->post('mapel'));
		$status = htmlspecialchars($this->input->post('status'));

		$data = array(
			'kode_mapel' => $kode_mapel,
			'mapel' => $mapel,
			'status' => $status
		);
		
		$this->m_admin->input($data,'mapel');
		$this->session->set_flashdata('message','ditambah');
		redirect('Admin/Mapel');
	}

	function Update_Mapel(){
		$id = $this->input->post('id');
		$kode_mapel = htmlspecialchars($this->input->post('kode_mapel'));
		$mapel = htmlspecialchars($this->input->post('mapel'));
		$status = htmlspecialchars($this->input->post('status'));

		$data = array(
			'kode_mapel' => $kode_mapel,
			'mapel' => $mapel,
			'status' => $status
		);
	
		$where = array(
			'id' => $id
		);
	
		$this->m_admin->update($where,$data,'mapel');
		$this->session->set_flashdata('message','diperbarui');
		redirect('Admin/Mapel',$data);
	}

	function Delete_Mapel($id){
		$where = array('id' => $id);
		$this->m_admin->hapus($where,'mapel');
		$this->session->set_flashdata('message','dihapus');
		redirect('Admin/Mapel');
	}



	// Materi

	public function Materi(){
		$data['materi'] = $this->m_admin->tampil_materi()->result();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/main/materi',$data);
		$this->load->view('admin/templates/footer');
	}

	function Add_Materi(){
		$kode_materi = htmlspecialchars($this->input->post('kode_materi'));
		$judul = htmlspecialchars($this->input->post('judul'));
		$mapel = htmlspecialchars($this->input->post('mapel'));
		$kelas = htmlspecialchars($this->input->post('kelas'));
		$isi = htmlspecialchars($this->input->post('isi'));
		$guru = htmlspecialchars($this->input->post('guru'));

		$data = array(
			'kode_materi' => $kode_materi,
			'judul' => $judul,
			'mapel' => $mapel,
			'kelas' => $kelas,
			'isi' => $isi,
			'guru' => $guru
		);
		
		$this->m_admin->input($data,'materi');
		$this->session->set_flashdata('message','ditambah');
		redirect('Admin/Materi');
	}

	function Update_Materi(){
		$id = $this->input->post('id');
		$kode_materi = htmlspecialchars($this->input->post('kode_materi'));
		$judul = htmlspecialchars($this->input->post('judul'));
		$mapel = htmlspecialchars($this->input->post('mapel'));
		$kelas = htmlspecialchars($this->input->post('kelas'));
		$isi = htmlspecialchars($this->input->post('isi'));
		$guru = htmlspecialchars($this->input->post('guru'));

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
		redirect('Admin/Materi',$data);

	}

	function Delete_Materi($id){
		$where = array('id' => $id);
		$this->m_admin->hapus($where,'materi');
		$this->session->set_flashdata('message','dihapus');
		redirect('Admin/Materi');
	}


	// Quiz

	public function Quiz(){
		$data['quiz'] = $this->m_admin->tampil_quiz()->result();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/main/quiz',$data);
		$this->load->view('admin/templates/footer');
	}

	function Add_Quiz(){
		$kode_quiz = htmlspecialchars($this->input->post('kode_quiz'));
		$kode_materi = htmlspecialchars($this->input->post('kode_materi'));
		$soal = htmlspecialchars($this->input->post('soal'));

		$data = array(
			'kode_quiz' => $kode_quiz,
			'kode_materi' => $kode_materi,
			'soal' => $soal
		);
		
		$this->m_admin->input($data,'quiz');
		$this->session->set_flashdata('message','ditambah');
		redirect('Admin/Quiz');
	}

	function Update_Quiz(){
		$id = $this->input->post('id');
		$kode_quiz = htmlspecialchars($this->input->post('kode_quiz'));
		$kode_materi = htmlspecialchars($this->input->post('kode_materi'));
		$soal = htmlspecialchars($this->input->post('soal'));

		$data = array(
			'kode_quiz' => $kode_quiz,
			'kode_materi' => $kode_materi,
			'soal' => $soal
		);
	
		$where = array(
			'id' => $id
		);
	
		$this->m_admin->update($where,$data,'quiz');
		$this->session->set_flashdata('message','diperbarui');
		redirect('Admin/Quiz',$data);
	}

	function Delete_Quiz($id){
		$where = array('id' => $id);
		$this->m_admin->hapus($where,'quiz');
		$this->session->set_flashdata('message','dihapus');
		redirect('Admin/Quiz');
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