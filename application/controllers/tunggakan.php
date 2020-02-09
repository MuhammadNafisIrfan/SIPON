<?php

class Tunggakan extends CI_Controller {
	public function index()
	{
		$data['tunggakan'] = $this->m_tunggakan->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('tunggakan', $data);
		$this->load->view('templates/footer');
	}
}
