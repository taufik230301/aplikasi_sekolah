<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Siswa extends CI_Controller {

	public function view_admin()
	{
		$this->load->view('admin/siswa');
	}

	public function view_admin_terverifikasi()
	{
		$this->load->view('admin/siswa_terverifikasi');
	}

	public function view_admin_lulus_berkas()
	{
		$this->load->view('admin/siswa_lulus_berkas');
	}

	public function view_admin_lulus_seleksi()
	{
		$this->load->view('admin/siswa_lulus_seleksi');
	}


}
