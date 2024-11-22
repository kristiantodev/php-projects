<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Main_lib {
    protected $ci;

    public function __construct()
    {
    	$this->ci =& get_instance();
    }

    public function  isLogin()
	{
		if ($this->ci->session->is_logged_in === TRUE) {
			return true;
		} else {
			return false;
		}
	}

	public function getPost($key)
	{
        return $this->ci->input->post($key, true);
	}

	public function getParam($key)
	{
        return $this->ci->input->get($key, true);
	}

	public function createFirstUser()
	{
		$check_in_users_table = $this->ci->db->query("SELECT * FROM tbl_users")->num_rows();

		if($check_in_users_table == 0) {
			$data_users = [
				'nickname'	=> 'Kidew',
				'username'	=> 'kidew',
				'password'	=> password_hash(123456, PASSWORD_DEFAULT),
				'is_deleted'		=> '0',
			];

			return $this->ci->db->insert('tbl_users', $data_users);
		} else {
			return false;
		}
	}

	public function getTemplate($view_file, $data = [])
    {
      $this->ci->load->view('template/backend/header', $data);
      $this->ci->load->view('template/backend/pageloader');
      $this->ci->load->view('template/backend/searchbar');
      $this->ci->load->view('template/backend/topbar');
      $this->ci->load->view('template/backend/leftsidebar');
      $this->ci->load->view($view_file);
      $this->ci->load->view('template/backend/footer');
    }
    public function getFrontend($view_file, $data = [])
      {
        $this->ci->load->view('template/frontend/header', $data);
        $this->ci->load->view('template/frontend/topbar');
        $this->ci->load->view($view_file);
        $this->ci->load->view('template/frontend/footer');
      }

      public function getFrontend2($view_file, $data = [])
      {
        $this->ci->load->view('template/frontend/header', $data);
        $this->ci->load->view($view_file);
        $this->ci->load->view('template/frontend/footer');
      }

    /*
     *  If return is as array value, it means there are error while upload the image
     *  But, if return is string value, it means successfully upload image or file
     * */
    public function _doUpload($inputName, $config = [])
    {
        $fileName = "";
        if (isset($_FILES[$inputName]) && $_FILES[$inputName]['name'] !== '') {
            $this->ci->load->library('upload', $config);

            if ($this->ci->upload->do_upload($inputName)) {
                $fileName = $this->ci->upload->data("file_name");
            } else {
                $error = $this->ci->upload->display_errors();
                return [
                    'error' => $error
                ];
            }
        } else {
            $fileName = "noimage.png";
        }

        return $fileName;
    }

}
