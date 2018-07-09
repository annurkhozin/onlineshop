<?php  
$curl = curl_init();


curl_setopt_array($curl, array(
  CURLOPT_URL => "http://api.rajaongkir.com/starter/cost",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "origin=$origin&destination=$destination&weight=$berat&courier=$courier",
  CURLOPT_HTTPHEADER => array(
    "content-type: application/x-www-form-urlencoded",
    "key: 43ba48b0f7ed6e26a3750d56c21df22a"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  //echo $response;
  $data = json_decode($response, true);
}
?>

<?php echo $data['rajaongkir']['origin_details']['city_name'];?> ke <?php echo $data['rajaongkir']['destination_details']['city_name'];?> @<?php echo $berat;?>gram Kurir : <?php echo strtoupper($courier); ?>

<?php
 for ($k=0; $k < count($data['rajaongkir']['results']); $k++) {
?>
	 <div title="<?php echo strtoupper($data['rajaongkir']['results'][$k]['name']);?>" style="padding:10px">
		 <table class="table table-striped">
			 <tr>
				 <th>#</th>
				 <th>No.</th>
				 <th>Jenis Layanan</th>
				 <th>ETD</th>
				 <th>Tarif</th>
			 </tr>
			 <?php
			 for ($l=0; $l < count($data['rajaongkir']['results'][$k]['costs']); $l++) {			 
			 ?>
			 <tr>
				 <td><input type="radio" name='jumlahBayar' onclick="jumlahBayar(<?=$data['rajaongkir']['results'][$k]['costs'][$l]['cost'][0]['value']?>)"></td>
				 <td><?php echo $l+1;?></td>
				 <td>
					 <div style="font:bold 16px Arial"><?php echo $data['rajaongkir']['results'][$k]['costs'][$l]['service'];?></div>
					 <div style="font:normal 11px Arial"><?php echo $data['rajaongkir']['results'][$k]['costs'][$l]['description'];?></div>
				 </td>
				 <td align="center">&nbsp;<?php echo $data['rajaongkir']['results'][$k]['costs'][$l]['cost'][0]['etd'];?> Hari</td>
				 <td align="right">Rp.<?php echo number_format($data['rajaongkir']['results'][$k]['costs'][$l]['cost'][0]['value']);?></td>
			 </tr>
			 <?php
			 }
			 ?>
		 </table>
		 <script>
                  function jumlahBayar(cost){
                    var price = '<?php echo $this->cart->total()?>';
                    var total = parseInt(price) + parseInt(cost);
                    $('.totalBayar').val(total);
										var DecimalSeparator = Number("1.2").toLocaleString().substr(1,1);

										var AmountWithCommas = total.toLocaleString();
										var arParts = String(AmountWithCommas).split(DecimalSeparator);
										var intPart = arParts[0];
										var decPart = (arParts.length > 1 ? arParts[1] : '');
										decPart = (decPart + '00').substr(0,2);

										var	bayar = 'Rp ' + intPart + DecimalSeparator + decPart;
										$('.totalBayarText').text(bayar);
                  }
                </script>
	 </div>
 <?php
 }
 ?>