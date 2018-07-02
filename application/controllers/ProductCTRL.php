<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductCTRL extends Admins {

	public function getData() {
		$data	= $this->public_data;
		$data['title']='Data Produk';
		$data['currentPage']='product';
		$data['allData']=$this->M__db->get_all_order('product__','product_id','Desc');
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
			print_r('masuk1a'); die;
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
				if($fileName!=null){ // ada file
					$this->load->library('upload');
					$convertData = array();
					for ($i=0; $i < count($fileName); $i++) { 
						$config = array(
							'upload_path'   => "./assets/uploads",
							'allowed_types' => 'jpg|gif|png',
							'max_size'     => '1000000',                       
							'file_name'     => date('YmdHis').'_'.$fileName[$i],                       
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
							array_push($convertData, date('YmdHis').'_'.$fileName[$i]);
						}else {
							$this->session->set_flashdata('error','Ada Kesalahan Dalam Upload Gambar!');
						}
					}
					if($action=='update'){
						// @unlink("./assets/uploads/".$this->input->post('logo_old'));
						$data += array(
							'images_product' => implode(",",$convertData),
						);
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
		redirect(base_url().'Admin/Product');		
	}
	
}
