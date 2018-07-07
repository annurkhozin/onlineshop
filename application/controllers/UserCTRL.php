<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserCTRL extends Admins {

	public function getData() {
		$data	= $this->public_data;
		$data['title']='Data User';
		$data['currentPage']='datauser';
		$data['allData']=$this->M__db->get_all_order('members__','member_id','Desc');
		$data['content']='User/AllData.php';
		$this->load->view('LanderApp/Template', $data);
	}

	
	public function updateStatus(){
		$this->db->trans_begin();
		$where = array(
			'member_id' => $this->uri->segment(3)
			);
		$data = array(
			'is_active' => $this->uri->segment(4),
			);
		
		$this->M__db->update('members__',$where,$data);
		if($this->uri->segment(4)==1){ $ms='aktifkan';}else{ $ms='nonaktifkan';}
		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			$this->session->set_flashdata('error','Status Keaktifan gagal di'.$ms.'!');	
		}else{
			$this->db->trans_commit();
			$this->session->set_flashdata('success','Status Keaktifan berhasil di'.$ms.'!');	
		}
		redirect('Admin/user');

	}

	public function loadData(){
		$action =$this->input->post('action');
		$where = array(
			'member_id' => $this->input->post('id')
			);
		$data['row'] = $this->M__db->cek('members__','*',$where)->row_array();
		if($action=='detail'){
			$this->load->view('LanderApp/User/Detail', $data);
		}
	}
}
