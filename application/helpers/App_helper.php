<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function potong_text($text,$max=50,$dot=true){
	$data=strip_tags($text);
	$data=substr($data,0,$max);
	if($dot==true){
		$data.=" ...";
	}
	return $data;
}

function select($i,$j){
	if($i==$j){
		return "selected";
	}
}

function currency($number) {
	return 'Rp '.number_format($number,2,',','.');
}