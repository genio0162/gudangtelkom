<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model(['m_data', 'm_transaksi']);
        $this->load->helper('url');
        cek_session();
    }

    public function pengadaan()
    {
        $ci = get_instance();
        $id = $ci->session->userdata('email');
        $queryId = $ci->db->get_where('info_user', ['iduser' => $id])->row_array();
        $cek['title'] = 'Pengadaan';

        $cek['info_user'] = $this->db->get_where('info_user', ['iduser' => $this->session->userdata('email')])->row_array();
        $data['info_user'] = $this->db->get('info_user')->result_array();
        $cek['type'] = $this->db->get('type')->result_array();
        $cek['material'] = $this->db->get('material')->result_array();
        $cek['stok_tampil1'] = $this->db->get('stok_tampil1')->result_array();
        $cek2['stok_tampil1'] = $this->db->get('stok_tampil2')->result_array();
        $cek3['stok_tampil1'] = $this->db->get('stok_tampil3')->result_array();
        $cek4['stok_tampil1'] = $this->db->get('stok_tampil4')->result_array();
        $cek5['stok_tampil1'] = $this->db->get('stok_tampil5')->result_array();
        $cek6['stok_tampil1'] = $this->db->get('stok_tampil6')->result_array();
        $cek7['stok_tampil1'] = $this->db->get('stok_tampil7')->result_array();
        $cek8['stok_tampil1'] = $this->db->get('stok_tampil8')->result_array();
        $cek9['stok_tampil1'] = $this->db->get('stok_tampil9')->result_array();
        $cek10['stok_tampil1'] = $this->db->get('stok_tampil10')->result_array();

        $this->load->view('template/header', $cek);
        $this->load->view('template/navbar', $cek);
        $this->load->view('template/mainsidebar', $cek);
        if ($queryId['id'] == 1) {
            $this->load->view('v_pengadaan', $cek, $data);
        }
        if ($queryId['id'] == 2) {
            $this->load->view('v_pengadaan', $cek, $data);
        }
        if ($queryId['id'] == 3) {
            $this->load->view('v_pengadaan', $cek2, $data);
        }
        if ($queryId['id'] == 4) {
            $this->load->view('v_pengadaan', $cek3, $data);
        }
        if ($queryId['id'] == 5) {
            $this->load->view('v_pengadaan', $cek4, $data);
        }
        if ($queryId['id'] == 6) {
            $this->load->view('v_pengadaan', $cek5, $data);
        }
        if ($queryId['id'] == 7) {
            $this->load->view('v_pengadaan', $cek6, $data);
        }
        if ($queryId['id'] == 8) {
            $this->load->view('v_pengadaan', $cek7, $data);
        }
        if ($queryId['id'] == 9) {
            $this->load->view('v_pengadaan', $cek8, $data);
        }
        if ($queryId['id'] == 10) {
            $this->load->view('v_pengadaan', $cek9, $data);
        }
        if ($queryId['id'] == 11) {
            $this->load->view('v_pengadaan', $cek10, $data);
        }
        $this->load->view('template/footer', $data);
    }

    public function proccess_in()
    {
        // $ci = get_instance();
        // $id = $ci->session->userdata('id');
        // $queryId = $ci->db->get_where('info_user', ['iduser' => $id])->row_array();

        // $cek['info_user'] = $this->db->get_where('info_user', ['iduser' => $this->session->userdata('email')])->row_array();
        // $this->load->view('template/header', $cek);
        // $this->load->view('template/navbar', $cek);
        // $this->load->view('template/mainsidebar', $cek);
        // if ($queryId['id'] == 1) {
        if (isset($_POST['tambah'])) {
            $post = $this->input->post(null, TRUE);
            $this->m_transaksi->laporan_tambah($post);
            $this->m_transaksi->proses_tambah($post);

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil menambahkan stok</div>');
            } else  $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Menambahkan Stok</div>');
            redirect('transaksi/pengadaan');
        }
        // }
        // var_dump($ci);
    }

    public function permintaan()
    {
        $ci = get_instance();
        $id = $ci->session->userdata('email');
        $queryId = $ci->db->get_where('info_user', ['iduser' => $id])->row_array();
        $cek['title'] = 'Permintaan';

        $cek['info_user'] = $this->db->get_where('info_user', ['iduser' => $this->session->userdata('email')])->row_array();
        $data['info_user'] = $this->db->get('info_user')->result_array();
        $cek['stok_tampil1'] = $this->db->get('stok_tampil1')->result_array();
        $cek2['stok_tampil1'] = $this->db->get('stok_tampil2')->result_array();
        $cek3['stok_tampil1'] = $this->db->get('stok_tampil3')->result_array();
        $cek4['stok_tampil1'] = $this->db->get('stok_tampil4')->result_array();
        $cek5['stok_tampil1'] = $this->db->get('stok_tampil5')->result_array();
        $cek6['stok_tampil1'] = $this->db->get('stok_tampil6')->result_array();
        $cek7['stok_tampil1'] = $this->db->get('stok_tampil7')->result_array();
        $cek8['stok_tampil1'] = $this->db->get('stok_tampil8')->result_array();
        $cek9['stok_tampil1'] = $this->db->get('stok_tampil9')->result_array();
        $cek10['stok_tampil1'] = $this->db->get('stok_tampil10')->result_array();
        $cek['area_gudang'] = $this->db->get('area_gudang')->result_array();

        $this->load->view('template/header', $cek);
        $this->load->view('template/navbar', $cek);
        $this->load->view('template/mainsidebar', $cek);
        if ($queryId['id'] == 1) {
            $this->load->view('v_permintaan', $cek, $data);
        }
        if ($queryId['id'] == 2) {
            $this->load->view('v_permintaan', $cek, $data);
        }
        if ($queryId['id'] == 3) {
            $this->load->view('v_permintaan', $cek2, $data);
        }
        if ($queryId['id'] == 4) {
            $this->load->view('v_permintaan', $cek3, $data);
        }
        if ($queryId['id'] == 5) {
            $this->load->view('v_permintaan', $cek4, $data);
        }
        if ($queryId['id'] == 6) {
            $this->load->view('v_permintaan', $cek5, $data);
        }
        if ($queryId['id'] == 7) {
            $this->load->view('v_permintaan', $cek6, $data);
        }
        if ($queryId['id'] == 8) {
            $this->load->view('v_permintaan', $cek7, $data);
        }
        if ($queryId['id'] == 9) {
            $this->load->view('v_permintaan', $cek8, $data);
        }
        if ($queryId['id'] == 10) {
            $this->load->view('v_permintaan', $cek9, $data);
        }
        if ($queryId['id'] == 11) {
            $this->load->view('v_permintaan', $cek10, $data);
        }
        $this->load->view('template/footer', $data);
    }

    public function proccess_out()
    {
        $data['info_user'] = $this->db->get('info_user')->result_array();
        if (isset($_POST['kurang'])) {
            $post = $this->input->post(null, TRUE);
            $this->m_transaksi->laporan_kurang($post);
            $this->m_transaksi->proses_kurang($post);

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil mengurangi stok</div>');
            }
            redirect('transaksi/permintaan');
        }
    }
}
