<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmailCTRL extends Users {

	public function sendEmail()	{
		$this->load->library('email');
		$row = $this->M__db->get_all('emailConfig__')->row_array();
		$config = array(
			'protocol' => $row['protocol'],
			'smtp_host' => $row['smtp_host'],
			'smtp_port' => $row['smtp_port'],
			'smtp_timeout' => $row['smtp_timeout'],
			'smtp_user' => $row['smtp_user'],
			'smtp_pass' => $row['smtp_pass'],
			'charset' => $row['charset'],
			'mailtype' => $row['mailtype'],
			'validation' => $row['validation']
		);
		print_r($config); die;
		// $config['protocol']    = 'smtp';
        // $config['smtp_host']    = 'ssl://smtp.gmail.com';
        // $config['smtp_port']    = '465';
        // $config['smtp_timeout'] = '7';
        // $config['smtp_user']    = '1741723012kh@gmail.com';
        // $config['smtp_pass']    = '23041995kh';
        // $config['charset']    = 'utf-8';
        // $config['newline']    = "\r\n";
        // $config['mailtype'] = 'html';
        // $config['validation'] = TRUE; 

        $this->email->initialize($config);

        $this->email->from('1741723012kh@gmail.com', 'Tester');
        $this->email->to('nurkhozin95@gmail.com'); 

        $this->email->subject('Email Test');
		$this->email->message('
		<!DOCTYPE html>
		<html>
		<head>
			<title></title>
		</head>
		<body>
			<h2>Test Message</h2>
		</body>
		</html>');  

        if (!$this->email->send()) {  
			show_error($this->email->print_debugger());   
		}else{  
			echo 'Success to send email';   
		}  
	}

}
