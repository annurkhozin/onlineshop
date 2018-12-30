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

function randcetak($type,$panjang){
	if($type=='angka'){
		$karakter = '1234567890';
	}else{
		$karakter = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	}
	$string = '';
	for ($i = 0; $i < $panjang; $i++) {
		$pos = rand(0, strlen($karakter)-1);
	  $string .= $karakter{$pos};
	}
	return $string;
}