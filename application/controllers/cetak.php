<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cetak extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_data');
        $this->load->helper(array('url', 'download'));
        cek_session();
    }

    public function cet_barmas()
    {
        $cek['title'] = 'Cetak Lap. Pengadaan';

        $cek['info_user'] = $this->db->get_where('info_user', ['iduser' => $this->session->userdata('email')])->row_array();
        $data['info_user'] = $this->db->get('info_user')->result_array();
        $cek['barang_baru'] = $this->db->get('barang_baru')->result_array();
        $cek['barang_keluar'] = $this->db->get('barang_keluar')->result_array();

        $this->load->view('template/header', $cek);
        $this->load->view('template/navbar', $cek);
        $this->load->view('template/mainsidebar', $cek);
        $this->load->view('v_cetbarmas', $cek, $data);
        $this->load->view('template/footer', $data);
    }

    public function cet_barkel()
    {
        $cek['title'] = 'Cetak Lap. Permintaan';

        $cek['info_user'] = $this->db->get_where('info_user', ['iduser' => $this->session->userdata('email')])->row_array();
        $data['info_user'] = $this->db->get('info_user')->result_array();
        $cek['barang_baru'] = $this->db->get('barang_baru')->result_array();
        $cek['barang_keluar'] = $this->db->get('barang_keluar')->result_array();

        $this->load->view('template/header', $cek);
        $this->load->view('template/navbar', $cek);
        $this->load->view('template/mainsidebar', $cek);
        $this->load->view('v_cetbarkel', $cek, $data);
        $this->load->view('template/footer', $data);
    }

    public function p_ba_permintaan($id)
    {
        $ci = get_instance();
        $idd = $ci->session->userdata('email');
        $queryId = $ci->db->get_where('info_user', ['iduser' => $idd])->row_array();

        $cek['title'] = 'Print BA. Permintaan';
        $cek['info_user'] = $this->db->get_where('info_user', ['iduser' => $this->session->userdata('email')])->row_array();
        $data['info_user'] = $this->db->get('info_user')->result_array();

        $where = array('id' => $id);
        $cek['barang_keluar'] = $this->m_data->edit_data($where, 'barang_keluar')->result_array();
        $cek2['barang_keluar'] = $this->m_data->edit_data($where, 'barang_keluar2')->result_array();
        $cek3['barang_keluar'] = $this->m_data->edit_data($where, 'barang_keluar3')->result_array();
        $cek4['barang_keluar'] = $this->m_data->edit_data($where, 'barang_keluar4')->result_array();
        $cek5['barang_keluar'] = $this->m_data->edit_data($where, 'barang_keluar5')->result_array();
        $cek6['barang_keluar'] = $this->m_data->edit_data($where, 'barang_keluar6')->result_array();
        $cek7['barang_keluar'] = $this->m_data->edit_data($where, 'barang_keluar7')->result_array();
        $cek8['barang_keluar'] = $this->m_data->edit_data($where, 'barang_keluar8')->result_array();
        $cek9['barang_keluar'] = $this->m_data->edit_data($where, 'barang_keluar9')->result_array();
        $cek10['barang_keluar'] = $this->m_data->edit_data($where, 'barang_keluar10')->result_array();

        if ($queryId['id'] == 1) {
            $this->load->view('file_print/v_p_ba_permintaan', $cek, $data);
        }
        if ($queryId['id'] == 2) {
            $this->load->view('file_print/v_p_ba_permintaan', $cek, $data);
        }
        if ($queryId['id'] == 3) {
            $this->load->view('file_print/v_p_ba_permintaan', $cek2, $data);
        }
        if ($queryId['id'] == 4) {
            $this->load->view('file_print/v_p_ba_permintaan', $cek3, $data);
        }
        if ($queryId['id'] == 5) {
            $this->load->view('file_print/v_p_ba_permintaan', $cek4, $data);
        }
        if ($queryId['id'] == 6) {
            $this->load->view('file_print/v_p_ba_permintaan', $cek5, $data);
        }
        if ($queryId['id'] == 7) {
            $this->load->view('file_print/v_p_ba_permintaan', $cek6, $data);
        }
        if ($queryId['id'] == 8) {
            $this->load->view('file_print/v_p_ba_permintaan', $cek7, $data);
        }
        if ($queryId['id'] == 9) {
            $this->load->view('file_print/v_p_ba_permintaan', $cek8, $data);
        }
        if ($queryId['id'] == 10) {
            $this->load->view('file_print/v_p_ba_permintaan', $cek9, $data);
        }
        if ($queryId['id'] == 11) {
            $this->load->view('file_print/v_p_ba_permintaan', $cek10, $data);
        }
    }

    public function p_pengadaan($id)
    {
        $ci = get_instance();
        $idd = $ci->session->userdata('email');
        $queryId = $ci->db->get_where('info_user', ['iduser' => $idd])->row_array();

        $cek['title'] = 'Print Pengadaan Barang';
        $cek['info_user'] = $this->db->get_where('info_user', ['iduser' => $this->session->userdata('email')])->row_array();
        $data['info_user'] = $this->db->get('info_user')->result_array();

        $where = array('id' => $id);
        $cek['barang_baru'] = $this->m_data->edit_data($where, 'barang_baru')->result_array();
        $cek2['barang_baru'] = $this->m_data->edit_data($where, 'barang_baru2')->result_array();
        $cek3['barang_baru'] = $this->m_data->edit_data($where, 'barang_baru3')->result_array();
        $cek4['barang_baru'] = $this->m_data->edit_data($where, 'barang_baru4')->result_array();
        $cek5['barang_baru'] = $this->m_data->edit_data($where, 'barang_baru5')->result_array();
        $cek6['barang_baru'] = $this->m_data->edit_data($where, 'barang_baru6')->result_array();
        $cek7['barang_baru'] = $this->m_data->edit_data($where, 'barang_baru7')->result_array();
        $cek8['barang_baru'] = $this->m_data->edit_data($where, 'barang_baru8')->result_array();
        $cek9['barang_baru'] = $this->m_data->edit_data($where, 'barang_baru9')->result_array();
        $cek10['barang_baru'] = $this->m_data->edit_data($where, 'barang_baru10')->result_array();

        if ($queryId['id'] == 1) {
            $this->load->view('file_print/v_p_pengadaan', $cek, $data);
        }
        if ($queryId['id'] == 2) {
            $this->load->view('file_print/v_p_pengadaan', $cek, $data);
        }
        if ($queryId['id'] == 3) {
            $this->load->view('file_print/v_p_pengadaan', $cek2, $data);
        }
        if ($queryId['id'] == 4) {
            $this->load->view('file_print/v_p_pengadaan', $cek3, $data);
        }
        if ($queryId['id'] == 5) {
            $this->load->view('file_print/v_p_pengadaan', $cek4, $data);
        }
        if ($queryId['id'] == 6) {
            $this->load->view('file_print/v_p_pengadaan', $cek5, $data);
        }
        if ($queryId['id'] == 7) {
            $this->load->view('file_print/v_p_pengadaan', $cek6, $data);
        }
        if ($queryId['id'] == 8) {
            $this->load->view('file_print/v_p_pengadaan', $cek7, $data);
        }
        if ($queryId['id'] == 9) {
            $this->load->view('file_print/v_p_pengadaan', $cek8, $data);
        }
        if ($queryId['id'] == 10) {
            $this->load->view('file_print/v_p_pengadaan', $cek9, $data);
        }
        if ($queryId['id'] == 11) {
            $this->load->view('file_print/v_p_pengadaan', $cek10, $data);
        }
    }
}
