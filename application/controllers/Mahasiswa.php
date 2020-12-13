<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_mahasiswa');
	}

	public function index()
	{
		$data['data_table'] = $this->m_mahasiswa->getAll();
		$this->load->view('mahasiswa_index', $data);
	}

	public function tambah()
	{
		$this->load->view('mahasiswa_tambah');

	}

	public function simpan_data()
	{
		$data = array(
			'nim' 		=> $this->input->post('nim'),
			'nama' 		=> $this->input->post('nama'),
			'alamat' 	=> $this->input->post('alamat'),
		);

		// print_r($data)
		$this->m_mahasiswa->simpan_data($data);
		redirect('mahasiswa/index','refresh');

	}

}

/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php */