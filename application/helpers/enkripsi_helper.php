<?php
function enkripsi($class,$function,$uri=array()){
	$CI=& get_instance();
	if($uri==null){
		$url=$CI->mza_secureurl->setSecureUrl_encode($class,$function);
	}else{
		$url=$CI->mza_secureurl->setSecureUrl_encode($class,$function,$uri);
	}
	return $url;
}
require_once('AES.class.php');
function paramEncrypt($x)
{
   $Cipher = new AES();
   // kunci enkripsi (Anda bisa memodifikasi kuncinya)
   $key_128bit = 'DevelopverByNurKhozinEmailnurkhozin95@gmail.com';
   // $key_128bit = 'karek';

   // membagi panjang string yang akan dienkripsi dengan panjang 16 karakter
   $n = ceil(strlen($x)/16);
   $encrypt = "";

   for ($i=0; $i<=$n-1; $i++)
   {
      // mengenkripsi setiap 16 karakter
      $cryptext = $Cipher->encrypt($Cipher->stringToHex(substr($x, $i*16, 16)), $key_128bit);
	  // menggabung hasil enkripsi setiap 16 karakter menjadi satu string enkripsi utuh
      $encrypt .= $cryptext;
   }

   return $encrypt;
}

function paramDecrypt($x)
{
   $Cipher = new AES();
   // kunci dekripsi (kunci ini harus sama dengan kunci enkripsi)
   $key_128bit = 'DevelopverByNurKhozinEmailnurkhozin95@gmail.com';
   // $key_128bit = '2b7e151628aed2a6abf7158809cf4f3c';
   // $key_128bit = 'karek';

   // karena string hasil enkripsi memiliki panjang 32 karakter, maka untuk proses dekripsi ini panjang string dipotong2 dulu menjadi 32 karakter

   $n = ceil(strlen($x)/32);
   $decrypt = "";

   for ($i=0; $i<=$n-1; $i++)
   {
      // mendekrip setiap 32 karakter hasil enkripsi
      $result = $Cipher->decrypt(substr($x, $i*32, 32), $key_128bit);
	  // menggabung hasil dekripsi 32 karakter menjadi satu string dekripsi utuh
      $decrypt .= $Cipher->hexToString($result);
   }
   return $decrypt;
}

function decode($x)
{
  // proses decoding: memecah parameter dan masing-masing value yang terkait

  $pecahURI = explode('?', $x);
  $parameter = $pecahURI[1];

  $pecahParam = explode('&', paramDecrypt($parameter));

  for ($i=0; $i <= count($pecahParam)-1; $i++)
  {
     $decode = explode('=', $pecahParam[$i]);
     $var[$decode[0]] = $decode[1];
  }

  return $var;
}
function reverse($a,$b)
{
	$asli = paramDecrypt($a);
	if(stripos($asli, $b) !== FALSE)
	{
		return $asli;
	}
}
