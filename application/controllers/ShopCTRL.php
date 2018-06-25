<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShopCTRL extends Admins {

	public function getData() {
		$data	= $this->public_data;
		$data['title']='Informasi Toko';
		$data['currentPage']='shopInformation';
		$data['rows']=$this->M__db->get_all('system__')->row_array();
		$data['content']='System/AllData.php';
		$this->load->view('LanderApp/Template', $data);
	}

	public function saveData(){
		$this->db->trans_begin();
		$this->load->library('upload');
		$fileNameLogo = str_replace(' ', '_', str_replace('\'', '', $_FILES['logo_app']['name']));
		$ReplaceFileNameLogo = date('YmdHis').'_'.$fileNameLogo;
		if($fileNameLogo!=null){ //untuk logo
			$config['upload_path'] = "./assets/images";
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']	= '1000000';
			$config['file_name'] =$ReplaceFileNameLogo; 
			$this->upload->initialize($config);
			if (!$this->upload->do_upload("logo_app")){
				$this->session->set_flashdata('error','Ada Kesalahan Dalam Upload Gambar!');
				redirect(base_url().'Admin/shopInformation');		
			}else{
				$file_logo = $ReplaceFileNameLogo;
				@unlink("./assets/images/".$this->input->post('logo_old'));
			}
		}else{
			$file_logo = $this->input->post('logo_old');
		}

		$fileNameFavicon = str_replace(' ', '_', str_replace('\'', '', $_FILES['favicon_app']['name']));
		$ReplaceFileNameFavicon = date('YmdHis').'_'.$fileNameFavicon;
		if($fileNameFavicon!=null){ // untuk Favicon
			$config['upload_path'] = "./assets/images";
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']	= '1000000';
			$config['file_name'] =$ReplaceFileNameFavicon; 
			$this->upload->initialize($config);
			if (!$this->upload->do_upload("favicon_app")){
				$this->session->set_flashdata('error','Ada Kesalahan Dalam Upload Gambar!');
				redirect(base_url().'Admin/shopInformation');		
			}else{
				$file_favicon = $ReplaceFileNameFavicon;
				@unlink("./assets/images/".$this->input->post('favicon_old'));
			}
		}else{
			$file_favicon = $this->input->post('favicon_old');
		}

		$fileNameBgLogin = str_replace(' ', '_', str_replace('\'', '', $_FILES['bg_login']['name']));
		$ReplaceFileNameBgLogin = date('YmdHis').'_'.$fileNameBgLogin;
		if($fileNameBgLogin!=null){ // untuk Bg Login
			$config['upload_path'] = "./assets/images";
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']	= '1000000';
			$config['file_name'] =$ReplaceFileNameBgLogin; 
			$this->upload->initialize($config);
			if (!$this->upload->do_upload("bg_login")){
				$this->session->set_flashdata('error','Ada Kesalahan Dalam Upload Gambar!');
				redirect(base_url().'Admin/shopInformation');		
			}else{
				$file_bg_login = $ReplaceFileNameBgLogin;
				@unlink("./assets/images/".$this->input->post('bg_login_old'));
			}
		}else{
			$file_bg_login = $this->input->post('bg_login_old');
		}

		$data = array(
			'name_app' => $this->input->post('name_app'),
			'address' => $this->input->post('address'),
			'province_id' => $this->input->post('province_id'),
			'city_id' => $this->input->post('city_id'),
			'deskripsi_app' => $this->input->post('deskripsi_app'),
			'title_app' => $this->input->post('title_app'),
			'timezone_app' => $this->input->post('timezone_app'),
			'logo_app' => $file_logo,
			'bg_login' => $file_bg_login,
			'favicon_app' => $file_favicon,
			'modified_date' => date('Y-m-d H:i:s'),
			'modified_by' => $session_user
			);
		$where = array(
			'id_app' => $this->input->post('id_app'),
			);
		$this->M__db->update('system__',$where,$data);
		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			$this->session->set_flashdata('error','Data seminar gagal diedit!');	
		}else{
			$this->db->trans_commit();
			$this->upload->data('logo_app');
			$this->upload->data('favicon_app');
			$this->upload->data('bg_login');
			$this->session->set_flashdata('success','Data seminar berhasil diedit!');
		}
		redirect(base_url().'Admin/shopInformation');		
	}
}
