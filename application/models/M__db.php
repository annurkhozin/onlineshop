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
}