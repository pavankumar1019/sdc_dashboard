<?php

include('../db_bpet_sdc/db.php');

$testid= $_POST['test_id'];
$gettest="SELECT * FROM ".$current_test." WHERE id=".$testid."";
$gettestresult=$conn->query($gettest);
foreach($gettestresult as $gettestresultrow){
  $maximarks=$gettestresultrow['maxmarks'];
  $class=$gettestresultrow['class'];
  $name=$gettestresultrow['name'];
  $minimarks=$gettestresultrow['minmarks'];

}



$totalmaxmarks= $maximarks*6;
// echo $_GET['class_id']
$query = "SELECT ".$tbl_admission.".StudentName,  ".$tbl_admission.".father_name, ".$tbl_admission.".combination, ".$tbl_admission.".lang_code, ".$tbl_admission.".mobile_no, ".$tbl_admission.".RollNo, ".$class_test_marks.".l1, ".$class_test_marks.".l2,  ".$class_test_marks.".s1, ".$class_test_marks.".s2,  ".$class_test_marks.".s3,  ".$class_test_marks.".s4,  ".$class_test_marks.".total
FROM ".$tbl_admission."
LEFT JOIN ".$class_test_marks." ON ".$tbl_admission.".RollNo = ".$class_test_marks.".roll AND ".$class_test_marks.".test_id=".$_POST['test_id']."    WHERE ".$tbl_admission.".Class=".$_POST['class_id']."  
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

// <tr>
// <td> Name : '.$row['StudentName'].' <br>
// Message : Dear '.$row['StudentName'].' as scored marks in Term Test - 1 <br>
// '.$l1.'='.$row['l1'].',EN='.$row['l2'].','.$s1.'='.$row['s1'].','.$s2.'='.$row['s2'].','.$s3.'='.$row['s3'].','.$s4.'='.$row['s3'].' TOTAL='.$row['total'].'.
// </td>
// </tr>

$method = 'sendMessage';
	//  variable
    $name =$row['StudentName'];
    $score=''.$l1.'-'.$row['l1'].'/'. $maximarks.'EN-'.$row['l2'].'/'. $maximarks.''.$s1.'-'.$row['s1'].'/'. $maximarks.''.$s2.'-'.$row['s2'].'/'. $maximarks.''.$s3.'-'.$row['s3'].'/'. $maximarks.''.$s4.'-'.$row['s4'].'/'. $maximarks.'';
    $testname=$name;
    // Message details
$content =  rawurlencode('Dear '.$name.' your score in '.$testname.' is 
'.$score.'Grand Total :500/600 RESULT : FAIL
SDC College BANGARPET-563114');

$html.='
<tr>
<td>'.rawurldecode($content).' </td>
</tr>
';
    
    // Prepare data for POST request
    
    // Send the POST request with cURL
//     $ch = curl_init('https://smsforall.com/portal/receive_api/api_request?method=sendMessage&mobileno=7483737698&content='.$content.'&loginid=Sdcbpet2&auth_scheme=PLAIN&password=Sajsdc@25&senderid=SDCPUC');
//     curl_setopt($ch, CURLOPT_POST, false);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     $response = curl_exec($ch);
//         curl_close($ch);
        
    }
//     echo $response;


echo $html;
	} 
	else {
        echo "error";
	}
        
?>