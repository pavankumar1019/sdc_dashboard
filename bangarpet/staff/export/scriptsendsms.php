<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('../db_bpet_sdc/db.php');

$testid= $_POST['test_id'];
$gettest="SELECT * FROM ".$current_test." WHERE id=".$testid."";
$gettestresult=$conn->query($gettest);
foreach($gettestresult as $gettestresultrow){
  $maximarks=$gettestresultrow['maxmarks'];
  $class=$gettestresultrow['class'];
  $name_test=$gettestresultrow['name'];
  $minimarks=$gettestresultrow['minmarks'];
  $examid=$gettestresultrow['id'];
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

// data
if($examid==9 || $examid==10){
  if($row["combination"]=="PCMB" || $row["combination"]=="PCMCS"){
    $s1min=100;
    $s2min=100;
    $s3min=70;
    $s4min=70;
    $s5min=100;
    $s6min=70;
  }
  elseif($row["combination"]=="EBACS"){
    $s1min=$maximarks;
    $s2min=$maximarks;
    $s3min=$maximarks;
    $s4min=$maximarks;
    $s5min=$maximarks;
    $s6min=70;
  }else{
    $s1min=$maximarks;
    $s2min=$maximarks;
    $s3min=$maximarks;
    $s4min=$maximarks;
    $s5min=$maximarks;
    $s6min=$maximarks;
  }
  
  }
  else{
    $totalmaxmarks= $maximarks*6;
  }

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
if($examid==9 || $examid==10){
  if($row["combination"]=="PCMB" || $row["combination"]=="PCMCS"){
    $totalmaxmarks=510;
  }
  elseif($row["combination"]=="EBACS"){
    $totalmaxmarks=570;
  }else{
    $totalmaxmarks= $maximarks*6;
  }
  
  }
  else{
    $totalmaxmarks= $maximarks*6;
  }
$percentage=($row["total"]/$totalmaxmarks)*100;

// logic for mid term exam 
if($examid==9 || $examid==10){
// if pcmb or pcmcs
if($row["combination"]=="PCMB" || $row["combination"]=="PCMCS"){
if($row["l1"]>=35 && $row["l2"]>=35 && $row["s1"]>=21 && $row["s2"]>=21 && $row["s3"]>=35 && $row["s4"]>=21){
  $status="PASS";
}else{
  $status="FAIL";
}  
}
// if ebacs
elseif($row["combination"]=="EBACS"){
if($row["l1"]>=$minimarks && $row["l2"]>=$minimarks && $row["s1"]>=$minimarks && $row["s2"]>=$minimarks && $row["s3"]>=$minimarks && $row["s4"]>=21){
  $status="PASS";
}else{
  $status="FAIL";
}  
}
else{
if($row["l1"]>=$minimarks && $row["l2"]>=$minimarks && $row["s1"]>=$minimarks && $row["s2"]>=$minimarks && $row["s3"]>=$minimarks && $row["s4"]>=$minimarks){
$status="PASS";
}else{
$status="FAIL";
}

}

}
else{
if($row["l1"]>=$minimarks && $row["l2"]>=$minimarks && $row["s1"]>=$minimarks && $row["s2"]>=$minimarks && $row["s3"]>=$minimarks && $row["s4"]>=$minimarks){
$status="PASS";
}else{
$status="<b style='color:blue'>FAIL</b>";
}
}



$method = 'sendMessage';
	//  variable
  $apiKey = urlencode('NDM1OTMzNTA0MjUyMzk2MzVhNGUzMDQ4NzY3NTM5Njc=');
	

  $sender = urlencode('SDCDGR');
    $name =$row['StudentName'];
    $score=''.$l1.'-'.$row['l1'].'/'. $s1min.'EN-'.$row['l2'].'/'. $s2min.''.$s1.'-'.$row['s1'].'/'. $s3min.''.$s2.'-'.$row['s2'].'/'. $s4min.''.$s3.'-'.$row['s3'].'/'. $s5min.''.$s4.'-'.$row['s4'].'/'. $s6min.'';
    $testname=$name_test;
    // Message details
$content =  rawurlencode('Dear '.$name.' your score in '.$testname.' is 
'.$score.'Grand Total :'.$row['total'].'/'.$totalmaxmarks.' RESULT : '.$status.'
SDC College BANGARPET-563114');


$numbers = $row['mobile_no'];
      
// Prepare data for POST request
$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $content);

//     Prepare data for POST request

//     Send the POST request with cURL
$ch = curl_init('https://api.textlocal.in/send/');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
        curl_close($ch);
        
        $html.='
<tr>

<td>'.$response.' </td>
</tr>
';

    }
    // echo $response;
    // <td>'.rawurldecode($content).' </td>

echo $html;
	} 
	else {
        echo "error";
	}
        
?>