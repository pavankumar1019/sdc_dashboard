<?php

$method = 'sendMessage';
	$stdnumber='King Salman bin Abdul-Aziz';
    // Message details
$content =  rawurlencode('Dear '.$stdnumber.' was absent on todays class at SDC College Bangarpet/KGF.- SDC');
          
    
    
    // Prepare data for POST request
    
    // Send the POST request with cURL
    $ch = curl_init('https://smsforall.com/portal/receive_api/api_request?method=sendMessage&mobileno=7483737698&content='.$content.'&loginid=Sdcbpet2&auth_scheme=PLAIN&password=Sajsdc@25&senderid=SDCPUC');
    curl_setopt($ch, CURLOPT_POST, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    echo $stdnumber."&nbsp;-&nbsp; Message Sent";
?>