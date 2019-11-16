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
        $data['user'] = $this->lapan_api_library->call3('users/getuserbyemail', ['token' => TOKEN, 'email' => $this->session->userdata('email')]);

        $getKegiatanSispan = $this->lapan_api_library->call('kegiatan/getkegiatansispan', ['token' => TOKEN]);
        $data['ksispan'] = $getKegiatanSispan['rows'][0];

        $hasil_listberita = $this->lapan_api_library->call('berita/getlistberita', ['token' => TOKEN]);
        $data['berita'] = $hasil_listberita['rows'];

        $hasil_listagenda = $this->lapan_api_library->call('agenda/getlistagendalimit3', ['token' => TOKEN]);
        $data['agenda'] = $hasil_listagenda['rows'];

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
        $this->load->view('home', $data);
        $this->load->view('template/footer', $data);
    }
}
