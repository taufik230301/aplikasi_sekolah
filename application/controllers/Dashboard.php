<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function view_admin()
	{
		$this->load->view('admin/dashboard');
	}

	public function view_siswa()
	{
		$this->load->view('siswa/dashboard');
	}

}
