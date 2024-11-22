<?php
/**
 *
 */
class Company extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    if (!isAuthenticated()) {
        redirect(site_url('auth'));
    }
  }
  public function index()
  {
    provideAccessTo('1');
    $csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
    );
    $cek = $this->Company->count();
    $id = '';
    $company_name = '';
    $telp = '';
    $email = '';
    $website = '';
    $address = '';
    $logo = '';
    if($cek > 0){
      $id = $this->Company->first()->id_profile_perusahaan;
      $company_name = $this->Company->first()->nama_perusahaan;
      $telp = $this->Company->first()->telp;
      $email = $this->Company->first()->email;
      $website = $this->Company->first()->website;
      $address = $this->Company->first()->alamat;
      $logo = $this->Company->first()->logo;
    }else{
      $id = set_value('id_profile_perusahaan');
      $company_name = set_value('company_name');
      $telp = set_value('telp');
      $email = set_value('email');
      $website = set_value('website');
      $address = set_value('address');
      $logo = set_value('logo');
    }
    $data = [
      'title' => 'Company Profile | Padi Kapas',
      'id' => $id,
      'company_name' => $company_name,
      'telp' => $telp,
      'email' => $email,
      'website' => $website,
      'address' => $address,
      'logo' => $logo,
      'csrf' => $csrf
    ];
    if(isset($_POST['submit'])){
      $rules = $this->_rules();
      $this->form_validation->set_rules($rules);
      $this->form_validation->set_error_delimiters("<small class='form-text text-danger'>", "</small>");
      if ($this->form_validation->run() === FALSE) {
        $this->main_lib->getTemplate('admin/company/company',$data);
      }else{
        $data = [
          'nama_perusahaan' => $this->main_lib->getPost('company_name'),
          'logo' => $this->__upload($this->main_lib->getPost('id_profile_perusahaan'), $this->main_lib->getPost('image')),
          'telp' => $this->main_lib->getPost('telp'),
          'email' => $this->main_lib->getPost('email'),
          'website' => $this->main_lib->getPost('website'),
          'alamat' => $this->main_lib->getPost('address'),
        ];
        $update = $this->Company->update($data, ['id_profile_perusahaan'=>$this->main_lib->getPost('id_profile_perusahaan')]);
        if($update){
          $message = [
            'type' => 'success',
            'text' => 'Data Company Berhasil Diedit!'
          ];
        }else{
          $message = [
            'type' => 'error',
            'text' => 'Gagal menambahkan data baru!'
          ];
        }
        $this->session->set_flashdata('message', $message);
        redirect(site_url('admin/company'));
      }
    }
    $this->main_lib->getTemplate('admin/company/company',$data);
  }

  private function __upload($filename, $logo) {
    $config['upload_path']          = './uploads/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $filename;
    $config['overwrite']			      = true;
    $config['max_size']             = 1024;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('logo')) {
        return $this->upload->data("file_name");
    }
    return $logo;
  }
  function _rules(){
    return [
      [
        'field' => 'company_name',
        'label' => 'Company Name',
        'rules' => 'required'
      ],
      [
        'field' => 'telp',
        'label' => 'Telp',
        'rules' => 'required'
      ],
      [
        'field' => 'id_profile_perusahaan',
        'label' => 'Profile Perusahaan',
        'rules' => 'required'
      ]
    ];
  }
}

?>
