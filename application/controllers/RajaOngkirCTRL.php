<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RajaOngkirCTRL extends users {
	function __construct(){
		parent:: __construct();
	}
	
	public function getcity(){		
		$province=$this->input->post('propinsi');
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://api.rajaongkir.com/starter/city?province=$province",
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
		//   echo json_encode($data['rajaongkir']['results']);
		  for ($j=0; $j < count($data['rajaongkir']['results']); $j++){
		    echo "<option value='".$data['rajaongkir']['results'][$j]['city_id']."'>".$data['rajaongkir']['results'][$j]['city_name']."</option>";
		  }
		}
	}
}
