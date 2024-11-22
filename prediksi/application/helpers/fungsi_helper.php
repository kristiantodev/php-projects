<?php

function is_logged_in()
{
	 $ci = get_instance(); //fungsi untuk memanggil library CI dalam fungsi ini.
	 if (!$ci->session->userdata('username')) { //sebelum login
	 	redirect('login');
	 }
}