<?php

class M_perpustakaan extends CI_Model{
    public function tampil_data()
    {
        return $this->db->get('perpustakaan');
    }
    public function input_data($data,$table){
        $this->db->insert($table,$data);
    }
    public function get_keyword($keyword){
        $this->db->select('*');
        $this->db->from('perpustakaan');
        $this->db->like('nama_santri', $keyword);
        $this->db->or_like('plp', $keyword);
        $this->db->or_like('pinjaman', $keyword);
        $this->db->or_like('tanggal_minjam', $keyword);
        $this->db->or_like('tanggal_balik', $keyword);
        return $this->db->get()->result();
    }
}