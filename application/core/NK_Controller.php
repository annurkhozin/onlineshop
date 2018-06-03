<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admins extends CI_Controller {

    protected $public_data=array();
    
	public function __construct() {
        parent::__construct();
        if((!$a=$this->session->userdata('session_user')) or ($this->session->userdata('level_user')!=1)){
            redirect('Destroy');
		}else{
			$where = array(
				'user_id' =>$a,
				'is_active' =>1
			);
			$userInfo=$this->M__db->cek('users__','fullname, photo',$where)->row_array();
			$this->public_data['info']['user_fullname']=$userInfo['fullname'];
			$this->public_data['info']['user_photo']=$userInfo['photo'];
			
		
			$select = array('name_app','title_app','logo_app','favicon_app','bg_login','deskripsi_app','timezone_app');
			$info_web=$this->M__db->get_select('system__',$select)->row_array();
			$this->public_data['info']['name_app']=$info_web['name_app'];
			$this->public_data['info']['title_app']=$info_web['title_app'];
			$this->public_data['info']['favicon_app']=$info_web['favicon_app'];
			$this->public_data['info']['logo_app']=$info_web['logo_app'];
			$this->public_data['info']['bg_login']=$info_web['bg_login'];
			$this->public_data['info']['deskripsi_app']=$info_web['deskripsi_app'];
			$this->public_data['info']['timezone']=$info_web['timezone_app'];
			date_default_timezone_set($info_web['timezone_app']);
		}
    }
}

class Members extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $select = array('name_app','title_app','logo_app','favicon_app','bg_login','deskripsi_app','timezone_app');
		$info_web=$this->M__db->get_select('system__',$select)->row_array();
		$this->public_data['info']['name_app']=$info_web['name_app'];
		$this->public_data['info']['title_app']=$info_web['title_app'];
		$this->public_data['info']['favicon_app']=$info_web['favicon_app'];
		$this->public_data['info']['logo_app']=$info_web['logo_app'];
		$this->public_data['info']['bg_login']=$info_web['bg_login'];
		$this->public_data['info']['deskripsi_app']=$info_web['deskripsi_app'];
        $this->public_data['info']['timezone']=$info_web['timezone_app'];
        date_default_timezone_set($info_web['timezone_app']);
    }
}

class Users extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $select = array('name_app','title_app','logo_app','favicon_app','bg_login','deskripsi_app','timezone_app');
		$info_web=$this->M__db->get_select('system__',$select)->row_array();
		$this->public_data['info']['name_app']=$info_web['name_app'];
		$this->public_data['info']['title_app']=$info_web['title_app'];
		$this->public_data['info']['favicon_app']=$info_web['favicon_app'];
		$this->public_data['info']['logo_app']=$info_web['logo_app'];
		$this->public_data['info']['bg_login']=$info_web['bg_login'];
		$this->public_data['info']['deskripsi_app']=$info_web['deskripsi_app'];
        $this->public_data['info']['timezone']=$info_web['timezone_app'];
        date_default_timezone_set($info_web['timezone_app']);
    }
}
