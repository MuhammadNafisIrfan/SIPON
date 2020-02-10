<?php

class Pelanggaran extends CI_Controller {
	public function index()
	{
		$data['pelanggaran'] = $this->m_pelanggaran->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pelanggaran', $data);
		$this->load->view('templates/footer');
	}
}
