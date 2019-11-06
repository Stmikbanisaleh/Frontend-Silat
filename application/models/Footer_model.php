<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Footer_model extends CI_Model
{
    public function getAkses()
    {
        return $this->db->get('akses_cepat')->result_array();
    }

    public function getLink()
    {
        return $this->db->get('link_terkait')->result_array();
    }
}
