<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductCTRL extends Admins {

	public function getData() {
		$data	= $this->public_data;
		$data['title']='Data Produk';
		$data['currentPage']='product';
		$data['allData']=$this->M__db->get_all_order('payment__','payment_id','Desc');
		$data['content']='Product/AllData.php';
		$this->load->view('LanderApp/Template', $data);
	}

	public function upload(){
		$data = array();
		print_r($_FILES['file']['name']); die;
	      if (!empty($_FILES['file']['name'])) {
	          $filesCount = count($_FILES['file']['name']);
	          for ($i = 0; $i < $filesCount; $i++) {
	              $_FILES['uploadFile']['name'] = str_replace(",","_",$_FILES['file']['name'][$i]);
	              $_FILES['uploadFile']['type'] = $_FILES['file']['type'][$i];
	              $_FILES['uploadFile']['tmp_name'] = $_FILES['file']['tmp_name'][$i];
	              $_FILES['uploadFile']['error'] = $_FILES['file']['error'][$i];
	              $_FILES['uploadFile']['size'] = $_FILES['file']['size'][$i];
	              //Directory where files will be uploaded
	              $uploadPath = 'assets/uploads/';
	              $config['upload_path'] = $uploadPath;
	              // Specifying the file formats that are supported.
	              $config['allowed_types'] = 'jpg|png|pdf|doc|docx|xls|xlsx|ppt|pptx|txt|rtf';
	              $this->load->library('upload', $config);
	              $this->upload->initialize($config);
	              if ($this->upload->do_upload('uploadFile')) {
	                  $fileData = $this->upload->data();
	                  $uploadData[$i]['file_name'] = $fileData['file_name'];
	              }
	          }
	          if (!empty($uploadData)) {
	              $list=array();
	              foreach ($uploadData as $value) {
	                  array_push($list, $value['file_name']);
	              }
	        //echo json_encode($list);
	      	}
	    }
		//redirect('Admin/Payment');
	}
	public function saveData(){
		//print_r($_FILES['file']['name']); die;
		$this->db->trans_begin();
		$action = $this->input->post('action');
		$fileName = str_replace(' ', '_', str_replace('\'', '', $_FILES['file']['name']));
		
		$session_user = $this->session->userdata('session_user');	
		$this->form_validation->set_rules('payment_name','Jenis Akun','trim|required');
		$this->form_validation->set_rules('payment_account_name','Pemilik Akun','trim|required');
		$this->form_validation->set_rules('payment_number','Nomor Akun','trim|required');
		if($action!='update'){
			if($fileName==null){
				$this->form_validation->set_rules('file','Logo Pembayaran','trim|required');	
			}
		}
		if($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('error',validation_errors());
		}else{
			$data = array(
				'payment_name' => $this->input->post('payment_name'),
				'payment_account_name' => $this->input->post('payment_account_name'),
				'payment_number' => $this->input->post('payment_number'),
				'modified_date' => date('Y-m-d H:i:s'),
				'modified_by' => $session_user
				);
			if($fileName!=null){ // ada file
				$this->load->library('upload');
				$config['upload_path'] = "./assets/uploads";
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size']	= '1000000';
				$config['file_name'] =$fileName; 
				$this->upload->initialize($config);
				$upload_data = $this->upload->data('file');
				if (!$this->upload->do_upload("file")){ // gagal upload
					$this->session->set_flashdata('error','Ada Kesalahan Dalam Upload Logo!');
				}else{ // berhasil uplaod
					if($action=='update'){
						@unlink("./assets/uploads/".$this->input->post('logo_old'));
						$data += array(
							'payment_logo' => $fileName,
							);
						$where = array(
							'payment_id' => $this->input->post('payment_id'),
						);
						$this->M__db->update('payment__',$where,$data);
					}else{
						$data += array(
							'is_active' => 1,
							'payment_logo' => $fileName,
							'created_date' => date('Y-m-d H:i:s'),
							'created_by' => $session_user
							);
						$this->M__db->simpan('payment__',$data);
					}
				}
			}else{ // tidak ada file
				$where = array(
					'payment_id' => $this->input->post('payment_id'),
				);
				$this->M__db->update('payment__',$where,$data);
			}
			if ($this->db->trans_status() === FALSE) {
				$this->db->trans_rollback();
				$this->session->set_flashdata('error','Data Pembayaran gagal disimpan');	
			}else{
				$this->db->trans_commit();
				$this->session->set_flashdata('success','Data Pembayaran berhasil disimpan!');	
			}
		}
		redirect(base_url().'Admin/Payment');		
	}
	
	public function updateStatus(){
		$this->db->trans_begin();
		$where = array(
			'payment_id' => $this->uri->segment(3)
			);
		$data = array(
			'is_active' => $this->uri->segment(4),
			'modified_date' => date('Y-m-d H:i:s'),
			'modified_by' => $this->session->userdata('session_user')
			);
		
		$this->M__db->update('payment__',$where,$data);
		if($this->uri->segment(4)==1){ $ms='aktifkan';}else{ $ms='nonaktifkan';}
		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			$this->session->set_flashdata('error','Status Pembayaran gagal di'.$ms.'!');	
		}else{
			$this->db->trans_commit();
			$this->session->set_flashdata('success','Status Pembayaran berhasil di'.$ms.'!');	
		}
		redirect('Admin/Payment');

	}
}
