  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends My_Controller {
public function __construct()
    {
        parent::__construct();
 
        $this->load->library('form_validation');
        $this->load->library('session');

        if($this->session->userdata('level')!="Administrator"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }

    }
    
	public function index()
	{
       
        $data['title'] = 'Ganti Foto Profil';
        $data['banner'] = $this->db->get_where('tentang_kami', ['id_profil' => 1 ])->row();
        $this->form_validation->set_rules('id_profil', 'id_profil', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->page_form('isi/admin/background/banner',$data);
        }else{
            $id = $this->input->post('id_profil');
            
            $upload_image = $_FILES['icon']['name'];

            if($upload_image){

            $confiq['allowed_types'] = 'gif|jpg|png';
            $confiq['max_size'] = '2048';
            $confiq['upload_path'] = './assets/images/';

            $this->load->library('upload', $confiq);

            if ($this->upload->do_upload('icon')) {
                
                $new_image = $this->upload->data('file_name'); 
                $this->db->set('icon', $new_image);
                $this->db->where('id_profil', $id);
                $this->db->update('tentang_kami');

            $this->session->set_flashdata('success', 'Banner Berhasil diubah...');
            redirect(site_url('page/admin/banner/'));

              }else{
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('gagal', $error);
                redirect(site_url('page/admin/banner/'));
              }  

            }

          redirect(site_url('page/admin/banner/'));  
        }
        
		
	}

   
	
}
