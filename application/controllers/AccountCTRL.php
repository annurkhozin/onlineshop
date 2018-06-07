<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccountCTRL extends Members {

	function dataAkun() {
		$data	= $this->public_data;
		$data['title']='Akun';
		$data['content']='Akun/dataAkun.php';
		$where = array(
			'member_id' => $this->session->userdata('session_user'),
			);
		$data['akun'] = $this->M__db->cek('members__','*',$where)->row_array();
		$data['address'] = $this->M__db->cek('addressMembers__','*',$where)->row_array();
		$this->load->view('Styler/Template', $data);
	}
}
