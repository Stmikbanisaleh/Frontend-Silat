<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agenda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Agenda_model', 'm_agenda');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('msuser', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->library('pagination');

        $config['base_url'] = 'http://localhost/pusispan/agenda/index';
        //$config['base_url'] = 'http://pusispan.stmik-banisaleh.com/pusispan/agenda/index';
        $config['total_rows'] = $this->m_agenda->hitungJumlahagenda();
        $config['per_page'] = 4;

        $config['full_tag_open'] = '<nav><ul class="pagination ">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="active"><a class="" href="#" >';
        $config['cur_tag_close'] = '</li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['agenda'] = $this->m_agenda->getAgenda($config['per_page'], $data['start']);


        $data['link'] = $this->db->get('link_terkait')->result_array();
        $data['akses'] = $this->db->get('akses_cepat')->result_array();
        $data['uri'] = $this->uri->segment(1);
        $data['menu'] = $this->db->get_where('menu', array('id_parent' => '', 'id_posisi' => 1))->result_array();
        $data['submenu'] = $this->db->get('menu')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('agenda/index');
        $this->load->view('template/footer');
    }
}
