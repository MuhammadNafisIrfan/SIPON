<?php
class M_tunggakan extends CI_Model{
    public function tampil_data()
    {
        return $this->db->get('tunggakan');
    }
    public function input_data($data,$table){
        $this->db->insert($table,$data);
    }
    public function edit_data($where, $table){
       return $this->db->get_where($table,$where);
    }
    public function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function get_keyword($keyword){
        $this->db->select('*');
        $this->db->from('tunggakan');
        $this->db->like('nama', $keyword);
        $this->db->or_like('nominal', $keyword);
        $this->db->or_like('keterangan', $keyword);
        return $this->db->get()->result();
    }
}