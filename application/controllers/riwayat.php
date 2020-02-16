<?php

class Riwayat extends CI_Controller {
	public function index()
	{
		$data['riwayat'] = $this->m_riwayat->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('riwayat', $data);
		$this->load->view('templates/footer');
	}
}
