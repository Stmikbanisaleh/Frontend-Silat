<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agenda_model extends CI_Model
{
    public function getAgenda($limit, $start)
    {
        $this->db->order_by('id_agenda', 'DESC');
        return $this->db->get('agenda', $limit, $start)->result_array();
    }

    public function getAgendaList($limit)
    {
        $this->db->order_by('id_agenda', 'DESC');
        return $this->db->get('agenda', $limit)->result_array();
    }

    public function getAgendaDetail($id)
    {
        $query = "SELECT * FROM agenda WHERE id = '$id'";
        return $this->db->query($query)->result_array();
    }

    public function hitungJumlahAgenda()
    {
        return $this->db->get('agenda')->num_rows();
    }
}
