<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Ccontroller extends CI_Controller

{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Cmodel');
	}
	
	public function index()
	{
		$data['data_table'] = $this->Cmodel->getAll();
		$this->load->view('Remed_index', $data);
	}

	public function tambah()
	{
		$this->load->view('Remed_tambah');

	}

	public function simpan_data()
	{
		$id_12 			= $this->input->post('txtid_12');
		$jurusan 		= $this->input->post('txtjurusan');
		$kelas 			= $this->input->post('txtkelas');
		$isi			= $this->input->post('txtisi');

		$data = [
			'id_12' 		=> $id_12,
			'jurusan' 		=> $jurusan,
			'kelas' 		=> $kelas,
			'isi'			=> $isi
		];

		// print_r($data)
		$this->Cmodel->simpan_data($data);

		redirect('Ccontroller/index');

	}
}
