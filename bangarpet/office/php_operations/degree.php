<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('../db_bpet_sdc/db.php');
if($_POST['type']=="loadtotal"){
     $sql="SELECT * FROM degree_data";
    $result=$conn->query($sql);
    if ($result->num_rows > 0) {
        foreach($result as $row){
            echo '
            <tr id='.$row['id'].'>
            <td scope="row"  style="border:1px solid black;">'.$row['id'].'</td>
            <td  style="border:1px solid black;">'.$row['name'].'</td>
            <td   style="border:1px solid black;">'.$row['fathername'].'</td>
            <td   style="border:1px solid black;">'.$row['phone_number'].'</td>
            <td   style="border:1px solid black;"><div class="custom-control form-control-lg custom-checkbox">
          <input type="checkbox" class="check custom-control-input" name="reg_no[]" id="reg_no" value="'.$row['id'].'">
          <label class="custom-control-label" for="reg_no"  style="user-select: none;">Check Here</label>
      </div></td>
          </tr>
            ';
        }
    } else {
   echo "Null No Record Found..";
}

}
if($_POST['type']=="sendsms")
{
 foreach($_POST["id"] as $id)
 {
  $query = "SELECT * FROM degree_data WHERE id = '".$id."'";
  $result=$conn->query($query);
  foreach($result as $row){

$method = 'sendMessage';
	
// Message details
$content =  rawurlencode('Dear '.$row['name'].' was absent on todays class at SDC College '.$branch_name.'.- SDC');
      


// Prepare data for POST request

// Send the POST request with cURL
$ch = curl_init('https://smsforall.com/portal/receive_api/api_request?method=sendMessage&mobileno='.$row['phone_number'].'&content='.$content.'&loginid=Sdcbpet2&auth_scheme=PLAIN&password=Sajsdc@25&senderid=SDCPUC');
curl_setopt($ch, CURLOPT_POST, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
echo $row['name']."&nbsp;-&nbsp&nbsp; Message Sent";
  }
 }
}
?>