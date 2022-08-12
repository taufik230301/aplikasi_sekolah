<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function proses_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // echo var_dump($username);
        // echo var_dump($password);
        // die();

        $user = $this->m_user->cek_login($username);

        $get_user = $user->num_rows();

        if ($get_user > 0) {

            $user = $user->row_array();

            if ($user['password'] == $password) {

                echo 'Berhasil login';

            } else {

                $this->session->set_flashdata('loggin_err_no_password', 'Password Atau Username Yang Anda Masukan Salah !');
                redirect('Login/index');

            }

        } else {

            $this->session->set_flashdata('loggin_err_no_user', 'Anda Belum Terdaftar, Silahkan Register !');
            redirect('Login/index');

        }

    }

}
