<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Berita_model', 'm_berita');
        $this->load->model('Menu_model', 'm_menu');
        $this->load->model('Footer_model', 'm_footer');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('msuser', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->library('pagination');

        $config['base_url'] = 'http://localhost/pusispan/silat/berita/index';
        //$config['base_url'] = 'http://pusispan.stmik-banisaleh.com/pusispan/silat/berita/index';
        $config['total_rows'] = $this->m_berita->hitungJumlahBerita();
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

        $config['cur_tag_open'] = '<li class="label-success active"><a class="page-link" href="#" >';
        $config['cur_tag_close'] = '</li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);
        $data['getBerita'] = $this->m_berita->getBerita($config['per_page'], $data['start']);

        $data['menu'] = $this->m_menu->getMenu();
        $data['submenu'] = $this->m_menu->getSubMenu();

        $data['link'] = $this->m_footer->getLink();
        $data['akses'] = $this->m_footer->getAkses();

        $data['uri'] = $this->uri->segment(1);

        $this->load->view('template/header', $data);
        $this->load->view('berita/index', $data);
        $this->load->view('template/footer');
    }

    public function read($seo)
    {
        $data['getBeritaList'] = $this->m_berita->getBeritaList(5);
        $data['getBeritaDetail'] = $this->m_berita->getBeritaDetail($seo);

        $data['menu'] = $this->m_menu->getMenu();
        $data['submenu'] = $this->m_menu->getSubMenu();

        $data['link'] = $this->m_footer->getLink();
        $data['akses'] = $this->m_footer->getAkses();

        $data['uri'] = $this->uri->segment(1);

        $this->load->view('template/header', $data);
        $this->load->view('berita/detail');
        $this->load->view('template/footer');
    }

    public function informasi_baru()
    {
        $this->load->model('Berita_model', 'berita');
        $data['isiberita'] = $this->berita->getBerita();

        $data['uri'] = $this->uri->segment(1);
        $this->load->view('template/header', $data);
        $this->load->view('berita/informasi_baru');
        $this->load->view('template/footer');
    }

    public function agenda()
    {
        $data['uri'] = $this->uri->segment(1);
        $this->load->view('template/header', $data);
        $this->load->view('berita/agenda');
        $this->load->view('template/footer');
    }

    public function program()
    {
        $data['uri'] = $this->uri->segment(1);
        $this->load->view('template/header', $data);
        $this->load->view('berita/program');
        $this->load->view('template/footer');
    }
}
