<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Home_model extends CI_Model
{

    public function getListBerita()
    {
        $query = "SELECT * FROM berita ORDER BY id_berita DESC LIMIT 6";
        return $this->db->query($query)->result_array();
    }

    public function getListAgenda()
    {
        $query = "SELECT * FROM agenda ORDER BY id_agenda DESC LIMIT 3";
        return $this->db->query($query)->result_array();
    }

    public function getKegiatanSispan()
    {
        $query = "SELECT * FROM kegiatan WHERE id_posisi = 4 ORDER BY id_kegiatan DESC LIMIT 1";
        return $this->db->query($query)->row_array();
    }
}
