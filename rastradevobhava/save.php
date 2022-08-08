
<?php
$servername = "localhost";
$username = "u430139865_sdc";
$password = "Pavan5639";
$dbname = "u430139865_sdc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$connect = new PDO("mysql:host=localhost; dbname=u430139865_sdc", "u430139865_sdc", "Pavan5639");

if(!$_POST['name']=""){
	$sql = "INSERT INTO `events`( `name`, `parents`, `dob`, `address`, `class`, `branch`, `contact`, `event`, `email`) 
	VALUES ('".$_POST['name_std']."','".$_POST['parent']."','".$_POST['dob']."','".$_POST['address']."','".$_POST['class']."','".$_POST['branch']."','".$_POST['contact']."','".$_POST['event']."','".$_POST['email']."')";
	if (mysqli_query($conn, $sql)) {
        
$apiKey = urlencode('NDM1OTMzNTA0MjUyMzk2MzVhNGUzMDQ4NzY3NTM5Njc=');
// Message details
$numbers = array($_POST['contact']);
$sender = urlencode('SDCPUC');
$message = rawurlencode('Dear Student 
 Thank you! Registration Successfull for Rastradevobhava inter branch competation
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
		echo "Done you have registered successfully !";
	} 
	else {
	    echo "Error !";
	}
	mysqli_close($conn);
}
?>
