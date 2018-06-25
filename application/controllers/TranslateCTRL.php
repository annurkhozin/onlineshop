<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TranslateCTRL extends Users {
/**
  * Create date 19 March 2017 
  * @author	Nur Khozin ==> nurkhozin95@gmail.com
  * @link	https://ciptasoft.com
  * @since	Version 1.0.0
  * @filesource
**/

	function __construct(){
		parent::__construct();
	}
	public function index()	{
		$key_encode=$this->input->post('key_encode');
		$key_decode=$this->input->post('key_decode');
		$data['key_encode']=$key_encode;
		$data['key_decode']=$key_decode;
		$data['hasil_encode']=paramEncrypt($key_encode);
		$data['hasil_decode']=paramDecrypt($key_decode);
		$template=paramEncrypt('translate');
		$this->load->view('LanderApp/'.$template, $data);
	}
	public function forgotPassword()	{
		$this->public_data;

        $this->load->model('EmailConfig'); // load configurations email
		$fromMail = $this->EmailConfig->sendDefault(); // load configurations email
		$this->email->from($fromMail['smtp_user'], $fromMail['name']);
        $this->email->to('nurkhozin95@gmail.com'); 

        $this->email->subject('Email Test');
		$this->email->message('Test pesan Email');  

        if (!$this->email->send()) {  
			show_error($this->email->print_debugger());
		}else{  
			echo 'Success to send email';   
		}  
	}
}
