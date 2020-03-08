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
	public function tambah()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('identitas');
		$this->load->view('templates/footer');
	}
	public function tambah_aksi()
	{
		$nama = $this->input->post('nama');
		$nis = $this->input->post('nis');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$alamat = $this->input->post('alamat');
		$wali = $this->input->post('wali');
		$kelas_pondok = $this->input->post('kelas_pondok');
		$kelas_payung = $this->input->post('kelas_payung');
		$semester = $this->input->post('semester');
		$image = $_FILES['image'];

		if($image=''){}else{
			$config['upload_path']  ='./assets/foto';
			$config['allowed_types'] = 'jpg|png|gif';

			$this->load->library('upload',$config);
			if(!$this->upload ->do_upload('image')){
				echo "Upload Gagal"; die();
			}else{
				$image=$this->upload->data('file_name'); 
			}
		}
		

		$data = array(

			'nama'	=> $nama,
			'nis'	=> $nis,
			'tempat_lahir'	=> $tempat_lahir,
			'tanggal_lahir'	=> $tanggal_lahir,
			'alamat'	=> $alamat,
			'wali'	=> $wali,
			'kelas_pondok'	=> $kelas_pondok,
			'kelas_payung'	=> $kelas_payung,
			'semester'	=> $semester,
			'image'	=> $image,
			

		);

		$this->myidentitas->input_data($data,'santri');
		redirect('identitas/index');
	}

	public function hapus ($id)
	{
		$where = array ('id' => $id);
		$this->myidentitas->hapus_data($where, 'santri');
		redirect ('identitas/index');
	}

	public function edit ($id)
	{
		
		$where = array ('id' =>$id);
		$data['identitas'] = $this->myidentitas->edit($where,'santri')->result();

		$this->load->view('templates/header');
		
		$this->load->view('iedit',$data);
		$this->load->view('templates/footer');

	}
	public function update()
	{
		
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$nis = $this->input->post('nis');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$alamat = $this->input->post('alamat');
		$wali = $this->input->post('wali');
		$kelas_pondok = $this->input->post('kelas_pondok');
		$kelas_payung = $this->input->post('kelas_payung');
		$semester = $this->input->post('semester');
		// $image = $this->input->post('image');
		$image = $_FILES['image'];

		if($image='') {}else{
			$config['upload_path']  ='./assets/foto';
			$config['allowed_types'] = 'jpg|png|gif';

			$this->load->library('upload',$config);
			if(!$this->upload ->do_upload('image')){
				echo "Upload Gagal"; die();
			}else{
				$image=$this->upload->data('file_name'); 
			}
		}
		

	
		$data = array(

			
			'nama'	=> $nama,
			'nis'	=> $nis,
			'tempat_lahir'	=> $tempat_lahir,
			'tanggal_lahir'	=> $tanggal_lahir,
			'alamat'	=> $alamat,
			'wali'	=> $wali,
			'kelas_pondok'	=> $kelas_pondok,
			'kelas_payung'	=> $kelas_payung,
			'semester'	=> $semester,
			'image'	=> $image
			

		);

		$ads = array(
			'id'	=> $id
		);

		$this->myidentitas->update_data($ads,$data,'santri');
		redirect('identitas/index');

		$this->log_to_javascript_console->write($ads);
	}
	public function pdf(){
		$this->load->library('dompdf_gen');

		$data['identitas'] = $this->myidentitas->tampil_data('identitas')->result();

		$this->load->view('identitas_pdf', $data);

		$paper_size = 'A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("identitas_santri.pdf", array('Attachment' =>0));
	}

	public function detail($id){
		$this->load->model('myidentitas');
		$detail = $this->myidentitas->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail',$data);
		$this->load->view('templates/footer');
	}


	public function absensi()
	{
	$data['absensi'] = $this->myidentitas->tampil_absensi()->result();
	$this->load->view('templates/header');
	$this->load->view('templates/sidebar');
	$this->load->view('absensi', $data);
	$this->load->view('templates/footer');
	}

	public function search(){
		$keyword = $this->input->post('keyword');
		$data['identitas']=$this->myidentitas->get_keyword($keyword);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('identitas', $data);
		$this->load->view('templates/footer');
	}

	public function getAbsensi(){
		$this->db->select("santri.id, santri.nis, santri.nama");
		$this->db->from('santri');
		$this->db->join('absensi', 'absensi.id = santri.id');
		$query = $this->db->get();
		return $query->result();
	}

}