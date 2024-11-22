  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends My_Controller {

	public function index()
	{
		 $this->page_umum('isi/umum/isi');
	}

	public function lokasi()
	{
		 $data["title"] = "Lokasi Universitas CIC";
		 $this->page_umum('isi/umum/lokasi', $data);
	}

	public function sambutan_rektor()
	{
		 $data["title"] = "Kata Sambutan Rektor - Universitas CIC";
		 $this->page_umum('isi/umum/sambutan', $data);
	}

	public function visimisi()
	{
		 $data["title"] = "Visi Misi & Tujuan - Universitas CIC";
		 $this->page_umum('isi/umum/visi_misi', $data);
	}

	
}
