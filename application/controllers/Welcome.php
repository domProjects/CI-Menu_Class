<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->library('menu');

		$data['menu'] = $this->menu->generate();

		$this->load->view('welcome_message', $data);
	}
}
