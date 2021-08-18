<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_data');
        $this->load->helper('url');
        cek_session();
    }

    public function tabel()
    {
        $cek['title'] = 'Lap. Tabel';

        $cek['info_user'] = $this->db->get_where('info_user', ['iduser' => $this->session->userdata('email')])->row_array();
        $data['info_user'] = $this->db->get('info_user')->result_array();
        $cek['barang_baru2'] = $this->db->get('barang_baru2')->result_array();
        $cek['barang_keluar2'] = $this->db->get('barang_keluar2')->result_array();

        $this->load->view('template/header', $cek);
        $this->load->view('template/navbar', $cek);
        $this->load->view('template/mainsidebar', $cek);
        $this->load->view('v_table', $cek, $data);
        $this->load->view('template/footer', $data);
    }

    public function grafik()
    {
        $cek['title'] = 'Lap. Grafik';

        $cek['info_user'] = $this->db->get_where('info_user', ['iduser' => $this->session->userdata('email')])->row_array();
        $data['info_user'] = $this->db->get('info_user')->result_array();

        $this->load->view('template/header', $cek);
        $this->load->view('template/navbar', $cek);
        $this->load->view('template/mainsidebar', $cek);
        $this->load->view('v_grafik', $cek, $data);
        $this->load->view('template/footer', $data);
    }

    public function stokgud()
    {
        $cek['title'] = 'Stok Gudang';

        $cek['info_user'] = $this->db->get_where('info_user', ['iduser' => $this->session->userdata('email')])->row_array();
        $data['info_user'] = $this->db->get('info_user')->result_array();

        $this->load->view('template/header', $cek);
        $this->load->view('template/navbar', $cek);
        $this->load->view('template/mainsidebar', $cek);
        $this->load->view('v_stok', $cek, $data);
        $this->load->view('template/footer', $data);
    }
}
