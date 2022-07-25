<?php
   $method = 'sendMessage';
	
   // Message details
$content =  rawurlencode('Dear PAVAN KUMAR S 
your score in Term Test 1 KA=20/50, ENG=30/50, PHY=40/50, CHE=60/50, MAT=50/50, CS=60/50, Total 400/500.
SDC COLLEGE BANGARPET-563114');
         
   
   
   // Prepare data for POST request
   
   // Send the POST request with cURL
   $ch = curl_init('https://smsforall.com/portal/receive_api/api_request?method=sendMessage&mobileno=7483737698&content='.$content.'&loginid=Sdcbpet2&auth_scheme=PLAIN&password=Sajsdc@25&senderid=SDCPUC');
   curl_setopt($ch, CURLOPT_POST, false);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   $response = curl_exec($ch);
   curl_close($ch);

?>