<?php
class Users extends CI_Controller
{

  public function __construct()
    {
        parent::__construct();

        if (!isAuthenticated()) {
            redirect(site_url('auth'));
        }
    }
    public function index()
    {
      provideAccessTo("1");
      $data['title'] = 'Users | Padi Kapas';
      $data['group'] = $this->db->get('groups');
      $data['users'] = $this->User->getAllUser();
      $this->main_lib->getTemplate('admin/users/users',$data);
    }
    public function add()
    {
      provideAccessTo("1");
      $data = [
        'title' => 'Add User | Padi Kapas'
      ];
      if (isset($_POST['submit'])) {
        $rules = $this->_rules();
        $this->form_validation->set_rules($rules);
        $this->form_validation->set_error_delimiters("<small class='form-text text-danger'>", "</small>");
        if ($this->form_validation->run() === FALSE) {
          $this->session->set_flashdata('message',"Data harus diisi secara lengkap");
            redirect('adm/alumni');
        }else{

          $idku = uniqid();
          
            $config['upload_path']          = './uploads/avatar/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['file_name']            = $idku;
            $config['overwrite']            = true;
            $config['max_size']             = 2024;

            $this->load->library('upload', $config);

            $upload_image = $_FILES['foto']['name'];
            $foto = "default.jpg";

            if($upload_image){

              if ($this->upload->do_upload('foto')) {

                $foto = $this->upload->data('file_name');

                  }else{

                $foto = 'default.jpg';
          
                  }

              }else{
                $foto = 'default.jpg';
                
              }

          $userdata = [
            'nickname' => $this->main_lib->getPost('nickname'),
            'email' => $this->main_lib->getPost('email'),
            'username' => $this->main_lib->getPost('username'),
            'password' => password_hash($this->main_lib->getPost('password'), PASSWORD_DEFAULT),
            'user_groups_id' => $this->main_lib->getPost('privilege'),
            'is_deleted' => '1',
            'login_count' => 0,
            'foto' => $foto
          ];
          
          $insert = $this->User->insert($userdata);
          if($insert){
            $message = [
              'type' => 'success',
              'text' => 'Data User Berhasil Ditambahkan!'
            ];
          }else{
            $message = [
              'type' => 'error',
              'text' => 'Gagal menambahkan data baru!'
            ];
          }
          $this->session->set_flashdata('message', $message);
          redirect(site_url('admin/users'));
        }
      }else{
        $this->main_lib->getTemplate('admin/users',$data);
      }
    }
    public function edit($id_users)
    {
      $data = [
        'title' => 'Edit User | Padi Kapas',
        'group' => $this->db->get('groups'),
        'user' => $this->User->findById(['id_users'=>$id_users]),
      ];
      if (isset($_POST['submit'])) {
        $rules = $this->_rules_update();
        $this->form_validation->set_rules($rules);
        $this->form_validation->set_error_delimiters("<small class='form-text text-danger'>", "</small>");
        if ($this->form_validation->run() === FALSE) {
          $this->main_lib->getTemplate('admin/users/edit',$data);
        }else{
          $userdata = [
            'nickname' => $this->main_lib->getPost('nickname'),
            'email' => $this->main_lib->getPost('email'),
            'user_groups_id' => $this->main_lib->getPost('privilege')
          ];
          $updated = $this->User->update($userdata, ['id_users'=>$this->main_lib->getPost('id_users')]);
          if($updated){
            $message = [
              'type' => 'success',
              'text' => 'Data User Berhasil Diubah!'
            ];
          }else{
            $message = [
              'type' => 'error',
              'text' => 'Gagal memperbaharui data!'
            ];
          }
          $this->session->set_flashdata('message', $message);
          redirect(site_url('admin/users/edit/'.$this->main_lib->getPost('id_users')));
        }
      }else{
        $this->main_lib->getTemplate('admin/users/edit',$data);
      }
    }
    public function delete($id_users)
    {
      if ($this->uri->segment(2) === 'users') {
                $delete = $this->User->delete(['id_users' => $id_users]);
                redirect(site_url('admin/users'), 'refresh');
            }
    }
    public function _rules()
    {
      return [
        [
          'field' => 'nickname',
          'label' => 'Nickname',
          'rules' => 'required'
        ],
        [
          'field' => 'username',
          'label' => 'Username',
          'rules' => 'required'
        ],
        [
          'field' => 'email',
          'label' => 'Email',
          'rules' => 'required'
        ],
        [
          'field' => 'password',
          'label' => 'Password',
          'rules' => 'required'
        ],
      ];
    }
    public function _rules_update()
    {
      return [
        [
          'field' => 'nickname',
          'label' => 'Nickname',
          'rules' => 'required'
        ],
        [
          'field' => 'email',
          'label' => 'Email',
          'rules' => 'required'
        ],
      ];
    }
}


?>
