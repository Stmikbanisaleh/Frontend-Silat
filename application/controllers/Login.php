<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {
        $data['user'] = $this->lapan_api_library->call3('users/getuserbyemail', ['token' => TOKEN, $this->session->userdata('email')]);

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Login";

           //=============================================================================================================================//

            $getlistlink = $this->lapan_api_library->call('link/getlink', ['token' => TOKEN]);
            $data['link'] = $getlistlink['rows'];

            $getaksescepat = $this->lapan_api_library->call('aksescepat/getaksescepat', ['token' => TOKEN]);
            $data['akses'] = $getaksescepat['rows'];

            $data_menuwhere = [
                'token' => TOKEN,
                'id_parent' => '',
                'id_posisi' => 3
            ];
            $getmenuwhere = $this->lapan_api_library->call('menu/getmenuwhere', $data_menuwhere);
            $data['menu'] = $getmenuwhere['rows'];

            $getmenu = $this->lapan_api_library->call('menu/getmenu', ['token' => TOKEN]);
            $data['submenu'] = $getmenu['rows'];

            $this->load->view('template/header', $data);
            $this->load->view('login');
            $this->load->view('template/footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->lapan_api_library->call('users/login', $data);
        $user = $user['data'];

        if ($user) {
            //cek password
            if ($user['token']) {
                $data = [
                    'email' => $user['email'],
                    'role_id' => $user['role']
                ];
                echo "berhasil";
                redirect('home');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Password salah!</div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email belum terdaftar</div>');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        redirect('login');
    }
}
