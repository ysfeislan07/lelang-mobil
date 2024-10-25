<?php

class Lelang_model extends CI_Model 
{
    public function jumlahDataLelang()
    {
        $query = $this->db->get('lelang');
        $jumlah = $query->num_rows();

        return $jumlah;
    }

    public function dataLelang()
    {
        $this->db->select('daftar_lelang.*, lelang.*, pengguna.*');
        $this->db->from('daftar_lelang');
        $this->db->join('lelang', 'daftar_lelang.id_mobil = lelang.id', 'inner');
        $this->db->join('pengguna', 'daftar_lelang.id_pengguna = pengguna.id', 'inner');
        $query = $this->db->get();
        return $query->result();
    }

    public function ambilDataLelangASC()
    {
        $this->db->select('*');
        $this->db->from('lelang');
        $this->db->order_by('sesi_lelang', 'DESC');

        $query = $this->db->get();
        $results = $query->result();

        return $results;
}


    public function jumlahLelangDiajukan()
    {
        $query = $this->db->get('daftar_lelang');
        $jumlah = $query->num_rows();

        return $jumlah;
    }

    public function jumlahDiajukan($email)
    {
       $query = $this->db->query('SELECT SUM(lelang_diajukan) as lelang_diajukan FROM daftar_lelang WHERE lelang_diajukan = 1 AND email_pengguna = ?', array($email));
       $result = $query->row();

       $total_diajukan = $result->lelang_diajukan;

       return $total_diajukan;
    }

    public function jumlahDimenangkan($email)
    {
        $query = $this->db->query('SELECT SUM(lelang_dimenangkan) as lelang_dimenangkan FROM daftar_lelang WHERE lelang_dimenangkan = 1 AND email_pengguna = ?', array($email));
        $result = $query->row();

        $lelang_dimenangkan = $result->lelang_dimenangkan;

        return $lelang_dimenangkan;
    }

    public function getMobil($limit, $start)
    {
        return $this->db->get('lelang', $limit, $start)->result_array();
    }

    public function lihatAjuanDariHarga($id_mobil)
    {
        $this->db->select('*');
        $this->db->from('daftar_lelang');
        $this->db->where('id_mobil', $id_mobil);
        $this->db->order_by('jumlah_lelang', 'DESC');
        $this->db->limit(3);

        $query = $this->db->get();
        $results = $query->result_array();

        return $results;
    }

}