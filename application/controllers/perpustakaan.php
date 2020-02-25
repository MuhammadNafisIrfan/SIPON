<?php

class Perpustakaan extends CI_Controller {
	public function index()
	{
		$data['perpustakaan'] = $this->m_perpustakaan->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('perpustakaan', $data);
		$this->load->view('templates/footer');
	}
	public function pdf(){
		$this->load->library('dompdf_gen');

		$data['perpustakaan'] = $this->m_perpustakaan->tampil_data('perpustakaan')->result();

		$this->load->view('perpustakaan_pdf', $data);

		$paper_size = 'A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan_pinjaman.pdf", array('Attachment' =>0));
	}
	public function tambah_aksi(){
		$nama_santri 		= $this->input->post('nama_santri');
		$plp 		        = $this->input->post('plp');
		$pinjaman 	        = $this->input->post('pinjaman');
        $tanggal_minjam 	= $this->input->post('tanggal_minjam');
        $tanggal_balik	    = $this->input->post('tanggal_balik');

		$data = array (
			'nama_santri' 	    => $nama_santri,
			'plp' 		        => $plp,
			'pinjaman' 		    => $pinjaman,
            'tanggal_minjam' 	=> $tanggal_minjam,
            'tanggal_balik' 	=> $tanggal_balik
		);
		$this->m_perpustakaan->input_data($data, 'perpustakaan');
		redirect('perpustakaan/index');
	}
	public function search(){
		$keyword = $this->input->post('keyword');
		$data['perpustakaan']=$this->m_perpustakaan->get_keyword($keyword);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('perpustakaan', $data);
		$this->load->view('templates/footer');
	}
}
