<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M__db extends CI_Model{
/**
  * Create date 19 March 2017 
  * Modified date 26 March 2017 
  * @author	Nur Khozin ==> nurkhozin95@gmail.com
  * @since	Version 1.0.0
  * @filesource
**/

	public function query($q){
		$query = $this->db->query($q);
		return $query;
	}
	public function get_all($table){
		$query=$this->db->get($table);
		return $query;
	}
	public function get_all_order($table,$field,$order){
		$query=$this->db->Order_by($field,$order)->get($table);
		return $query;
	}
	public function get_select_order($table,$select,$field,$order){
		$query=$this->db->select($select)->Order_by($field,$order)->get($table);
		return $query;
	}
	public function get_cek_order($table,$select,$where,$field,$order){
		$query=$this->db->select($select)->where($where)->Order_by($field,$order)->get($table);
		return $query;
	}
	public function get_cek_limit($table,$select,$where,$limit){
		$query=$this->db->select($select)->where($where)->limit($limit)->get($table);
		return $query;
	}
	public function get_select($table,$select){
		$this->db->select($select);
		$query=$this->db->get($table);
		return $query;
	}
	public function simpan($table,$data){
		$query=$this->db->insert($table,$data);
		return $query;
	}
	public function update($table,$where,$data){
		$query=$this->db->where($where)->update($table,$data);
		return $query;
	}
	public function delete($table,$where){
		$query=$this->db->where($where)->delete($table);
		return $query;
	}
	public function cek($table,$select,$where){
		$query=$this->db->select($select)->where($where)->get($table);
		return $query;
	}
	
	public function cek_order($table,$select,$where,$field,$order){
		$query=$this->db->select($select)->where($where)->Order_by($field,$order)->get($table);
		return $query;
	}
	public function groupBy($table,$select,$group){
		$query=$this->db->select($select)->group_by($group)->get($table);
		return $query;
	}

	public function getcity($city,$province){	
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://api.rajaongkir.com/starter/city?id=$city&province=$province",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_HTTPHEADER => array(
		    "key: 43ba48b0f7ed6e26a3750d56c21df22a"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
			$data = json_decode($response, true);
			return $data['rajaongkir']['results'];
		}
	}
}