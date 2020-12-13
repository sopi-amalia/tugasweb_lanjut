<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acontroller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Amodel');
	}

	public function index()
	{
		$data['data_table'] = $this->Amodel->getAll();
		$this->load->view('uts1_index', $data);
	}

	public function tambah()
	{
		$this->load->view('uts_tambah');

	}

	public function simpan_data()
	{
		$data = array(
			'id_012' 		=> $this->input->post('id_012'),
			'jurusan' 		=> $this->input->post('jurusan'),
			'kelas' 		=> $this->input->post('kelas'),
			'isi'			=> $this->input->post('isi')
		);

		// print_r($data)
		$this->Amodel->simpan_data($data);
		redirect('table_a/index','refresh');

	}

}