<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita_model extends CI_Model
{
    public function getBerita($limit, $start)
    {
        $this->db->order_by('id_berita', 'DESC');
        return $this->db->get('berita', $limit, $start)->result_array();
    }

    public function getBeritaList($limit)
    {
        $this->db->order_by('id_berita', 'DESC');
        return $this->db->get('berita', $limit)->result_array();
    }

    public function getBeritaDetail($seo)
    {
        $query = "SELECT * FROM berita WHERE judul_seo = '$seo'";
        return $this->db->query($query)->result_array();
    }

    public function hitungJumlahBerita()
    {
        return $this->db->get('berita')->num_rows();
    }
}
