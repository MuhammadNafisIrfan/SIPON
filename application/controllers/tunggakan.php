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

	public function hapus ($id)
	{
		$where = array ('id' => $id);
		$this->m_tunggakan->hapus_data($where, 'tunggakan');
		redirect ('tunggakan/index');
	}

	public function tambah_aksi(){
		$nama 			= $this->input->post('nama'); 
		$nominal 		= $this->input->post('nominal');
		$keterangan 	= $this->input->post('keterangan');

		$data = array (
			'nama' 			=> $nama,
			'nominal' 		=> $nominal,
			'keterangan' 	=> $keterangan
		);
		$this->m_tunggakan->input_data($data, 'tunggakan');
		redirect('tunggakan/index');
	}

	public function edit($id){
		$where = array('id' => $id);
		$data['tunggakan'] = $this->m_tunggakan->edit_data($where,'tunggakan')->result();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit', $data);
		$this->load->view('templates/footer');

	}
	public function update()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$nominal = $this->input->post('nominal');
		$keterangan = $this->input->post('keterangan');
		
		

		$data = array(

			
			'nama'	=> $nama,
			'nominal'	=> $nominal,
			'keterangan'	=> $keterangan,

		);

		$where = array(
			'id'	=> $id
		);

		$this->myidentitas->update_data($where,$data,'tunggakan');
		redirect('tunggakan/index');

}
public function pdf(){
	$this->load->library('dompdf_gen');

	$data['tunggakan'] = $this->m_tunggakan->tampil_data('tunggakan')->result();

	$this->load->view('tunggakan_pdf', $data);

	$paper_size = 'A4';
	$orientation = 'landscape';
	$html = $this->output->get_output();
	$this->dompdf->set_paper($paper_size, $orientation);

	$this->dompdf->load_html($html);
	$this->dompdf->render();
	$this->dompdf->stream("laporan_tunggakan.pdf", array('Attachment' =>0));
}
public function search(){
	$keyword = $this->input->post('keyword');
	$data['tunggakan']=$this->m_tunggakan->get_keyword($keyword);
	$this->load->view('templates/header');
	$this->load->view('templates/sidebar');
	$this->load->view('tunggakan', $data);
	$this->load->view('templates/footer');
}
}
