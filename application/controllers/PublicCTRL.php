<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PublicCTRL extends Users {
	
	function beranda() {
		$data	= $this->public_data;
		$data['title']='Beranda';
		$data['content']='Beranda/beranda.php';
		$where = array(
			'is_active' => 1,
		);
		$data['allData'] = $this->M__db->get_cek_order('product__','*',$where,'product_id','DESC');
		$this->load->view('Styler/Template', $data);
	}

	function detailProduct() {
		$data	= $this->public_data;
		$data['title']='Detail Produk';
		$data['content']='Beranda/detailProduct.php';
		$where = array(
			'product_id' => paramDecrypt($this->uri->segment(2)),
		);
		$data['row'] = $this->M__db->cek('product__','*',$where)->row_array();
		$this->load->view('Styler/Template', $data);
	}
	
	public function tocart() {
		// $this->cart->destroy();
		$jumlah = $this->input->post('jumlah');
		$product_id = paramDecrypt($this->uri->segment(2));
		$row = $this->db->where('product_id',$product_id)->get('product__')->row_array();
		$row_images = explode(",",$row['images_product']); 
		$data = array(
				'id'      => date('YmdHis'),
				'product_id' => $row['product_id'],
				'qty'     => $jumlah,
				'price'   => $row['price'],
				'weight'  => $row['weight'],
				'name'    => substr($row['product_name'],0,16),
				'picture'    => $row_images[0],
		);
		$this->cart->insert($data);
		$this->session->set_flashdata('success','Barang berhasil masuk keranjnag!');
		redirect(base_url().'detailProduct/'.$this->uri->segment(2));
	}
	public function deletecart() {
		$this->cart->destroy();
		$this->session->set_flashdata('success','Keranjang berhasil dikosongkan!');
		redirect(base_url());
	}

	public function removecart() {
		$id = $this->uri->segment(2);
		$data = array(
	        'rowid'      => $id,
	        'id'      => 0,
	        'product_id' => 0,
	        'qty'     => 0,
	        'price'   => 0,
	        'weight'   => 0,
	        'name'    => 0,
	        'picture' => 0,
	    );
		$this->cart->update($data);
		$this->session->set_flashdata('success','Barang berhasil dihapus dari keranjang!');
		redirect(base_url());
	}

}