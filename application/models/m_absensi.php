<?php

class M_absensi extends CI_Model{
    
    public function tampil_data()
    {
        $this->db->select('*');
        $this->db->from('santri');
        $this->db->join('absensi', 'absensi.id = santri.id');

        $query = $this->db->get();
 
$query = $this->db->get();
    }
    public function input_data($data,$table){
        $this->db->insert($table,$data);
    }
    public function edit_data($where, $table){
        return $this->db->get_where($table,$where);
    }

}