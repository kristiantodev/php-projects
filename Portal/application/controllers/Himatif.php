  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Himatif extends My_Controller {

	public function index()
	{
		 $data["title"] = "Himpunan Mahasiswa Teknik Informatika - Program Studi Teknik Informatika - Universitas CIC";
		 $this->load->model("admin/himatif_model", "Himatifku");
		 $himatif = $this->Himatifku;
		 $id = "himatif";
		 $data["himatif"] = $himatif->getById($id);
         if (!$data["himatif"]) show_404();

		 $this->page_umum('isi/umum/himatif', $data);
	}
	
}
