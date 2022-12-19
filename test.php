<?php
	// Account details
	$apiKey = urlencode('NDM1OTMzNTA0MjUyMzk2MzVhNGUzMDQ4NzY3NTM5Njc=');
	// Prepare data for POST request
	$data = array('apikey' => $apiKey);
	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/get_history_api/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$report = curl_exec($ch);
	curl_close($ch);
	$data=json_decode($report, true);
	// Process your response here
	var_dump($data['messages'][0][1]);
?>