<?php

class M_perizinan extends CI_Model{
    public function tampil_data()
    {
        return $this->db->get('perizinan');
    }
}