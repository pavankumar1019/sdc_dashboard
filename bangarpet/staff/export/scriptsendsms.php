<?php

include('../db_bpet_sdc/db.php');

$totalmaxmarks= $_SESSION['maxmarks']*6;
// echo $_GET['class_id']
$query = "SELECT ".$tbl_admission.".StudentName,  ".$tbl_admission.".father_name, ".$tbl_admission.".combination, ".$tbl_admission.".lang_code, ".$tbl_admission.".mobile_no, ".$tbl_admission.".RollNo, ".$class_test_marks.".l1, ".$class_test_marks.".l2,  ".$class_test_marks.".s1, ".$class_test_marks.".s2,  ".$class_test_marks.".s3,  ".$class_test_marks.".s4,  ".$class_test_marks.".total
FROM ".$tbl_admission."
LEFT JOIN ".$class_test_marks." ON ".$tbl_admission.".RollNo = ".$class_test_marks.".roll AND ".$class_test_marks.".test_id=". $_SESSION['test_name']."    WHERE ".$tbl_admission.".Class=".$_POST['class_id']."  
";
$result = mysqli_query($conn, $query);
$html='';
$html.='
<tr>
<th style="text-align:center;">Detailes</th>
</tr>
';
if ($result->num_rows > 0) {
	foreach($result as $row){
          if($row['lang_code']==1){
$l1="KN";
          }
          if($row['lang_code']==3){
$l1="HN";
          }
          if($row['lang_code']==8){
$l1="UD";
          }
          if($row['lang_code']==9){
$l1="SK";
          }
if($row['combination']=="EBAS"){
$s1="EC";
$s2="BS";
$s3="AC";
$s4="ST";
}
if($row['combination']=="BASM"){
$s1="BM";
$s2="BS";
$s3="AC";
$s4="ST";
}
if($row['combination']=="EBACS"){
$s1="EC";
$s2="BS";
$s3="AC";
$s4="CS";
}
if($row['combination']=="PCMB"){
$s1="PH";
$s2="CH";
$s3="MT";
$s4="BO";
}
if($row['combination']=="PCMCS"){
$s1="PH";
$s2="CH";
$s3="MT";
$s4="CS";
}

        $html.='
        <tr>
        <td> Name : '.$row['StudentName'].' <br>
        Message : Dear '.$row['StudentName'].' as scored marks in Term Test - 1 <br>
        '.$l1.'='.$row['l1'].',EN='.$row['l2'].','.$s1.'='.$row['s1'].','.$s2.'='.$row['s2'].','.$s3.'='.$row['s3'].','.$s4.'='.$row['s3'].' TOTAL='.$row['total'].'.
        </td>
        </tr>
        ';
// send sms
// $method = 'sendMessage';
	
// Message details
// $content =  rawurlencode('Dear '.$row['StudentName'].' 
// your score in Term Test 1 '.$l1.'='.$row['l1'].'/'.$_SESSION['maxmarks'].', EN='.$row['l2'].'/'.$_SESSION['maxmarks'].', '.$s1.'='.$row['s1'].'/'.$_SESSION['maxmarks'].', '.$s2.'='.$row['s2'].'/'.$_SESSION['maxmarks'].', '.$s3.'='.$row['s3'].'/'.$_SESSION['maxmarks'].', '.$s4.'='.$row['s4'].'/'.$_SESSION['maxmarks'].', Total '.$row['total'].'/'.$totalmaxmarks.'.
// SDC COLLEGE BANGARPET-563114');
      

$apiKey = urlencode('NDM1OTMzNTA0MjUyMzk2MzVhNGUzMDQ4NzY3NTM5Njc=');
// Message details
$numbers = array($row['mobile_no']);
$sender = urlencode('SDCPUC');
$message = rawurlencode('Dear '.$row['StudentName'].' 
 your score in Term Test 1 '.$l1.'='.$row['l1'].'/'.$_SESSION['maxmarks'].', EN='.$row['l2'].'/'.$_SESSION['maxmarks'].', '.$s1.'='.$row['s1'].'/'.$_SESSION['maxmarks'].', '.$s2.'='.$row['s2'].'/'.$_SESSION['maxmarks'].', '.$s3.'='.$row['s3'].'/'.$_SESSION['maxmarks'].', '.$s4.'='.$row['s4'].'/'.$_SESSION['maxmarks'].', Total '.$row['total'].'/'.$totalmaxmarks.'.
SDC COLLEGE BANGARPET-563114');
 
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
        
    }
    echo $response;
	} 
	else {
        echo "error";
	}

?>