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

	public function pdf(){
		$this->load->library('dompdf_gen');

		$data['pelanggaran'] = $this->m_pelanggaran->tampil_data('pelanggaran')->result();

		$this->load->view('laporan_pdf', $data);

		$paper_size = 'A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan_pelanggaran.pdf", array('Attachment' =>0));
	}
}
