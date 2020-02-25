<?php

class M_pelanggaran extends CI_Model{
    public function tampil_data()
    {
        return $this->db->get('pelanggaran');
    }
    public function input_data($data,$table){
        $this->db->insert($table,$data);
    }
    public function get_keyword($keyword){
        $this->db->select('*');
        $this->db->from('pelanggaran');
        $this->db->like('nama_santri', $keyword);
        $this->db->or_like('pelanggaran', $keyword);
        $this->db->or_like('tanggal', $keyword);
        return $this->db->get()->result();
    }
}