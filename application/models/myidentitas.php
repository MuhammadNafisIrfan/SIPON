<?php

class Myidentitas extends CI_Model{
    public function tampil_data()
    {
        return $this->db->get('santri');
    }
    public function input_data($data,$table){
        $this->db->insert($table,$data);
    }
    public function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function edit($where,$table){
        return $this->db->get_where($table,$where);
    }
    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    public function detail_data($id = NULL){
        $query = $this->db->get_where('santri', array('id' => $id))->row();
        return $query;
    }
    public function get_keyword($keyword){
        $this->db->select('*');
        $this->db->from('santri');
        $this->db->like('nama', $keyword);
        $this->db->or_like('tempat_lahir', $keyword);
        $this->db->or_like('tanggal_lahir', $keyword);
        $this->db->or_like('alamat', $keyword);
        $this->db->or_like('wali', $keyword);
        $this->db->or_like('kelas_pondok', $keyword);
        $this->db->or_like('kelas_payung', $keyword);
        $this->db->or_like('semester', $keyword);
        return $this->db->get()->result();
    }
}