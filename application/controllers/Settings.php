<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

	public function view_admin()
	{
		$this->load->view('admin/settings');
	}


}
