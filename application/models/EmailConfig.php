<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmailConfig extends CI_Model{
	public function __construct() {
		parent::__construct();
		$this->load->library('email');
	}

	public function sendDefault(){
		$row = $this->M__db->get_all('emailConfig__')->row_array();
		$config = array(
			'protocol' => $row['protocol'],
			'smtp_host' => $row['smtp_host'],
			'smtp_port' => $row['smtp_port'],
			'smtp_timeout' => $row['smtp_timeout'],
			'smtp_user' => $row['smtp_user'],
			'smtp_pass' => paramDecrypt($row['smtp_pass']),
			'charset' => $row['charset'],
			'newline' => "\r\n",
			'mailtype' => $row['mailtype'],
			'validation' => $row['validation']
		);
		$this->email->initialize($config);
		$return = array(
			'name' => $row['name'],
			'smtp_user' => $row['smtp_user']
		);
		return $return;
	}
}