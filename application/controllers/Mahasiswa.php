<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function index()
	{
		$data['nama_lengkap'] = "sopi amalia";
		$data['nim'] = 1810330012;
		$mahasiswa[0] = array(
			'nim' => 12345,
			'nama' => "sopi"
		);
		$data['mahasiswa'] = $mahasiswa;
		$this->load->view('mahasiswa_index', $data);
	}

	public function tambah()
	{
		$this->load->view('mahasiswa_tambah');
	}

}

/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php */