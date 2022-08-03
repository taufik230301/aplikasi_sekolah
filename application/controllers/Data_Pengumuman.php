<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Pengumuman extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pengumuman');
    }

    public function view_admin()
    {
		$data['pengumuman'] = $this->m_pengumuman->read_all_pengumuman()->result_array();
        $this->load->view('admin/pengumuman', $data);
    }

    public function tambah_pengumuman()
    {

        $judul_pengumuman = $this->input->post('judul_pengumuman');
        $isi_pengumuman = $this->input->post('isi_pengumuman');
        $created_at = $this->input->post('created_at');
        $penulis_pengumuman = $this->input->post('penulis_pengumuman');
        $foto_name = md5($judul_pengumuman . $isi_pengumuman . $created_at . rand(1, 9999));

        $path = './assets/gambar/';

        $this->load->library('upload');
        $config['upload_path'] = './assets/gambar';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '2048'; //2MB max
        $config['max_width'] = '4480'; // pixel
        $config['max_height'] = '4480'; // pixel
        $config['file_name'] = $foto_name;
        $this->upload->initialize($config);
        $foto_pengumuman_upload = $this->upload->do_upload('foto_pengumuman');

        if ($foto_pengumuman_upload) {
            $foto_pengumuman = $this->upload->data();
        } else {
            $this->session->set_flashdata('error_file_gambar_berita',
                'error_file_gambar_berita');
            redirect('Data_Pengumuman/view_admin');
        }

        $hasil = $this->m_pengumuman->insert_pengumuman($judul_pengumuman, $isi_pengumuman,
            $foto_pengumuman['file_name'], $created_at, $penulis_pengumuman);

        if ($hasil == false) {
            $this->session->set_flashdata('eror_input', 'eror_input');
            redirect('Data_Pengumuman/view_admin');

        } else {

            $this->session->set_flashdata('input', 'input');
            redirect('Data_Pengumuman/view_admin');

        }

    }

    public function edit_pengumuman()
    {
        $id_pengumuman = $this->input->post('id_pengumuman');
        $judul_pengumuman = $this->input->post('judul_pengumuman');
        $isi_pengumuman = $this->input->post('isi_pengumuman');
        $created_at = $this->input->post('created_at');
        $penulis_pengumuman = $this->input->post('penulis_pengumuman');
        $foto_name = md5($judul_pengumuman . $isi_pengumuman . $created_at . rand(1, 9999));

      

        $path = './assets/gambar/';

        $this->load->library('upload');
        $config['upload_path'] = './assets/gambar';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '2048'; //2MB max
        $config['max_width'] = '4480'; // pixel
        $config['max_height'] = '4480'; // pixel
        $config['file_name'] = $foto_name;
        $this->upload->initialize($config);
        $foto_pengumuman_upload = $this->upload->do_upload('foto_pengumuman');

        if ($foto_pengumuman_upload) {
            $foto_pengumuman = $this->upload->data();
        } else {
            $this->session->set_flashdata('error_file_gambar_berita',
                'error_file_gambar_berita');
            redirect('Data_Pengumuman/view_admin');
        }

        $hasil = $this->m_pengumuman->update_pengumuman($judul_pengumuman, $isi_pengumuman,
            $foto_pengumuman['file_name'], $created_at, $penulis_pengumuman, $id_pengumuman);

        if ($hasil == false) {

            $this->session->set_flashdata('eror_update', 'eror_update');
            redirect('Data_Pengumuman/view_admin');

        } else {
            @unlink($path.$this->input->post('foto_pengumuman_old'));
            $this->session->set_flashdata('update', 'update');
            redirect('Data_Pengumuman/view_admin');

        }   

    }

    public function hapus_pengumuman()
    {
        $id_pengumuman = $this->input->post('id_pengumuman');

      

        $path = './assets/gambar/';


        $hasil = $this->m_pengumuman->delete_pengumuman($id_pengumuman);

        if ($hasil == false) {

            $this->session->set_flashdata('eror_delete', 'eror_delete');
            redirect('Data_Pengumuman/view_admin');

        } else {
            @unlink($path.$this->input->post('foto_pengumuman_old'));
            $this->session->set_flashdata('delete', 'delete');
            redirect('Data_Pengumuman/view_admin');

        }   

    }


}
