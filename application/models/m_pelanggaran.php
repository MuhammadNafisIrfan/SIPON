<?php

class M_pelanggaran extends CI_Model{
    public function tampil_data()
    {
        return $this->db->get('pelanggaran');
    }
}