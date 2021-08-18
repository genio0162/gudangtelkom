<?php

class M_transaksi extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_data');
        $this->load->helper('url');
        cek_session();
    }

    function laporan_tambah($post)
    {
        $ci = get_instance();
        $idd = $ci->session->userdata('email');
        $queryId = $ci->db->get_where('info_user', ['iduser' => $idd])->row_array();
        if ($queryId['id'] == 1) {
            $param = [
                'tanggal' => $post['date'],
                'id_barang' => $post['id_barang'],
                'nama' => $post['nama'],
                'jenis' => $post['jenis'],
                'pengirim' => $post['pengirim'],
                'jumlah' => $post['qty'],
                'keterangan' => $post['item_name'],
            ];
            $this->db->insert('barang_baru', $param);
        }
        if ($queryId['id'] == 2) {
            $param = [
                'tanggal' => $post['date'],
                'id_barang' => $post['id_barang'],
                'nama' => $post['nama'],
                'jenis' => $post['jenis'],
                'pengirim' => $post['pengirim'],
                'jumlah' => $post['qty'],
                'keterangan' => $post['item_name'],
            ];
            $this->db->insert('barang_baru', $param);
        }
        if ($queryId['id'] == 3) {
            $param = [
                'tanggal' => $post['date'],
                'id_barang' => $post['id_barang'],
                'nama' => $post['nama'],
                'jenis' => $post['jenis'],
                'pengirim' => $post['pengirim'],
                'jumlah' => $post['qty'],
                'keterangan' => $post['item_name'],
            ];
            $this->db->insert('barang_baru2', $param);
        }
        if ($queryId['id'] == 4) {
            $param = [
                'tanggal' => $post['date'],
                'id_barang' => $post['id_barang'],
                'nama' => $post['nama'],
                'jenis' => $post['jenis'],
                'pengirim' => $post['pengirim'],
                'jumlah' => $post['qty'],
                'keterangan' => $post['item_name'],
            ];
            $this->db->insert('barang_baru3', $param);
        }
        if ($queryId['id'] == 5) {
            $param = [
                'tanggal' => $post['date'],
                'id_barang' => $post['id_barang'],
                'nama' => $post['nama'],
                'jenis' => $post['jenis'],
                'pengirim' => $post['pengirim'],
                'jumlah' => $post['qty'],
                'keterangan' => $post['item_name'],
            ];
            $this->db->insert('barang_baru4', $param);
        }
        if ($queryId['id'] == 6) {
            $param = [
                'tanggal' => $post['date'],
                'id_barang' => $post['id_barang'],
                'nama' => $post['nama'],
                'jenis' => $post['jenis'],
                'pengirim' => $post['pengirim'],
                'jumlah' => $post['qty'],
                'keterangan' => $post['item_name'],
            ];
            $this->db->insert('barang_baru5', $param);
        }
        if ($queryId['id'] == 7) {
            $param = [
                'tanggal' => $post['date'],
                'id_barang' => $post['id_barang'],
                'nama' => $post['nama'],
                'jenis' => $post['jenis'],
                'pengirim' => $post['pengirim'],
                'jumlah' => $post['qty'],
                'keterangan' => $post['item_name'],
            ];
            $this->db->insert('barang_baru6', $param);
        }
        if ($queryId['id'] == 8) {
            $param = [
                'tanggal' => $post['date'],
                'id_barang' => $post['id_barang'],
                'nama' => $post['nama'],
                'jenis' => $post['jenis'],
                'pengirim' => $post['pengirim'],
                'jumlah' => $post['qty'],
                'keterangan' => $post['item_name'],
            ];
            $this->db->insert('barang_baru7', $param);
        }
        if ($queryId['id'] == 9) {
            $param = [
                'tanggal' => $post['date'],
                'id_barang' => $post['id_barang'],
                'nama' => $post['nama'],
                'jenis' => $post['jenis'],
                'pengirim' => $post['pengirim'],
                'jumlah' => $post['qty'],
                'keterangan' => $post['item_name'],
            ];
            $this->db->insert('barang_baru8', $param);
        }
        if ($queryId['id'] == 10) {
            $param = [
                'tanggal' => $post['date'],
                'id_barang' => $post['id_barang'],
                'nama' => $post['nama'],
                'jenis' => $post['jenis'],
                'pengirim' => $post['pengirim'],
                'jumlah' => $post['qty'],
                'keterangan' => $post['item_name'],
            ];
            $this->db->insert('barang_baru9', $param);
        }
        if ($queryId['id'] == 11) {
            $param = [
                'tanggal' => $post['date'],
                'id_barang' => $post['id_barang'],
                'nama' => $post['nama'],
                'jenis' => $post['jenis'],
                'pengirim' => $post['pengirim'],
                'jumlah' => $post['qty'],
                'keterangan' => $post['item_name'],
            ];
            $this->db->insert('barang_baru10', $param);
        }
    }

    function laporan_tambah2($post)
    {
        $param = [
            'tanggal' => $post['date'],
            'id_barang' => $post['id_barang'],
            'nama' => $post['nama'],
            'jenis' => $post['jenis'],
            'jumlah' => $post['qty'],
            'keterangan' => $post['item_name'],
        ];

        $this->db->insert('barang_baru2', $param);
    }

    function proses_tambah($data)
    {
        $qty = $data['qty'];
        $id = $data['id_barang'];
        $ci = get_instance();
        $idd = $ci->session->userdata('email');
        $queryId = $ci->db->get_where('info_user', ['iduser' => $idd])->row_array();
        if ($queryId['id'] == 1) {
            $sql = "UPDATE stok_tampil1 SET jumlah = jumlah + '$qty' WHERE id_barang = '$id'";
        }
        if ($queryId['id'] == 2) {
            $sql = "UPDATE stok_tampil1 SET jumlah = jumlah + '$qty' WHERE id_barang = '$id'";
        }
        if ($queryId['id'] == 3) {
            $sql = "UPDATE stok_tampil2 SET jumlah = jumlah + '$qty' WHERE id_barang = '$id'";
        }
        if ($queryId['id'] == 4) {
            $sql = "UPDATE stok_tampil3 SET jumlah = jumlah + '$qty' WHERE id_barang = '$id'";
        }
        if ($queryId['id'] == 5) {
            $sql = "UPDATE stok_tampil4 SET jumlah = jumlah + '$qty' WHERE id_barang = '$id'";
        }
        if ($queryId['id'] == 6) {
            $sql = "UPDATE stok_tampil5 SET jumlah = jumlah + '$qty' WHERE id_barang = '$id'";
        }
        if ($queryId['id'] == 7) {
            $sql = "UPDATE stok_tampil6 SET jumlah = jumlah + '$qty' WHERE id_barang = '$id'";
        }
        if ($queryId['id'] == 8) {
            $sql = "UPDATE stok_tampil7 SET jumlah = jumlah + '$qty' WHERE id_barang = '$id'";
        }
        if ($queryId['id'] == 9) {
            $sql = "UPDATE stok_tampil8 SET jumlah = jumlah + '$qty' WHERE id_barang = '$id'";
        }
        if ($queryId['id'] == 10) {
            $sql = "UPDATE stok_tampil9 SET jumlah = jumlah + '$qty' WHERE id_barang = '$id'";
        }
        if ($queryId['id'] == 11) {
            $sql = "UPDATE stok_tampil10 SET jumlah = jumlah + '$qty' WHERE id_barang = '$id'";
        }
        $this->db->query($sql);
    }

    function proses_tambah2($data)
    {
        $qty = $data['qty'];
        $id = $data['id_barang'];
        $sql = "UPDATE stok_tampil2 SET jumlah = jumlah + '$qty' WHERE id_barang = '$id'";
        $this->db->query($sql);
    }

    function laporan_kurang($post)
    {
        $ci = get_instance();
        $idd = $ci->session->userdata('email');
        $queryId = $ci->db->get_where('info_user', ['iduser' => $idd])->row_array();
        if ($queryId['id'] == 1) {
            $param = [
                'tanggal' => $post['date'],
                'id_barang' => $post['id_barang'],
                'nama' => $post['nama'],
                'jenis' => $post['jenis'],
                'jumlah' => $post['qty'],
                'tujuan' => $post['tujuan'],
                'keterangan' => $post['item_name'],
            ];
            $this->db->insert('barang_keluar', $param);
        }
        if ($queryId['id'] == 2) {
            $param = [
                'tanggal' => $post['date'],
                'id_barang' => $post['id_barang'],
                'nama' => $post['nama'],
                'jenis' => $post['jenis'],
                'jumlah' => $post['qty'],
                'tujuan' => $post['tujuan'],
                'keterangan' => $post['item_name'],
            ];
            $this->db->insert('barang_keluar', $param);
        }
        if ($queryId['id'] == 3) {
            $param = [
                'tanggal' => $post['date'],
                'id_barang' => $post['id_barang'],
                'nama' => $post['nama'],
                'jenis' => $post['jenis'],
                'jumlah' => $post['qty'],
                'tujuan' => $post['tujuan'],
                'keterangan' => $post['item_name'],
            ];
            $this->db->insert('barang_keluar2', $param);
        }
        if ($queryId['id'] == 4) {
            $param = [
                'tanggal' => $post['date'],
                'id_barang' => $post['id_barang'],
                'nama' => $post['nama'],
                'jenis' => $post['jenis'],
                'jumlah' => $post['qty'],
                'tujuan' => $post['tujuan'],
                'keterangan' => $post['item_name'],
            ];
            $this->db->insert('barang_keluar3', $param);
        }
        if ($queryId['id'] == 5) {
            $param = [
                'tanggal' => $post['date'],
                'id_barang' => $post['id_barang'],
                'nama' => $post['nama'],
                'jenis' => $post['jenis'],
                'jumlah' => $post['qty'],
                'tujuan' => $post['tujuan'],
                'keterangan' => $post['item_name'],
            ];
            $this->db->insert('barang_keluar4', $param);
        }
        if ($queryId['id'] == 6) {
            $param = [
                'tanggal' => $post['date'],
                'id_barang' => $post['id_barang'],
                'nama' => $post['nama'],
                'jenis' => $post['jenis'],
                'jumlah' => $post['qty'],
                'tujuan' => $post['tujuan'],
                'keterangan' => $post['item_name'],
            ];
            $this->db->insert('barang_keluar5', $param);
        }
        if ($queryId['id'] == 7) {
            $param = [
                'tanggal' => $post['date'],
                'id_barang' => $post['id_barang'],
                'nama' => $post['nama'],
                'jenis' => $post['jenis'],
                'jumlah' => $post['qty'],
                'tujuan' => $post['tujuan'],
                'keterangan' => $post['item_name'],
            ];
            $this->db->insert('barang_keluar6', $param);
        }
        if ($queryId['id'] == 8) {
            $param = [
                'tanggal' => $post['date'],
                'id_barang' => $post['id_barang'],
                'nama' => $post['nama'],
                'jenis' => $post['jenis'],
                'jumlah' => $post['qty'],
                'tujuan' => $post['tujuan'],
                'keterangan' => $post['item_name'],
            ];
            $this->db->insert('barang_keluar7', $param);
        }
        if ($queryId['id'] == 9) {
            $param = [
                'tanggal' => $post['date'],
                'id_barang' => $post['id_barang'],
                'nama' => $post['nama'],
                'jenis' => $post['jenis'],
                'jumlah' => $post['qty'],
                'tujuan' => $post['tujuan'],
                'keterangan' => $post['item_name'],
            ];
            $this->db->insert('barang_keluar8', $param);
        }
        if ($queryId['id'] == 10) {
            $param = [
                'tanggal' => $post['date'],
                'id_barang' => $post['id_barang'],
                'nama' => $post['nama'],
                'jenis' => $post['jenis'],
                'jumlah' => $post['qty'],
                'tujuan' => $post['tujuan'],
                'keterangan' => $post['item_name'],
            ];
            $this->db->insert('barang_keluar9', $param);
        }
        if ($queryId['id'] == 11) {
            $param = [
                'tanggal' => $post['date'],
                'id_barang' => $post['id_barang'],
                'nama' => $post['nama'],
                'jenis' => $post['jenis'],
                'jumlah' => $post['qty'],
                'tujuan' => $post['tujuan'],
                'keterangan' => $post['item_name'],
            ];
            $this->db->insert('barang_keluar10', $param);
        }
    }

    function laporan_kurang2($post)
    {
        $param = [
            'tanggal' => $post['date'],
            'id_barang' => $post['id_barang'],
            'nama' => $post['nama'],
            'jenis' => $post['jenis'],
            'jumlah' => $post['qty'],
            'tujuan' => $post['tujuan'],
            'keterangan' => $post['item_name'],
        ];

        $this->db->insert('barang_keluar2', $param);
    }

    function proses_kurang($data)
    {
        $qty = $data['qty'];
        $id = $data['id_barang'];
        $ci = get_instance();
        $idd = $ci->session->userdata('email');
        $queryId = $ci->db->get_where('info_user', ['iduser' => $idd])->row_array();
        if ($queryId['id'] == 1) {
            $sql = "UPDATE stok_tampil1 SET jumlah = jumlah - '$qty' WHERE id_barang = '$id'";
        }
        if ($queryId['id'] == 2) {
            $sql = "UPDATE stok_tampil1 SET jumlah = jumlah - '$qty' WHERE id_barang = '$id'";
        }
        if ($queryId['id'] == 3) {
            $sql = "UPDATE stok_tampil2 SET jumlah = jumlah - '$qty' WHERE id_barang = '$id'";
        }
        if ($queryId['id'] == 4) {
            $sql = "UPDATE stok_tampil3 SET jumlah = jumlah - '$qty' WHERE id_barang = '$id'";
        }
        if ($queryId['id'] == 5) {
            $sql = "UPDATE stok_tampil4 SET jumlah = jumlah - '$qty' WHERE id_barang = '$id'";
        }
        if ($queryId['id'] == 6) {
            $sql = "UPDATE stok_tampil5 SET jumlah = jumlah - '$qty' WHERE id_barang = '$id'";
        }
        if ($queryId['id'] == 7) {
            $sql = "UPDATE stok_tampil6 SET jumlah = jumlah - '$qty' WHERE id_barang = '$id'";
        }
        if ($queryId['id'] == 8) {
            $sql = "UPDATE stok_tampil7 SET jumlah = jumlah - '$qty' WHERE id_barang = '$id'";
        }
        if ($queryId['id'] == 9) {
            $sql = "UPDATE stok_tampil8 SET jumlah = jumlah - '$qty' WHERE id_barang = '$id'";
        }
        if ($queryId['id'] == 10) {
            $sql = "UPDATE stok_tampil9 SET jumlah = jumlah - '$qty' WHERE id_barang = '$id'";
        }
        if ($queryId['id'] == 11) {
            $sql = "UPDATE stok_tampil10 SET jumlah = jumlah - '$qty' WHERE id_barang = '$id'";
        }
        $this->db->query($sql);
    }

    function proses_kurang2($data)
    {
        $qty = $data['qty'];
        $id = $data['id_barang'];
        $sql = "UPDATE stok_tampil2 SET jumlah = jumlah - '$qty' WHERE id_barang = '$id'";
        $this->db->query($sql);
    }
}
