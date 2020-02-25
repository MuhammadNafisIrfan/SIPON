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
	public function tambah_aksi()
	{
		$nama_santri = $this->input->post('nama_santri');
		$pelanggaran = $this->input->post('pelanggaran');
		$tanggal = $this->input->post('tanggal');
		

		$data = array(

			'nama_santri'	=> $nama_santri,
			'pelanggaran'	=> $pelanggaran,
			'tanggal'	=> $tanggal,
			

		);

		$this->m_pelanggaran->input_data($data,'pelanggaran');
		redirect('pelanggaran/index');
	}
	public function search(){
		$keyword = $this->input->post('keyword');
		$data['pelanggaran']=$this->m_pelanggaran->get_keyword($keyword);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pelanggaran', $data);
		$this->load->view('templates/footer');
	}
}
