<?php

class Identitas extends CI_Controller {
	public function index()
	{
		$data['identitas'] = $this->myidentitas->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('identitas', $data);
		$this->load->view('templates/footer');
	}
}
