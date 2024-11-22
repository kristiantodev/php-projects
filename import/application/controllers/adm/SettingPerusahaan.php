  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SettingPerusahaan extends My_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->library('form_validation');
        $this->load->library('session');

	}

	public function index(){

		$data=array(
            "perusahaan" => $this->db->get_where('profil_perusahaan', ['id'=> 1])->row()
        );
		$this->Paging('isi/adm/settingperusahaan', $data);

	}

	public function edit()
    {
        $this->form_validation->set_rules('fb', 'fb', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('adm/settingperusahaan');
        }else{
            $data=array(
                "fb"=>$_POST['fb'],
                "twitter"=>$_POST['twitter'],
                "instagram"=>$_POST['instagram'],
                "kontak"=>$_POST['kontak'],
                "sejarah"=>$_POST['sejarah']
            );
            $this->db->where('id', 1);
            $this->db->update('profil_perusahaan',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Diedit");
            redirect('adm/settingperusahaan');
        }
    }
	
}
