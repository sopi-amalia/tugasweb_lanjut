<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		echo "ini fungsi index,";
		// $this->load->view('welcome_message');
	}

	public function nama($param1, $param2)
	{
		echo "Hello sopi, ". $param1 ;
		echo "".$param2 . "";
	}
}
