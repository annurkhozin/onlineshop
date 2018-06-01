<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeCTRL extends Users {

	public function index() {
		$this->load->view('welcome_message');
	}
}
