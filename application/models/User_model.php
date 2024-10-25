<?php

class User_model extends CI_Model 
{
    public function jumlahPenggunaSesi()
    {
        $query = $this->db->get('pengguna');
        $jumlah = $query->num_rows();

        return $jumlah;
    }

    public function getPengguna($limit, $start)
    {
        return $this->db->get('pengguna', $limit, $start)->result_array();
    }
}