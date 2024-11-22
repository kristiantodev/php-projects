  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fakultas extends My_Controller {


	public function prodi_ti()
	{
		 $data["title"] = "Program Studi Teknik Informatika - Universitas CIC";
		 $this->page_umum('isi/umum/ti/sambutan', $data);
	}
	
	public function visimisiti()
	{
		 $data["title"] = "Visi, Misi & Tujuan Program Studi Teknik Informatika - Universitas CIC";
		 $this->page_umum('isi/umum/ti/visi_misi', $data);
	}
	
	public function kompetensiti()
	{
		 $data["title"] = "Kompetensi Program Studi Teknik Informatika - Universitas CIC";
		 $this->page_umum('isi/umum/ti/kompetensi', $data);
	}
	
	public function prodi_si()
	{
		 $data["title"] = "Program Studi Sistem Informasi - Universitas CIC";
		 $this->page_umum('isi/umum/si/sambutan', $data);
	}
	
	public function visimisisi()
	{
		 $data["title"] = "Visi, Misi & Tujuan Program Studi Sistem Informasi - Universitas CIC";
		 $this->page_umum('isi/umum/si/visi_misi', $data);
	}
	
	public function kompetensisi()
	{
		 $data["title"] = "Kompetensi Program Studi Sistem Informasi - Universitas CIC";
		 $this->page_umum('isi/umum/si/kompetensi', $data);
	}
	
	public function prodi_dkv()
	{
		 $data["title"] = "Program Studi Desain Komunikasi Visual - Universitas CIC";
		 $this->page_umum('isi/umum/dkv/sambutan', $data);
	}
	
	public function visimisidkv()
	{
		 $data["title"] = "Visi, Misi & Tujuan Program Studi Desain Komunikasi Visual - Universitas CIC";
		 $this->page_umum('isi/umum/dkv/visi_misi', $data);
	}
	
	public function kompetensidkv()
	{
		 $data["title"] = "Kompetensi Program Studi Desain Komunikasi Visual - Universitas CIC";
		 $this->page_umum('isi/umum/dkv/kompetensi', $data);
	}
	
	public function prodi_mi()
	{
		 $data["title"] = "Program Studi Manajemen Informatika - Universitas CIC";
		 $this->page_umum('isi/umum/mi/sambutan', $data);
	}
	
	public function visimisimi()
	{
		 $data["title"] = "Visi, Misi & Tujuan Program Studi Manajemen Informatika - Universitas CIC";
		 $this->page_umum('isi/umum/mi/visi_misi', $data);
	}
	
	public function kompetensimi()
	{
		 $data["title"] = "Kompetensi Program Studi Manajemen Informatika - Universitas CIC";
		 $this->page_umum('isi/umum/mi/kompetensi', $data);
	}
	
	public function prodi_ka()
	{
		 $data["title"] = "Program Studi Komputerisasi Akutansi - Universitas CIC";
		 $this->page_umum('isi/umum/ka/sambutan', $data);
	}
	
	public function visimisika()
	{
		 $data["title"] = "Visi, Misi & Tujuan Program Studi Komputerisasi Akutansi - Universitas CIC";
		 $this->page_umum('isi/umum/ka/visi_misi', $data);
	}
	
	public function kompetensika()
	{
		 $data["title"] = "Kompetensi Program Studi Komputerisasi Akutansi - Universitas CIC";
		 $this->page_umum('isi/umum/ka/kompetensi', $data);
	}
	
	
}
