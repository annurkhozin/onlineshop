<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PublicCTRL extends Users {

	function beranda() {
		$data	= $this->public_data;
		$data['title']='Beranda';
		$data['content']='Beranda/beranda.php';
		$this->load->view('Styler/Template', $data);
	}
}
