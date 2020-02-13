<?php 
    class Absensi extends CI_CONTROLLER {

        public function index()
        {
            $data ['absensi'] = $this -> m_absensi -> tampil_data() -> result();

            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('absensi', $data);
            $this->load->view('templates/footer');
        }
    }
?>