<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccountCTRL extends Members {

	function dataAkun() {
		$data	= $this->public_data;
		$data['title']='Akun';
		$data['content']='Akun/dataAkun.php';
		$where = array(
			'member_id' => $this->session->userdata('session_user'),
			);
		$data['akun'] = $this->M__db->cek('members__','*',$where)->row_array();
		$data['address'] = $this->M__db->cek('addressMembers__','*',$where)->row_array();
		$this->load->view('Styler/Template', $data);
	}

	function viewCheckout() {
		$data	= $this->public_data;
		$data['title']='Checkout';
		$where = array(
			'member_id' => $this->session->userdata('session_user'),
			);
		$data['akun'] = $this->M__db->cek('members__','*',$where)->row_array();
		$data['content']='Member/viewCheckout.php';
		$this->load->view('Styler/Template', $data);
	}

	function saveDataMember() {
		$this->db->trans_begin();
		$session_user=$this->session->userdata('session_user');
		$this->load->library('upload');
		$fileName = str_replace(' ', '_', str_replace('\'', '', $_FILES['photo']['name']));
		$ReplaceFileName = date('YmdHis').'_'.$fileName;
		if($fileName!=null){
			$config['upload_path'] = "./assets/uploads/users";
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']	= '1000000';
			$config['file_name'] =$ReplaceFileName; 
			$this->upload->initialize($config);
			if (!$this->upload->do_upload("photo")){
				$this->session->set_flashdata('error','Ada Kesalahan Dalam Upload Gambar!');
				redirect(base_url().'Account');
			}else{
				$file_name = $ReplaceFileName;
				@unlink("./assets/uploads/users/".$this->input->post('photo_old'));
			}
		}else{
			$file_name = $this->input->post('photo_old');
		}
		$data = array(
			'fullname' => $this->input->post('fullname'),
			'birthday' => $this->input->post('birthday'),
			'gender' => $this->input->post('gender'),
			'phone' => $this->input->post('phone'),
			'address_name' => $this->input->post('address_name'),
			'province_id' => $this->input->post('province_id'),
			'city_id' => $this->input->post('city_id'),
			'address' => $this->input->post('address'),
			'photo' => $file_name,
			);
		$where = array(
			'member_id' => $this->session->userdata('session_user'),
			);

		$this->M__db->update('members__',$where,$data);
		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			$this->session->set_flashdata('error','Data gagal diedit!');	
		}else{
			$this->db->trans_commit();
			$this->upload->data('photo');
			$this->session->set_flashdata('success','Data berhasil diedit!');
		}
		redirect(base_url());
	}

	public function downloadPayment(){
		$this->load->library('pdf');
		$data	= $this->public_data;
		$data['title']='Checkout';
		$where = array(
			'member_id' => $this->session->userdata('session_user'),
			);
		$data['akun'] = $this->M__db->cek('members__','*',$where)->row_array();
		$data['content']='Member/viewCheckout.php';
		$this->pdf->load_view('Styler/Template', $data);
	}

	function prosesPesan(){
		$this->db->trans_begin();
		$true = true;
		while ($true == true) {
			$code = randcetak('huruf',8);
			$where = array(
				'transaction_code' => $code,
			);
			$hasil = $this->db->where($where)->get('transaction__')->num_rows();
			if($hasil==0){
				$true = false;
			}
		}

		$data =  array(
			'transaction_code' => $code,
			'member_id' => $this->input->post('member_id'),
			'address_name' => $this->input->post('address_name'),
			'address' => $this->input->post('address'),
			'province_id' => $this->input->post('province_id'),
			'city_id' => $this->input->post('city_id'),
			'kurir' => $this->input->post('kurir'),
			'service' => $this->input->post('service'),
			'cost' => $this->input->post('cost'),
			'total_price' => $this->input->post('total_price'),
			'payment' => $this->input->post('payment'),
			'weight' => $this->input->post('weight'),
			'status' => 1,
			'created_date' => date('Y-m-d H:i:s')
		);
		$this->db->insert('transaction__',$data);
		$id =  $this->db->insert_id();

		$jumlah=array(); $berat=array(); $no=1;
		foreach ($this->cart->contents() as $items): 
			$jumlah[]=$items['price'];
			$berat[]=$items['weight'];

			$dataitem = array(
				'transaction_id'=>$id,
				'product_id' => $items['product_id'],
				'amount' => $items['qty'],
				'price' => $items['price'],
				'sub_total' => $items['subtotal']
			);
			$this->db->insert('detail_transaction__',$dataitem);
		
		endforeach;

		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			echo 500; die;
		}else{
			$this->db->trans_commit();
			echo paramEncrypt($code);	die;
		}
	}

}
