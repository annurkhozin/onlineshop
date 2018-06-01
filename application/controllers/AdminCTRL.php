<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminCTRL extends NK {

	public function beranda() {
		$data	= $this->public_data;
		$data['title']	= 'Beranda';
		$data['content']='Beranda/beranda.php';
		$this->load->view('LanderApp/Template',$data);
	}
}
