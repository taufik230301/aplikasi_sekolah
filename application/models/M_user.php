<?php

class M_user extends CI_Model
{

    public function cek_login($username)
    {

        $hasil = $this->db->query("SELECT * FROM user
        JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail
        WHERE username='$username'");
        return $hasil;

    }

    public function register_user($id_user, $username, $email, $pass, $id_user_level,
        $id_status_verifikasi, $id_status_lulus) {
        $this->db->trans_start();

        $this->db->query("INSERT INTO user(id_user, username, email, password, id_user_level, id_user_detail)
    VALUES ('$id_user','$username', '$email', '$pass', '$id_user_level', '$id_user')");
        $this->db->query("INSERT INTO user_detail(id_user_detail, id_status_verifikasi, id_status_lulus)
    VALUES ('$id_user', '$id_status_verifikasi', '$id_status_lulus')");

        $this->db->trans_complete();
        if ($this->db->trans_status() == true) {
            return true;
        } else {
            return false;
        }

    }

}
