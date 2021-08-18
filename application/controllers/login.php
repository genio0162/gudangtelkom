<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_data');
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('transaksi');
        }

        $this->load->view('v_login');
    }

    public function masuk()
    {
        if ($this->session->userdata('email')) {
            redirect('transaksi');
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('v_login');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('info_user', ['iduser' => $email])->row_array();
        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $cek = [
                        'email' => $user['iduser'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($cek);
                    if ($user['role_id'] == 1) {
                        redirect('user');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun tidak aktif!</div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun tidak terdaftar!</div>');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Logged Out</div>');
        redirect('login');
    }


    public function blocked()
    {
        $data['title'] = 'Beranda';

        $this->load->view('v_blocksite', $data);
    }
}
