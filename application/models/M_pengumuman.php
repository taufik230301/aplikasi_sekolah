<?php

class M_pengumuman extends CI_Model
{

    public function read_all_pengumuman()
    {
        
        $hasil=$this->db->query("SELECT * FROM pengumuman");
        return $hasil;
        
    }

    public function insert_pengumuman($judul_pengumuman, $isi_pengumuman,
        $foto_pengumuman, $created_at, $penulis_pengumuman) {
        $this->db->trans_start();

        $this->db->query("INSERT INTO pengumuman(judul_pengumuman, isi_pengumuman, foto_pengumuman, created_at,
       penulis_pengumuman) VALUES ('$judul_pengumuman','$isi_pengumuman','$foto_pengumuman','$created_at',
       '$penulis_pengumuman')");

        $this->db->trans_complete();
        if ($this->db->trans_status() == true) {
            return true;
        } else {
            return false;
        }

    }

    public function update_pengumuman($judul_pengumuman, $isi_pengumuman,
    $foto_pengumuman, $created_at, $penulis_pengumuman, $id_pengumuman) 
    {
    $this->db->trans_start();

    $this->db->query("UPDATE pengumuman SET judul_pengumuman='$judul_pengumuman', 
    isi_pengumuman='$isi_pengumuman', foto_pengumuman='$foto_pengumuman', 
    created_at='$created_at', penulis_pengumuman='$penulis_pengumuman' 
    WHERE id_pengumuman='$id_pengumuman'");

    $this->db->trans_complete();
    if ($this->db->trans_status() == true) {
        return true;
    } else {
        return false;
    }

}

public function delete_pengumuman($id_pengumuman) 
    {
    $this->db->trans_start();

    $this->db->query("DELETE FROM pengumuman WHERE id_pengumuman='$id_pengumuman'");

    $this->db->trans_complete();
    if ($this->db->trans_status() == true) {
        return true;
    } else {
        return false;
    }
}



}
