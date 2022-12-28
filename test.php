<?php
	// Account details
	$apiKey = urlencode('NDM1OTMzNTA0MjUyMzk2MzVhNGUzMDQ4NzY3NTM5Njc=');
	// Prepare data for POST request
	$sender = urlencode('SDCDGR');


	$numbers = "7483737698";

$content =  rawurlencode('Dear '.$name.' your score in '.$testname.' is 
'.$score.'Grand Total :'.$row['total'].'/'.$totalmaxmarks.' RESULT : '.$status.'
SDC College BANGARPET-563114');



// Prepare data for POST request
$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $content);
	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/get_history_api/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$report = curl_exec($ch);
	curl_close($ch);
	$data=json_decode($report, true);
	// Process your response here
    foreach($data['messages'] as $repo){
        var_dump($repo['number']);
    };

?>