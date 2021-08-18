<?php

class M_data extends CI_Model
{
    function tampil_data()
    {
        return $this->db->get('user');
    }

    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function penjumlahan($nama, $jenis, $jumlah, $tanggal)
    {
        $this->db->query("INSERT INTO barang_baru (nama,jenis,jumlah,tanggal) VALUES ('$nama','$jenis','$jumlah','$tanggal')");
        foreach ($this->cart->contents() as $item) {
            $data = array(
                'nama' => $item['kode'],
                'jenis' => $item['type'],
                'jumlah' => $item['jumlah'],
                'tanggal' => $item['tanggal']
            );
            $this->db->insert('barang_baru', $data);
            $this->db->query("UPDATE stok_tapil1 SET jumlah=jumlah+'$item[jumlah]' WHERE nama='$item[name]'");
        }
        return true;
    }

    function get_kobar()
    {
        $q = $this->db->query("SELECT MAX(RIGHT(id_barang,6)) AS kd_max FROM material");
        $kd = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int)$k->kd_max) + 1;
                $kd = sprintf("%06s", $tmp);
            }
        } else {
            $kd = "000001";
        }
        return "BR" . $kd;
    }
}
