<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TranslateCTRL extends CI_Controller {
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
}
