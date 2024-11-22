  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends  My_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->library('user_agent');
		$this->load->model('statistik_model');

	}

	public function index2()
	{
		 $this->page_umum('isi/umum/isi');
	}

	public function agenda()
	{
		 $this->load->model("admin/agenda_model", "M_agenda");
		 $data["agendaku"] = $this->M_agenda->getA();
		 $data["title"] = "Agenda Kegiatan - Universitas Catur Insan Cendekia Cirebon";
		 $this->page_umum('isi/umum/agenda', $data);
	}

	public function index()
	{

		 if ($this->agent->is_browser()){
			$agent = $this->agent->browser().' '.$this->agent->version();
		}elseif ($this->agent->is_mobile()){
			$agent = $this->agent->mobile();
		}else{
			$agent = 'Data user gagal di dapatkan';
		}

		$ip = $this->input->ip_address();
		$tgl_kunjungan = date('y-m-d');
		$id_user = "Admin";

		$cek = $this->statistik_model->chekk($ip,$tgl_kunjungan,$id_user);

		if($cek){

		}else{

		$this->statistik_model->simpan_post($ip,$tgl_kunjungan,$id_user);

		}


		 $this->load->model("admin/slider_model", "M_slider");
		 $this->load->model("admin/artikel_model", "M_artikel");
		 $this->load->model("admin/kegiatan_model", "M_kegiatan");
		 $this->load->model("admin/pengumuman_model", "M_pengumuman");
		 $this->load->model("admin/peristiwa_model", "M_peristiwa");
		 $this->load->model("admin/agenda_model", "M_agenda");
		 $this->load->model("admin/prestasi_model", "M_prestasi");
		 $data["sliderku"] = $this->M_slider->getAll();
		 $data["artikelku"] = $this->M_artikel->terbaru2();
		 $data["artikelku2"] = $this->M_artikel->terbaru3();
		 $data["kegiatanku"] = $this->M_kegiatan->terbaru();
		 $data["kegiatanku3"] = $this->M_kegiatan->terbaru3();
		 $data["pengumumanku"] = $this->M_pengumuman->terbaru();
		 $data["peristiwaku"] = $this->M_peristiwa->terbaru();
		 $data["agendaku"] = $this->M_agenda->getAll();
		 $data["prestasiku"] = $this->M_prestasi->getAll();
		 $data["title"] = "Portal - Universitas Catur Insan Cendekia Cirebon";
		 $this->page_umum('isi/umum/home', $data);
	}
	
}
