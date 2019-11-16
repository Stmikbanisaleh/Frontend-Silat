<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['user'] = $this->lapan_api_library->call3('users/getuserbyemail', ['token' => TOKEN, $this->session->userdata('email')]);

        $this->load->library('pagination');

        $config['base_url'] = base_url().'berita/index';
        //$config['base_url'] = 'http://pusispan.stmik-banisaleh.com/pusispan/sispan/berita/index';
        $getlist_berita = $this->lapan_api_library->call('berita/getlistberita', ['token' => TOKEN]);
        $config['total_rows'] = count($getlist_berita['rows']);

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
        $data_paging = [
            'token' => TOKEN,
            'limit' => $config['per_page'],
            'start' => $data['start']
        ];
        $getlist_paging = $this->lapan_api_library->call('berita/getberitapaging', $data_paging);
        $data['getBerita'] = $getlist_paging;

        // print_r(json_encode($data['getBerita']));exit;


        //=============================================================================================================================//

        $data['uri'] = $this->uri->segment(1);

        $getlistlink = $this->lapan_api_library->call('link/getlink', ['token' => TOKEN]);
        $data['link'] = $getlistlink['rows'];

        $getaksescepat = $this->lapan_api_library->call('aksescepat/getaksescepat', ['token' => TOKEN]);
        $data['akses'] = $getaksescepat['rows'];

        $data_menuwhere = [
            'token' => TOKEN,
            'id_parent' => '',
            'id_posisi' => 4
        ];
        $getmenuwhere = $this->lapan_api_library->call('menu/getmenuwhere', $data_menuwhere);
        $data['menu'] = $getmenuwhere['rows'];

        $getmenu = $this->lapan_api_library->call('menu/getmenu', ['token' => TOKEN]);
        $data['submenu'] = $getmenu['rows'];

        $this->load->view('template/header', $data);
        $this->load->view('berita/index', $data);
        $this->load->view('template/footer');
    }

    public function read($seo)
    {
        $data['user'] = $this->lapan_api_library->call3('users/getuserbyemail', ['token' => TOKEN, 'email' => $this->session->userdata('email')]);

        $getlist_berita = $this->lapan_api_library->call('berita/getlistberita', ['token' => TOKEN]);
        $data['getBeritaList'] = $getlist_berita['rows'];

        $get_beritadetail = $this->lapan_api_library->call('berita/getberitadetail', ['token' => TOKEN, 'judul_seo' => $seo]);
        $data['getBeritaDetail'] = $get_beritadetail['rows'];
        $data['getBeritaDetail'] = $this->m_berita->getBeritaDetail($seo);

        //=============================================================================================================================//

        $data['uri'] = $this->uri->segment(1);

        $getlistlink = $this->lapan_api_library->call('link/getlink', ['token' => TOKEN]);
        $data['link'] = $getlistlink['rows'];

        $getaksescepat = $this->lapan_api_library->call('aksescepat/getaksescepat', ['token' => TOKEN]);
        $data['akses'] = $getaksescepat['rows'];

        $data_menuwhere = [
            'token' => TOKEN,
            'id_parent' => '',
            'id_posisi' => 4
        ];
        $getmenuwhere = $this->lapan_api_library->call('menu/getmenuwhere', $data_menuwhere);
        $data['menu'] = $getmenuwhere['rows'];

        $getmenu = $this->lapan_api_library->call('menu/getmenu', ['token' => TOKEN]);
        $data['submenu'] = $getmenu['rows'];

        $this->load->view('template/header', $data);
        $this->load->view('berita/detail');
        $this->load->view('template/footer');
    }

    public function informasi_baru()
    {
        $data['user'] = $this->lapan_api_library->call3('users/getuserbyemail', ['token' => TOKEN, 'email' => $this->session->userdata('email')]);
        
        $getlist_berita = $this->lapan_api_library->call('berita/getlistberita', ['token' => TOKEN]);
        $data['isiberita'] = $getlist_berita;

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
