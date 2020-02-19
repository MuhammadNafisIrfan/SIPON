<?php

class M_riwayat extends CI_Model{
    public function tampil_data()
    {
        return $this->db->get('riwayat');
    }
    public function input_data($data,$table){
        $this->db->insert($table,$data);
    }
}