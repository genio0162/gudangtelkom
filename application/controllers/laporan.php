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
        $ci = get_instance();
        $id = $ci->session->userdata('email');
        $queryId = $ci->db->get_where('info_user', ['iduser' => $id])->row_array();
        $cek['title'] = 'Lap. Tabel';

        $cek['info_user'] = $this->db->get_where('info_user', ['iduser' => $this->session->userdata('email')])->row_array();
        $data['info_user'] = $this->db->get('info_user')->result_array();
        $cek['barang_baru'] = $this->db->get('barang_baru')->result_array();
        $cek['barang_keluar'] = $this->db->get('barang_keluar')->result_array();
        $cek2['barang_baru'] = $this->db->get('barang_baru2')->result_array();
        $cek2['barang_keluar'] = $this->db->get('barang_keluar2')->result_array();
        $cek3['barang_baru'] = $this->db->get('barang_baru3')->result_array();
        $cek3['barang_keluar'] = $this->db->get('barang_keluar3')->result_array();
        $cek4['barang_baru'] = $this->db->get('barang_baru4')->result_array();
        $cek4['barang_keluar'] = $this->db->get('barang_keluar4')->result_array();
        $cek5['barang_baru'] = $this->db->get('barang_baru5')->result_array();
        $cek5['barang_keluar'] = $this->db->get('barang_keluar5')->result_array();
        $cek6['barang_baru'] = $this->db->get('barang_baru6')->result_array();
        $cek6['barang_keluar'] = $this->db->get('barang_keluar6')->result_array();
        $cek7['barang_baru'] = $this->db->get('barang_baru7')->result_array();
        $cek7['barang_keluar'] = $this->db->get('barang_keluar7')->result_array();
        $cek8['barang_baru'] = $this->db->get('barang_baru8')->result_array();
        $cek8['barang_keluar'] = $this->db->get('barang_keluar8')->result_array();
        $cek9['barang_baru'] = $this->db->get('barang_baru9')->result_array();
        $cek9['barang_keluar'] = $this->db->get('barang_keluar9')->result_array();
        $cek10['barang_baru'] = $this->db->get('barang_baru10')->result_array();
        $cek10['barang_keluar'] = $this->db->get('barang_keluar10')->result_array();

        $this->load->view('template/header', $cek);
        $this->load->view('template/navbar', $cek);
        $this->load->view('template/mainsidebar', $cek);
        if ($queryId['id'] == 1) {
            $this->load->view('v_table', $cek, $data);
        }
        if ($queryId['id'] == 2) {
            $this->load->view('v_table', $cek, $data);
        }
        if ($queryId['id'] == 3) {
            $this->load->view('v_table', $cek2, $data);
        }
        if ($queryId['id'] == 4) {
            $this->load->view('v_table', $cek3, $data);
        }
        if ($queryId['id'] == 5) {
            $this->load->view('v_table', $cek4, $data);
        }
        if ($queryId['id'] == 6) {
            $this->load->view('v_table', $cek5, $data);
        }
        if ($queryId['id'] == 7) {
            $this->load->view('v_table', $cek6, $data);
        }
        if ($queryId['id'] == 8) {
            $this->load->view('v_table', $cek7, $data);
        }
        if ($queryId['id'] == 9) {
            $this->load->view('v_table', $cek8, $data);
        }
        if ($queryId['id'] == 10) {
            $this->load->view('v_table', $cek9, $data);
        }
        if ($queryId['id'] == 11) {
            $this->load->view('v_table', $cek10, $data);
        }
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
        $cek['material'] = $this->db->get('material')->result_array();
        $cek['gud1'] = $this->db->get('stok_tampil1')->result_array();

        $this->load->view('template/header', $cek);
        $this->load->view('template/navbar', $cek);
        $this->load->view('template/mainsidebar', $cek);
        $this->load->view('v_stok', $cek, $data);
        $this->load->view('template/footer', $data);
    }
}
