  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class buku_tamu extends My_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model("tamu_model");

        if($this->session->userdata('level')!="Administrator"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }

    }

    public function index()
    {
        $data["title"] = "Buku Tamu";
          $data["tamuku2"] = $this->tamu_model->get_tamu();
          $data["tamuku"] = $this->tamu_model->getAll2();
         $this->page_data('isi/buku_tamu',$data);
        
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->tamu_model->delete($id)) {
            $this->session->set_flashdata('success', 'Data Berhasil di Hapus...');
            redirect(site_url('page/admin/buku_tamu/'));
        }
    }
}
