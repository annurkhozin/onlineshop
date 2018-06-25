<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProdukCTRL extends Admins {

	public function getData()
	{
		$data	= $this->public_data;
		$data['title']='Produk Online Shop'; //wajib
		$data['currentPage']='produk'; // wajib
		$data['allData']=$this->M__db->get_all_order('product__','product_id','Desc');
		$data['content']='Produk/produk.php';// view wajib

		$this->load->view('LanderApp/Template', $data); // wajib
	}
	function detailCategory() {
		$data	= $this->public_data;
		$data['title']='Detail Produk'; //wajib
		$data['currentPage']='produk'; // wajib
		$where = array(
			'product_id' => $this->uri->segment(3)
			);
		$data['row']=$this->M__db->cek('product__','*',$where)->row_array();
		$data['content']='Produk/detailProduk.php';// view wajib

		$this->load->view('LanderApp/Template', $data); // wajib
	}


	public function statusCategory(){
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
			$this->session->set_flashdata('error','Status Category gagal di'.$ms.'!');	
		}else{
			$this->db->trans_commit();
			$this->session->set_flashdata('success','Status Category berhasil di'.$ms.'!');	
		}
		redirect(base_url().'Admin/Produk');

	}


}

/* End of file ProdukCTRL.php */
/* Location: ./application/controllers/ProdukCTRL.php */