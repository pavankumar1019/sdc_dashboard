<?php
   $apiKey = urlencode('NDM1OTMzNTA0MjUyMzk2MzVhNGUzMDQ4NzY3NTM5Njc=');
   // Message details
   $numbers = array(7483737698);
   $sender = urlencode('SDCPUC');
   $message = urlencode('Dear Hello
your score in Term Test 1 
SDC COLLEGE');
    
   $numbers = implode(',', $numbers);
    // Prepare data for POST request
   $data = array('apikey' => $apiKey, 'numbers' => $numbers,'sender' => $sender,'message' => $message);
   // Send the POST request with cURL
   $ch = curl_init('https://api.textlocal.in/send/');
   curl_setopt($ch, CURLOPT_POST, true);
   curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   $response = curl_exec($ch);
   curl_close($ch);
echo $response;
echo $message;
?>