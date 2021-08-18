<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_data');
        $this->load->helper('url');
        cek_session();
    }

    public function index()
    {
        $cek['title'] = 'Dashboard';

        $cek['info_user'] = $this->db->get_where('info_user', ['iduser' => $this->session->userdata('email')])->row_array();
        $data['info_user'] = $this->db->get('info_user')->result_array();
        $data['user_menu'] = $this->db->get('user_menu')->result_array();
        $cek['pengumuman'] = $this->db->get('pengumuman')->result_array();

        $this->load->view('template/header', $cek);
        $this->load->view('template/navbar', $cek);
        $this->load->view('template/mainsidebar', $cek, $data);
        $this->load->view('v_berandaadmin', $cek, $data);
        $this->load->view('template/footer', $data);
    }

    public function profile()
    {
        $cek['title'] = 'My Profile';
        $cek['info_user'] = $this->db->get_where('info_user', ['iduser' => $this->session->userdata('email', 'id')])->row_array();
        $data['info_user'] = $this->db->get('info_user')->result_array();

        $this->load->view('template/header', $cek);
        $this->load->view('template/navbar', $cek);
        $this->load->view('template/mainsidebar', $cek);
        $this->load->view('v_editprofile', $cek);
        $this->load->view('template/footer', $data);
    }

    function edit()
    {
        $cek['info_user'] = $this->db->get_where('info_user', ['iduser' => $this->session->userdata('email')])->row_array();
        $data['info_user'] = $this->db->get('info_user')->result_array();

        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('nik', 'NIK', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required|trim');
        $this->form_validation->set_rules('wilayah', 'Wilayah', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $cek);
            $this->load->view('template/navbar', $cek);
            $this->load->view('template/mainsidebar', $cek);
            $this->load->view('v_editprofile', $cek);
            $this->load->view('template/footer', $data);
        } else {
            $iduser = $this->input->post('iduser');
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $nik = $this->input->post('nik');
            $email = $this->input->post('email');
            $telepon = $this->input->post('telepon');
            $wilayah = $this->input->post('wilayah');

            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '10500';
                $config['upload_path'] = './asset/dist/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('foto', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('nama', $nama);
            $this->db->set('alamat', $alamat);
            $this->db->set('nik', $nik);
            $this->db->set('emaill', $email);
            $this->db->set('telpon', $telepon);
            $this->db->set('wilayah', $wilayah);
            $this->db->where('iduser',  $iduser);
            $this->db->update('info_user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Merubah Akun</div>');
            redirect('user/profile');
        }
    }

    public function users()
    {
        $cek['title'] = 'Users';
        $cek['info_user'] = $this->db->get_where('info_user', ['iduser' => $this->session->userdata('email')])->row_array();

        $data['info_user'] = $this->db->get('info_user')->result_array();

        $this->load->view('template/header', $cek);
        $this->load->view('template/navbar', $cek);
        $this->load->view('template/mainsidebar', $cek);
        $this->load->view('v_users', $data);
        $this->load->view('template/footer', $data);
    }

    public function id($id)
    {
        $where = array('nama' => $id);
        $data['material'] = $this->db->get($where, 'material')->result();
    }

    public function editt($id)
    {
        $where = array('id' => $id);
        $datas['info_user'] = $this->m_data->tampil_data('info_user', $where)->result_array();
        $this->load->view('v_users');
    }
}
