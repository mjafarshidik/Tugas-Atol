<?php
function sendWhatsapp($receiver,$text){
	$curl = curl_init();
	curl_setopt_array($curl, array(
	  CURLOPT_URL => "https://app.whatspie.com/api/messages",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 0,
	  CURLOPT_FOLLOWLOCATION => true,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "POST",
	  CURLOPT_SSL_VERIFYPEER => 0, 
	  CURLOPT_POSTFIELDS => "receiver=".$receiver.
						    "&device=628122268206".
							"&message=".urlencode($text).
							"&type=chat",
	  CURLOPT_HTTPHEADER => array(
		"Accept: application/json",
		"Content-Type: application/x-www-form-urlencoded",
		"Authorization: Bearer API_KEY_ANDA"
	  ),
	));
	$response = curl_exec($curl);
	curl_close($curl);
	return json_decode($response,true);
}