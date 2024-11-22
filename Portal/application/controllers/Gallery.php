  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends My_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/gallery_model", "M_gallery");

    }
	public function index()
	{
		 $data["title"] = "Galeri Foto Program Studi Teknik Informatika - Universitas CIC";
		 $data["galleryku"] = $this->M_gallery->terbaru();
		 $this->page_umum('isi/umum/gallery2',$data);
		
	}
	
}
