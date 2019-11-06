<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model', 'm_home');
        $this->load->model('Menu_model', 'm_menu');
        $this->load->model('Footer_model', 'm_footer');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('msuser', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['berita'] = $this->m_home->getListBerita();
        $data['agenda'] = $this->m_home->getListAgenda();
        $data['ksispan'] = $this->m_home->getKegiatanSispan();

        $data['menu'] = $this->m_menu->getMenu();
        $data['submenu'] = $this->m_menu->getSubMenu();

        $data['link'] = $this->m_footer->getLink();
        $data['akses'] = $this->m_footer->getAkses();

        $data['uri'] = $this->uri->segment(1);

        $this->load->view('template/header', $data);
        $this->load->view('home', $data);
        $this->load->view('template/footer', $data);
    }
}
