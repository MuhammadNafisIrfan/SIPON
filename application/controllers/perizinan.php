<?php

class Perizinan extends CI_Controller {
	public function index()
	{
		$data['perizinan'] = $this->m_perizinan->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('perizinan', $data);
		$this->load->view('templates/footer');
	}

	public function pdf(){
		$this->load->library('dompdf_gen');

		$data['perizinan'] = $this->m_perizinan->tampil_data('perizinan')->result();

		$this->load->view('perizinan_pdf', $data);

		$paper_size = 'A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan_perizinan.pdf", array('Attachment' =>0));
    }
}