<?php
	// Account details
	$apiKey = urlencode('NDM1OTMzNTA0MjUyMzk2MzVhNGUzMDQ4NzY3NTM5Njc=');
	// Prepare data for POST request
	$sender = urlencode('SDCDGR');


	$numbers = "7483737698";

$content =  rawurlencode('SDC {#var#} COLLEGE {#var#}
{#var#}No{#var#}
Name: {#var#}
{#var#}
{#var#}
{#var#}
{#var#}
{#var#}
{#var#}
Total: {#var#}
Result: {#var#}');



// Prepare data for POST request
$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $content);
	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	echo $response;

?>