<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends User_model {

	protected $table = "tbl_users";

	public function login($credentials)
	{
		$sql = $this->db->get_where($this->table, [
			'username' => $credentials['username']
		]);
		$check = $sql->num_rows();

		if($check > 0) {
			$data = $sql->row();
			$validate = password_verify($credentials['password'], $data->password);

			if($validate === TRUE) {
				$this->session->set_userdata("user", $data);
				$this->session->set_userdata("is_logged_in", TRUE);
        $this->db->where('id_users', $data->id_users);
        $this->db->update($this->table, ['last_login' => date('Y-m-d H:i:s'), 'login_count' => $data->login_count+1]);
				return true;
			} else {
				return false;
			}
		} else {
		    return false;
        }
	}

	public function register($data)
	{
		$register = $this->db->insert($this->table, $data);
		return ($register) ? TRUE : FALSE;
	}


}

/* End of file Auth_model.txt */
/* Location: ./application/models/Auth_model.txt */
