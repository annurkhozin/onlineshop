<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthCTRL extends Users {

	function login() {
		$data	= $this->public_data;
		$data['title']='Login';
		$this->load->view('LanderApp/Login', $data);
	}

	public function prosesLogin()	{
		$where = array(
			'username' => paramEncrypt($this->input->post('username')),
			'password' => paramEncrypt($this->input->post('password')),
			'is_active' => 1
			);
		$hasil=$this->M__db->cek('users__','*',$where);
		if($hasil->num_rows()>0){
			$hasil_row=$hasil->row_array();
			$data=array(
				"session_user"=> $hasil_row['user_id'],
				"level_user"=> 1
			);
			$this->session->set_userdata($data);
			redirect(base_url().'Admin/Beranda');
		}else{
			$this->session->set_flashdata('error','Username / password tidak sesuai!');	
			redirect(base_url().'Login');
		}
	}

	public function deleteSession(){
		$this->session->unset_userdata('session_user');
		$this->session->unset_userdata('level_user');
		redirect (base_url().'Login');
	}
}
