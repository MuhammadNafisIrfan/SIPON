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
}
