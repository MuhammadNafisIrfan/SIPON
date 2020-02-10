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
}