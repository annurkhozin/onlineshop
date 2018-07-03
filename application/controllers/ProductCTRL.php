<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductCTRL extends Admins {
	
	public function getData() {
		$data	= $this->public_data;
		$data['title']='Data Produk';
		$data['currentPage']='product';
		$data['allData']=$this->M__db->get_select_order('product__','product_id, product_name, category_id, stock, price, is_active','product_id','Desc');
		$data['content']='Product/AllData.php';
		$this->load->view('LanderApp/Template', $data);
	}
	
	public function saveData(){
		$this->db->trans_begin();
		$action = $this->input->post('action');
		
		$session_user = $this->session->userdata('session_user');	
		$this->form_validation->set_rules('product_name','Jenis Akun','trim|required');
		$this->form_validation->set_rules('price','Pemilik Akun','trim|required');
		$this->form_validation->set_rules('weight','Nomor Akun','trim|required');
		$this->form_validation->set_rules('stock','Nomor Akun','trim|required');
		$this->form_validation->set_rules('category_id','Nomor Akun','trim|required');
		$this->form_validation->set_rules('information','Nomor Akun','trim|required');
		
		if($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('error',validation_errors());
		}else{
			$data = array(
				'product_name' => $this->input->post('product_name'),
				'price' => $this->input->post('price'),
				'weight' => $this->input->post('weight'),
				'stock' => $this->input->post('stock'),
				'category_id' => $this->input->post('category_id'),
				'information' => $this->input->post('information'),
				'modified_date' => date('Y-m-d H:i:s'),
				'modified_by' => $session_user
			);
				
			$fileName = str_replace(' ', '_', str_replace('\'', '', $_FILES['images']['name']));
			if($fileName[0]!=null){ // ada file
				$this->load->library('upload');
				if(($action=='update') and ($this->input->post('images_old')!=null)){
					$convertData = explode(",",$this->input->post('images_old'));
				}else{
					$convertData = array();
				}
				$dateNow = date('YmdHis');
				for ($i=0; $i < count($fileName); $i++) { 
					$config = array(
						'upload_path'   => "./assets/uploads/product",
						'allowed_types' => 'jpg|gif|png',
						'max_size'     => '1000000',                       
						'file_name'     => $dateNow.'_'.$fileName[$i],                       
					);
					$_FILES['file']['name']     = $_FILES['images']['name'][$i];
					$_FILES['file']['type']     = $_FILES['images']['type'][$i];
					$_FILES['file']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
					$_FILES['file']['error']     = $_FILES['images']['error'][$i];
					$_FILES['file']['size']     = $_FILES['images']['size'][$i];
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					
					if($this->upload->do_upload('file')){
						$fileData = $this->upload->data();
						array_push($convertData, $dateNow.'_'.$fileName[$i]);
					}
				}
				if($action=='update'){
					if($fileName[0]!=null){
						$data += array(
							'images_product' => implode(",",$convertData),
						);
					}
					$where = array(
						'product_id' => $this->input->post('product_id'),
					);
					$this->M__db->update('product__',$where,$data);
				}else{
					$data += array(
						'images_product' => implode(",",$convertData),
						'is_active' => 1,
						'created_date' => date('Y-m-d H:i:s'),
						'created_by' => $session_user
					);
					$this->M__db->simpan('product__',$data);
				}
						
			}else{ // tidak ada file
				$where = array(
					'product_id' => $this->input->post('product_id'),
				);
				$this->M__db->update('product__',$where,$data);
			}
			if ($this->db->trans_status() === FALSE) {
				$this->db->trans_rollback();
				$this->session->set_flashdata('error','Data Produk gagal disimpan');	
			}else{
				$this->db->trans_commit();
				$this->session->set_flashdata('success','Data Produk berhasil disimpan!');	
			}
		}
		if($action=='update'){
			redirect(base_url().'Admin/formProduct/'.paramEncrypt($this->input->post('product_id')));
		}else{
			redirect(base_url().'Admin/Product');
		}
	}
	
	public function updateStatus(){
		$this->db->trans_begin();
		$where = array(
			'product_id' => $this->uri->segment(3)
			);
			$data = array(
			'is_active' => $this->uri->segment(4),
			'modified_date' => date('Y-m-d H:i:s'),
			'modified_by' => $this->session->userdata('session_user')
		);
		
		$this->M__db->update('product__',$where,$data);
		if($this->uri->segment(4)==1){ $ms='aktifkan';}else{ $ms='nonaktifkan';}
		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			$this->session->set_flashdata('error','Status Produk gagal di'.$ms.'!');	
		}else{
			$this->db->trans_commit();
			$this->session->set_flashdata('success','Status Porduk berhasil di'.$ms.'!');	
		}
		redirect('Admin/Product');
	}
	
	public function imagesProduct(){
		$this->db->trans_begin();
		$where = array(
			'product_id' => $this->uri->segment(3)
		);
		$rows = $this->M__db->cek('product__','images_product',$where)->row_array();
		$images = explode(',',$rows['images_product']);
		$convertData =  array();
		foreach ($images as $key) {
			if($key!=$this->uri->segment(4)){
				array_push($convertData, $key);
			}
		}
		$data = array(
			'images_product' => implode(",",$convertData),
			'modified_date' => date('Y-m-d H:i:s'),
			'modified_by' => $this->session->userdata('session_user')
		);
		
		$this->M__db->update('product__',$where,$data);
		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			$this->session->set_flashdata('error','Gambar Produk gagal dihapus!');	
		}else{
			@unlink("./assets/uploads/product/".$this->uri->segment(4));
			$this->db->trans_commit();
			$this->session->set_flashdata('success','Gambar Porduk berhasil dihapus!');	
		}
		redirect(base_url().'Admin/formProduct/'.paramEncrypt($this->uri->segment(3)));
	}

	public function formData() {
		$data	= $this->public_data;
		$data['title']='Data Produk';
		$data['currentPage']='product';
		$where = array(
			'product_id' => paramDecrypt($this->uri->segment(3)),
			);
		$data['rows']=$this->M__db->cek('product__','*',$where)->row_array();
		$data['content']='Product/formProduct.php';
		$this->load->view('LanderApp/Template', $data);
	}
}
