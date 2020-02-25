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
	public function pdf(){
		$this->load->library('dompdf_gen');

		$data['riwayat'] = $this->m_riwayat->tampil_data('riwayat')->result();

		$this->load->view('riwayat_pdf', $data);

		$paper_size = 'A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan_riwayat.pdf", array('Attachment' =>0));
	}
	public function tambah_aksi(){
		$nama 		= $this->input->post('nama_santri');
		$kelas 		= $this->input->post('kelas');
		$semester 	= $this->input->post('semester');
		$tanggal 	= $this->input->post('tanggal');

		$data = array (
			'nama_santri' 	=> $nama,
			'kelas' 		=> $kelas,
			'semester' 		=> $semester,
			'tanggal' 		=> $tanggal
		);
		$this->m_riwayat->input_data($data, 'riwayat');
		redirect('riwayat/index');
	}
	public function search(){
		$keyword = $this->input->post('keyword');
		$data['riwayat']=$this->m_riwayat->get_keyword($keyword);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('riwayat', $data);
		$this->load->view('templates/footer');
	}
}
