<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmailCTRL extends Admins {

	public function getData() {
		$data	= $this->public_data;
		$data['title']	= 'Email';
		$data['currentPage'] = 'email';
		$data['data']=$this->M__db->get_all('emailConfig__')->row_array();
		$data['content']='Email/viewData.php';
		$this->load->view('LanderApp/Template',$data);
	}

	public function saveData(){
		$this->form_validation->set_rules('name','Nama Akun','trim|required');
		$this->form_validation->set_rules('smtp_user','Mail User','trim|required');
		$this->form_validation->set_rules('smtp_pass','Mail Password','trim|required');
		$this->form_validation->set_rules('protocol','Protocol','trim|required');
		$this->form_validation->set_rules('smtp_port','smtp_port','trim|required');
		$this->form_validation->set_rules('smtp_host','Host','trim|required');
		$this->form_validation->set_rules('smtp_timeout','Timeout','trim|required');
		$this->form_validation->set_rules('charset','Charset','trim|required');
		$this->form_validation->set_rules('mailtype','Mail type','trim|required');
		$this->form_validation->set_rules('validation','Validation','trim|required');
		if($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('error','Konfigurasi Email GAGAL Di simpan');		
		}else{
			$where = array(
				'email_id' => $this->input->post('email_id')
			);
			$data = array(
				'name' => $this->input->post('name'),
				'smtp_user' => $this->input->post('smtp_user'),
				'smtp_pass' => paramEncrypt($this->input->post('smtp_pass')),
				'protocol' => $this->input->post('protocol'),
				'smtp_host' => $this->input->post('smtp_host'),
				'smtp_port' => $this->input->post('smtp_port'),
				'smtp_timeout' => $this->input->post('smtp_timeout'),
				'charset' => $this->input->post('charset'),
				'mailtype' => $this->input->post('mailtype'),
				'validation' => $this->input->post('validation')
				);
			$this->M__db->update('emailConfig__',$where,$data);
			$this->session->set_flashdata('success','Konfigurasi Email Berhasil Di simpan, Silahkan Uji Coba terlebih dahulu!');			
		}
		redirect(base_url().'Admin/Email');
	}
	
	public function testEmail(){
		$this->form_validation->set_rules('emailto','Email Tujuan','trim|required');
		$this->form_validation->set_rules('subject','Subjek Email','trim|required');
		$this->form_validation->set_rules('message','Pesan Email','trim|required');
		if($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('error','Konfigurasi Email GAGAL Di simpan');		
		}else{
			$this->load->model('EmailConfig'); // load configurations email
			$fromMail = $this->EmailConfig->sendDefault(); // load configurations email
			$this->email->from($fromMail['smtp_user'], $fromMail['name']);
			$this->email->to($this->input->post('emailto')); 

			$this->email->subject($this->input->post('subject'));
			$this->email->message($this->input->post('message'));  

			if (!$this->email->send()) {  
				$this->session->set_flashdata('errorMail','Gagal mengirim, Pastikan konfigurasi Email sudah benar');		
				// show_error($this->email->print_debugger());
			}else{  
				echo 'Success to send email';   
			}  
			
			$this->session->set_flashdata('successMail','Sukses mengirim Email ke '.$this->input->post('emailto'));			
		}
		redirect(base_url().'Admin/Email');
	}

	public function getTemplate() {
		$data	= $this->public_data;
		$data['title']	='Konten Email';
		$data['content']='Email/content.php';
		$data['currentPage'] = 'emailTemplate';
		$data['allData'] = $this->M__db->get_all_order('emailTemplate__','email_id','DEC');
		$this->load->view('LanderApp/Template', $data);
	}
	public function saveTemplate(){
		$this->db->trans_begin();
		$action = $this->input->post('action');
		$session_user=$this->session->userdata('session_user');	
		$this->form_validation->set_rules('name','Email Name','trim|required');
		$this->form_validation->set_rules('subject','Email Subject','trim|required');
		$this->form_validation->set_rules('message','Email Content','trim|required');
		
		if($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('error',validation_errors());
		}else{
			$data = array(
				'name' => str_replace(' ', '_', str_replace('\'', '', $this->input->post('name'))),
				'subject' => $this->input->post('subject'),
				'message' => $this->input->post('message'),
				'modified_date' => date('Y-m-d H:i:s'),
				'modified_by' => $session_user
				);
			if($action!='update'){
				$data += array(
					'created_date' => date('Y-m-d H:i:s'),
					'created_by' => $session_user,
					'is_active' => 1
					);
				$this->M__db->simpan('emailTemplate__',$data);				
			}else{
				$where = array(
					'email_id' => $this->input->post('email_id'),
				);
				$this->M__db->update('emailTemplate__',$where,$data);
			}
			if ($this->db->trans_status() === FALSE) {
				$this->db->trans_rollback();
				$this->session->set_flashdata('error','Konten Email gagal disimpan');	
			}else{
				$this->db->trans_commit();
				$this->session->set_flashdata('success','Konten Email berhasil disimpan!');	
			}
		}
		redirect(base_url().'Admin/emailTemplate');		
	}

	public function updateStatus(){
		$this->db->trans_begin();
		$where = array(
			'email_id' => $this->uri->segment(3)
			);
		$data = array(
			'is_active' => $this->uri->segment(4),
			'modified_date' => date('Y-m-d H:i:s'),
			'modified_by' => $this->session->userdata('session_user')
			);
		
		$this->M__db->update('emailTemplate__',$where,$data);
		if($this->uri->segment(4)==1){ $ms='aktifkan';}else{ $ms='nonaktifkan';}
		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			$this->session->set_flashdata('error','Status Email gagal di'.$ms.'!');	
		}else{
			$this->db->trans_commit();
			$this->session->set_flashdata('success','Status Email berhasil di'.$ms.'!');	
		}
		redirect(base_url().'Admin/emailTemplate');

	}

	function updateData(){
		$data	= $this->public_data;
		$data['title']	='Konten Email';
		$data['content']='Email/edit.php';
		$data['currentPage'] = 'emailTemplate';
		$where = array (
			'email_id' => $this->uri->segment(3)
			);
		$data['row'] = $this->M__db->cek('emailTemplate__','*',$where)->row_array();
		$this->load->view('LanderApp/Template', $data);
	}

	public function loadData(){
		$action =$this->input->post('action');
		$where = array(
			'email_id' => $this->input->post('id')
			);
		$data['row'] = $this->M__db->cek('emailTemplate__','*',$where)->row_array();
		if($action=='detail'){
			$this->load->view('LanderApp/Email/Detail', $data);
		}elseif($action=='edit'){
			$this->load->view('LanderApp/Email/Edit', $data);
		}else{
			$this->load->view('LanderApp/Email/Tambah');
		}
	}
}
