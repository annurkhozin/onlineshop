<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthCTRL extends Users {

	function registerMember() {
		$data	= $this->public_data;
		$data['title']='Register';
		$data['content']='Auth/register.php';
		$this->load->view('Styler/Template', $data);
	}

	public function prosesRegister() {
		$this->form_validation->set_rules('fullname','Nama Lengkap','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required');
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');
		if($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('error',validation_errors());
		}else{
			if($this->input->post('password')!=$this->input->post('confirmPass')){
				$this->session->set_flashdata('error','Konfirmasi password tidak sama');
				
			}else{
				$where = array(
					'email' => $this->input->post('email')
					);
				$hasil=$this->M__db->cek('members__','member_id',$where);
				if($hasil->num_rows()>0){
					$this->session->set_flashdata('error','Email sudah terdaftar!');
				}else{
					$where = array(
						'username' => paramEncrypt($this->input->post('username'))
						);
					$hasil=$this->M__db->cek('members__','member_id',$where);
					if($hasil->num_rows()>0){
						$this->session->set_flashdata('error','Username sudah digunakan!');
					}else{
						$this->db->trans_begin();
						$data = array(
							'fullname' => $this->input->post('fullname'),
							'email' => $this->input->post('email'),
							'username' => paramEncrypt($this->input->post('username')),
							'password' => paramEncrypt($this->input->post('password')),
							'join_date' => date('Y-m-d H:i:s'),
							'is_active' => 0
							);
						$this->M__db->simpan('members__',$data);
						if ($this->db->trans_status() === FALSE) {
							$this->db->trans_rollback();
							$this->session->set_flashdata('error','Gagal Mendaftar');	
						}else{
							$this->load->model('EmailConfig'); // load configurations email
							$fromMail = $this->EmailConfig->sendDefault(); // load configurations email
							$this->email->from($fromMail['smtp_user'], $fromMail['name']);
							$this->email->to($this->input->post('email')); 
							$where = array(
								'name' => 'verifikasi_akun',
								'is_active' => 1
								);
							$hasil=$this->M__db->cek('emailTemplate__','subject, message',$where)->row_array();
							if($hasil==null){
								$this->db->trans_rollback();
								$this->session->set_flashdata('error','Gagal Mendaftar');	
							}else{
								$this->email->subject($hasil['subject']);
								$content = $hasil['message'];
								$url_verifikasi = base_url().'Verifikasi/'.paramEncrypt($this->input->post('email'));
								$vars = array(
									'{$name_user}'		=> $this->input->post('fullname'),
									'{$url_verifikasi}' => $url_verifikasi,
									'{$name_system}'	=> $this->public_data['info']['name_app']
								);
								$body = strtr($content, $vars);
								$this->email->message($body);
								if (!$this->email->send()) {
									$this->db->trans_rollback();
									$this->session->set_flashdata('error','Gagal Mendaftar');
								}else{ 
									$this->db->trans_commit();									
									$this->session->set_flashdata('success','Sukses mendaftar, Silahkan cek kotak masuk Email '.$this->input->post('email'));	
								}
							}
						}		
					}
				}
			}
		}
		redirect(base_url().'Register');
	}

	function verifikasiAkun() {
		$where = array(
			'email' => paramDecrypt($this->uri->segment(2))
			);
		$data = array(
			'is_active' => 1
			);
		$this->M__db->update('members__',$where,$data);
		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			$this->session->set_flashdata('error','Gagal Verifikasi akun!');	
		}else{
			$this->db->trans_commit();
			$this->session->set_flashdata('success','Sukses Verifkasi akun!');	
		}
		redirect(base_url().'Register');
	}

	public function prosesLoginMember()	{
		$where = array(
			'username' => paramEncrypt($this->input->post('username')),
			'password' => paramEncrypt($this->input->post('password')),
			);
		$hasil=$this->M__db->cek('members__','*',$where);
		if($hasil->num_rows()>0){
			$hasil_row=$hasil->row_array();
			if($hasil_row['is_active']!=1){
				$this->session->set_flashdata('error','Akun anda belum aktif, mohon cek kotak masuk email anda');	
				redirect(base_url().'Register');
			}else{
				$data=array(
					"session_user"=> $hasil_row['member_id'],
					"level_user"=> 0
				);
				$this->session->set_userdata($data);
				$where = array(
					'member_id' => $hasil_row['member_id'],
					'is_active' => 1
					);
				$add=$this->M__db->cek('addressMembers__','*',$where);
				if($add->num_rows()>0){
					$this->session->set_flashdata('success','Berhasil Masuk dengan akun '.$this->input->post('username'));			
					redirect(base_url());
				}else{
					$this->session->set_flashdata('success','Berhasil Masuk dengan akun '.$this->input->post('username'));			
					$this->session->set_flashdata('warning','Mohon Melengkapi akun anda');	
					redirect(base_url().'Account');				
				}
			}
		}else{
			$this->session->set_flashdata('error','Username / password tidak sesuai!');	
			redirect(base_url().'Register');
		}
	}


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
			redirect(base_url().'LogiN');
		}
	}

	public function deleteSession(){
		$this->session->unset_userdata('session_user');
		$this->session->unset_userdata('level_user');
		redirect (base_url());
	}
}
