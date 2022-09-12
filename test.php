<?php

$method = 'sendMessage';
	//  variable
    $name ="PAVAN KUMAR";
    $score="KAN:25/100 ENG:25/100 PHY:25/100 MAT:25/100 CHE:25/100 BIO:25/100";
    $testname="Unit Test - 1";
    // Message details
$content =  rawurlencode('Dear '.$name.' your score in '.$testname.' is 
'.$score.'Grand Total :500/600 RESULT : FAIL
SDC College BANGARPET');

    
    
    // Prepare data for POST request
    
    // Send the POST request with cURL
    $ch = curl_init('https://smsforall.com/portal/receive_api/api_request?method=sendMessage&mobileno=7483737698&content='.$content.'&loginid=Sdcbpet2&auth_scheme=PLAIN&password=Sajsdc@25&senderid=SDCPUC');
    curl_setopt($ch, CURLOPT_POST, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    echo $name."&nbsp;-&nbsp; Message Sent";
?>