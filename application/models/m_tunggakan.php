<?php

class M_tunggakan extends CI_Model{
    public function tampil_data()
    {
        return $this->db->get('tunggakan');
    }
}