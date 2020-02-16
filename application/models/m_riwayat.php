<?php

class M_riwayat extends CI_Model{
    public function tampil_data()
    {
        return $this->db->get('riwayat');
    }
}