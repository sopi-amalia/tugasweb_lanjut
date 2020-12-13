<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Amodel extends CI_Model {

	// CRUD
	public function getAll()
	{
		// select+from mahasiswa
		return $this->db->get('table_a')->result();
	}
	public function simpan_data($object)
	{
		 $this->db->insert('table_a',$object);
	}

}

