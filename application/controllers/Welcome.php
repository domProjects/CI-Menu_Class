<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		// Load library menu
		$this->load->library('menu');

		// Basic
		$data['menu_1'] = $this->menu->generate();

		// With Bootstrap
		$template_2 = array(
			'menu_open' => '<ul class="nav flex-column">',
			'menu_close' => '</ul>',
			'menu_sub_open' => '<ul>',
			'menu_sub_close' => '</ul>',
			'menu_item_open' => '<li class="nav-item">',
			'menu_item_close' => '</li>',
			'menu_anchor_attributes' => 'class="nav-link"'
		);
		$this->menu->set_template($template_2);

		$data['menu_2'] = $this->menu->generate();

		// Load page
		$this->load->view('welcome_message', $data);
	}
}
