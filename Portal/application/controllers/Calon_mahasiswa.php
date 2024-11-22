  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calon_Mahasiswa extends My_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/kos_model", "M_kos");
        $this->load->model("admin/angkot_model", "M_kot");
        $this->load->model("admin/matkul_model", "My_matkul");
    }
	public function kos()
	{
		 $data["title"] = "Informasi Kos - Program Studi Teknik Informatika - STMIK CIC";
		 $data["kosku"] = $this->M_kos->getAll();
		 $this->page_umum('isi/umum/kos',$data);	
	}

	public function angkot()
	{
		 $data["title"] = "Informasi Angkutan Umum Depan Kampus STMIK CIC";
		 $data["angkotku"] = $this->M_kot->getAll();
		 $this->page_umum('isi/umum/angkot',$data);	
	}

	public function matkul()
	{
		 $data["title"] = "Daftar Mata Kuliah";
		 $data["matkulku"] = $this->My_matkul->getMatkul();
		 $this->page_umum('isi/umum/matkul',$data);	
	}

	public function index()
	{
		 redirect(site_url('calon_mahasiswa/kos'));	
	}
	
}
