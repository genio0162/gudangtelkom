<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrator extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_data');
        $this->load->helper('url');
        cek_session();
    }

    public function inuser()
    {
        $cek['title'] = 'Tambah User';
        $cek['info_user'] = $this->db->get_where('info_user', ['iduser' => $this->session->userdata('email')])->row_array();
        $data['info_user'] = $this->db->get('info_user')->result_array();

        $this->load->view('template/header', $cek);
        $this->load->view('template/navbar', $cek);
        $this->load->view('template/mainsidebar', $cek);
        $this->load->view('v_adduser', $cek);
        $this->load->view('template/footer', $data);
    }

    public function data_material()
    {
        $cek['title'] = 'Data Material';

        $cek['info_user'] = $this->db->get_where('info_user', ['iduser' => $this->session->userdata('email')])->row_array();
        $data['info_user'] = $this->db->get('info_user')->result_array();
        $cek['type'] = $this->db->get('type')->result_array();
        $cek['material'] = $this->db->get('material')->result_array();

        $this->load->view('template/header', $cek);
        $this->load->view('template/navbar', $cek);
        $this->load->view('template/mainsidebar', $cek);
        $this->load->view('v_datamaterial', $cek, $data);
        $this->load->view('template/footer', $data);
    }

    function edit1($id)
    {
        $cek['title'] = 'Edit Data';

        $cek['info_user'] = $this->db->get_where('info_user', ['iduser' => $this->session->userdata('email')])->row_array();
        $data['info_user'] = $this->db->get('info_user')->result_array();
        $cek['type'] = $this->db->get('type')->result_array();

        $where = array('id' => $id);
        $cek['material'] = $this->m_data->edit_data($where, 'material')->result_array();
        $this->load->view('template/header', $cek);
        $this->load->view('template/navbar', $cek);
        $this->load->view('template/mainsidebar', $cek);
        $this->load->view('v_editmaterial', $cek, $data);
        $this->load->view('template/footer', $data);
    }

    function update1()
    {
        $id = $this->input->post('id_material');
        $nama = $this->input->post('nama');
        $jenis = $this->input->post('jenis');

        $data = array(
            'nama' => $nama,
            'jenis' => $jenis
        );

        $where = array(
            'id' => $id
        );

        $this->m_data->update_data($where, $data, 'material');
        $this->m_data->update_data($where, $data, 'stok_tampil1');
        $this->m_data->update_data($where, $data, 'stok_tampil2');
        $this->m_data->update_data($where, $data, 'stok_tampil3');
        $this->m_data->update_data($where, $data, 'stok_tampil4');
        $this->m_data->update_data($where, $data, 'stok_tampil5');
        $this->m_data->update_data($where, $data, 'stok_tampil6');
        $this->m_data->update_data($where, $data, 'stok_tampil7');
        $this->m_data->update_data($where, $data, 'stok_tampil8');
        $this->m_data->update_data($where, $data, 'stok_tampil9');
        $this->m_data->update_data($where, $data, 'stok_tampil10');
        redirect('administrator/data_material');
    }

    public function hapus1($id)
    {
        $where = array('id_barang' => $id);
        $this->m_data->hapus_data($where, 'material');
        $this->session->set_flashdata('message', '<div class="alert col-sm-6 alert-success" role="alert">Berhasil menghapus data</div>');
        redirect('administrator/data_material');
    }

    public function tipebaru()
    {
        $this->form_validation->set_rules('material', 'Material', 'required|trim');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required|trim');

        if ($this->form_validation->run() == false) {

            $cek['title'] = 'Pengadaan';

            $cek['info_user'] = $this->db->get_where('info_user', ['iduser' => $this->session->userdata('email')])->row_array();
            $data['info_user'] = $this->db->get('info_user')->result_array();
            $cek['type'] = $this->db->get('type')->result_array();
            $cek['material'] = $this->db->get('material')->result_array();

            $this->load->view('template/header', $cek);
            $this->load->view('template/navbar', $cek);
            $this->load->view('template/mainsidebar', $cek);
            $this->load->view('v_datamaterial', $cek, $data);
            $this->load->view('template/footer', $data);
        } else {
            $datas = [
                'id_barang' => $this->m_data->get_kobar(),
                'nama' => $this->input->post('material'),
                'jenis' => $this->input->post('jenis'),
                'jumlah' => 0
            ];

            $this->db->insert('material', $datas);
            $this->db->insert('stok_tampil1', $datas);
            $this->db->insert('stok_tampil2', $datas);
            $this->db->insert('stok_tampil3', $datas);
            $this->db->insert('stok_tampil4', $datas);
            $this->db->insert('stok_tampil5', $datas);
            $this->db->insert('stok_tampil6', $datas);
            $this->db->insert('stok_tampil7', $datas);
            $this->db->insert('stok_tampil8', $datas);
            $this->db->insert('stok_tampil9', $datas);
            $this->db->insert('stok_tampil10', $datas);
            $this->session->set_flashdata('message', '<div class="alert col-sm-10 alert-success" role="alert">Berhasil menambahkan Data</div>');
            redirect('administrator/data_material');
        }
    }

    public function akunbaru()
    {
        $this->form_validation->set_rules('idadmin', 'Id Admin', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim');
        $this->form_validation->set_rules('password2', 'Password', 'required|trim');
        $this->form_validation->set_rules('namaadmin', 'Nama Admin', 'required|trim');
        $this->form_validation->set_rules('alamatt', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('nik', 'NIK/NIP', 'required|trim');
        $this->form_validation->set_rules('emailbaru', 'Email Baru', 'required|trim');
        $this->form_validation->set_rules('telpon', 'Telpon', 'required|trim');
        $this->form_validation->set_rules('wilayah', 'Wilayah', 'required|trim');

        if ($this->form_validation->run() == false) {

            $cek['info_user'] = $this->db->get_where('info_user', ['iduser' => $this->session->userdata('email')])->row_array();
            $data['info_user'] = $this->db->get('info_user')->result_array();

            $this->load->view('template/header', $cek);
            $this->load->view('template/navbar', $cek);
            $this->load->view('template/mainsidebar', $cek);
            $this->load->view('v_datauser', $cek);
            $this->load->view('template/footer', $data);
        } else {
            $datas = [
                'iduser' => htmlspecialchars($this->input->post('idadmin', true)),
                'password2' => htmlspecialchars($this->input->post('password1', true)),
                'password' => password_hash($this->input->post('password2'), PASSWORD_DEFAULT),
                'nama' => htmlspecialchars($this->input->post('namaadmin', true)),
                'alamat' => htmlspecialchars($this->input->post('alamatt', true)),
                'nik' => $this->input->post('nik'),
                'emaill' => $this->input->post('emailbaru'),
                'telpon' => $this->input->post('telpon'),
                'wilayah' => $this->input->post('wilayah'),
                'foto' => 'default.jpg',
                'role_id' => 2,
                'is_active' => 1,
            ];

            $this->db->insert('info_user', $datas);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil menambahkan akun baru</div>');
            redirect('administrator/datauser');
        }
    }

    public function datauser()
    {
        $cek['title'] = 'Kelola User';
        $cek['info_user'] = $this->db->get_where('info_user', ['iduser' => $this->session->userdata('email')])->row_array();

        $data['info_user'] = $this->db->get('info_user')->result_array();

        $this->load->view('template/header', $cek);
        $this->load->view('template/navbar', $cek);
        $this->load->view('template/mainsidebar', $cek);
        $this->load->view('v_datauser', $data);
        $this->load->view('template/footer', $data);
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_data->hapus_data($where, 'info_user');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil menghapus akun user</div>');
        redirect('administrator/datauser');
    }

    public function role()
    {
        $satu = 'Admin';
        $dua = 'User';

        if ($this->db->get('info_user', ['role_id' == 1])) {
            echo 'admin';
        }
    }

    public function pengumuman()
    {
        $cek['title'] = 'Pengumuman';
        $cek['info_user'] = $this->db->get_where('info_user', ['iduser' => $this->session->userdata('email')])->row_array();

        $data['info_user'] = $this->db->get('info_user')->result_array();
        $data['pengumuman'] = $this->db->get('pengumuman')->result_array();

        $this->load->view('template/header', $cek);
        $this->load->view('template/navbar', $cek);
        $this->load->view('template/mainsidebar', $cek);
        $this->load->view('v_pengumuman', $data);
        $this->load->view('template/footer', $data);
    }

    public function input_pengumuman()
    {
        $this->form_validation->set_rules('pengumuman', 'box', 'required|trim');

        if ($this->form_validation->run() == false) {
            $cek['title'] = 'Pengumuman';
            $cek['info_user'] = $this->db->get_where('info_user', ['iduser' => $this->session->userdata('email')])->row_array();

            $data['info_user'] = $this->db->get('info_user')->result_array();
            $data['pengumuman'] = $this->db->get('pengumuman')->result_array();

            $this->load->view('template/header', $cek);
            $this->load->view('template/navbar', $cek);
            $this->load->view('template/mainsidebar', $cek);
            $this->load->view('v_pengumuman', $data);
            $this->load->view('template/footer', $data);
        } else {
            $datas = [
                'pengumuman' => $this->input->post('pengumuman')
            ];

            $this->db->insert('pengumuman', $datas);
            $this->session->set_flashdata('message', '<div class="alert col-sm-6 alert-success" role="alert">Berhasil menambahkan Data</div>');
            redirect('administrator/pengumuman');
        }
    }

    public function hapus2($id)
    {
        $where = array('id' => $id);
        $this->m_data->hapus_data($where, 'pengumuman');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil menghapus akun user</div>');
        redirect('administrator/pengumuman');
    }
}
