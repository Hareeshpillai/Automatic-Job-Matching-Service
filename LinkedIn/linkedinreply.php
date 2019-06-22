<?php 
	$client_id = "81mxhepdymr9qq";
	$client_key = "5MsGCuCFiyO4V6fb";

	if(isset($_GET['state'])){
		if($_GET['state'] == "amazingteam"){
			if (isset($_GET['code'])) {
				//Getting access token in json response
				$json = file_get_contents("https://www.linkedin.com/oauth/v2/accessToken?grant_type=authorization_code&code=".$_GET['code']."&redirect_uri=https%3A//amazingteam.site/linkedinreply.php&client_id=".$client_id."&client_secret=".$client_key);
				$json_data = json_decode($json,true);
				// echo ($json_data['access_token']);

				//Getting name
				$url = "https://api.linkedin.com/v2/me";
				$request_headers = array();
				$request_headers[] = 'Connection: Keep-Alive';
				$request_headers[] = 'Authorization: Bearer '.$json_data['access_token'];
				$ch = curl_init($url);
				curl_setopt($ch, CURLOPT_HTTPHEADER, $request_headers);
				$response_body = curl_exec($ch);

				//Getting email
				$url = "https://api.linkedin.com/v2/clientAwareMemberHandles?q=members&projection=(elements*(primary,type,handle~))";
				$request_headers = array();
				$request_headers[] = 'Connection: Keep-Alive';
				$request_headers[] = 'Authorization: Bearer '.$json_data['access_token'];
				$ch = curl_init($url);
				curl_setopt($ch, CURLOPT_HTTPHEADER, $request_headers);
				$response_body = curl_exec($ch);
			} else {
			  //callback
			}
		}else{
			echo "YOU ARE AN INTRUDER!"; //if the scope is different than what declared in access.php

		}
	}
 ?>