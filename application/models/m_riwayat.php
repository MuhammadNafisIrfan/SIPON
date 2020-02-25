<?php

class M_riwayat extends CI_Model{
    public function tampil_data()
    {
        return $this->db->get('riwayat');
    }
    public function input_data($data,$table){
        $this->db->insert($table,$data);
    }
    public function get_keyword($keyword){
        $this->db->select('*');
        $this->db->from('riwayat');
        $this->db->like('nama_santri', $keyword);
        $this->db->or_like('kelas', $keyword);
        $this->db->or_like('semester', $keyword);
        $this->db->or_like('tanggal', $keyword);
        return $this->db->get()->result();
    }
}