<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoryCTRL extends Admins {

	function getData() {
		$data	= $this->public_data;
		$data['title']='Category Produk'; //wajib
		$data['currentPage']='category'; // wajib
		$data['allData']=$this->M__db->get_all_order('category__','category_id','Desc');
		$data['content']='Category/category.php';// view wajib

		$this->load->view('LanderApp/Template', $data); // wajib
	}
	function tambahCategory() {
		$data	= $this->public_data;
		$data['title']='Tambah Kategori'; //wajib
		$data['currentPage']='category'; // wajib
		$data['allData']=$this->M__db->get_all_order('category__','category_id','Desc');
		$data['content']='Category/tambahCategory.php';// view wajib

		$this->load->view('LanderApp/Template', $data); // wajib
	}
	function updateCategory() {
		$data	= $this->public_data;
		$data['title']='Update Kategori'; //wajib
		$data['currentPage']='category'; // wajib
		$where = array(
			'category_id' => $this->uri->segment(3)
			);
		$data['row']=$this->M__db->cek('category__','*',$where)->row_array();
		$data['content']='Category/updateCategory.php';// view wajib

		$this->load->view('LanderApp/Template', $data); // wajib
	}
	function detailCategory() {
		$data	= $this->public_data;
		$data['title']='Detail Category'; //wajib
		$data['currentPage']='category'; // wajib
		$where = array(
			'category_id' => $this->uri->segment(3)
			);
		$data['row']=$this->M__db->cek('category__','*',$where)->row_array();
		$data['content']='Category/detailCategory.php';// view wajib

		$this->load->view('LanderApp/Template', $data); // wajib
	}


	public function statusCategory(){
		$this->db->trans_begin();
		$where = array(
			'category_id' => $this->uri->segment(3)
			);
		$data = array(
			'is_active' => $this->uri->segment(4),
			'modified_date' => date('Y-m-d H:i:s'),
			'modified_by' => $this->session->userdata('session_user')
			);
		
		$this->M__db->update('category__',$where,$data);
		if($this->uri->segment(4)==1){ $ms='aktifkan';}else{ $ms='nonaktifkan';}
		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			$this->session->set_flashdata('error','Status Category gagal di'.$ms.'!');	
		}else{
			$this->db->trans_commit();
			$this->session->set_flashdata('success','Status Category berhasil di'.$ms.'!');	
		}
		redirect(base_url().'Admin/Category');

	}

	public function saveCategory(){
		$this->db->trans_begin();
		$action = $this->input->post('action');
		$session_user=$this->session->userdata('session_user');	
		$this->form_validation->set_rules('category_name','Nama Kategori','trim|required');
		$this->form_validation->set_rules('sub_category','Sub Kategori','trim|required');
		$this->form_validation->set_rules('information','Informasi','trim|required');
		
		if($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('error',validation_errors());
		}else{
			$data = array(
				'category_name' => $this->input->post('category_name'),
				'sub_category' => $this->input->post('sub_category'),
				'information' => $this->input->post('information'),
				'modified_date' => date('Y-m-d H:i:s'),
				'modified_by' => $session_user
				);
			if($action!='update'){
				$data += array(
					'created_date' => date('Y-m-d H:i:s'),
					'created_by' => $session_user,
					'is_active' => 1
					);
				$this->M__db->simpan('category__',$data);				
			}else{
				$where = array(
					'category_id' => $this->input->post('category_id'),
				);
				$this->M__db->update('category__',$where,$data);
			}
			if ($this->db->trans_status() === FALSE) {
				$this->db->trans_rollback();
				$this->session->set_flashdata('error','Kategori gagal disimpan');	
			}else{
				$this->db->trans_commit();
				$this->session->set_flashdata('success','Kategori berhasil disimpan!');	
			}
		}
		redirect(base_url().'Admin/Category');		
	}

}
