
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
	VALUES ('".$_POST['name']."','".$_POST['parent']."','".$_POST['dob']."','".$_POST['address']."','".$_POST['class']."','".$_POST['branch']."','".$_POST['contact']."','".$_POST['event']."','".$_POST['email']."')";
	if (mysqli_query($conn, $sql)) {
		echo "Succeess !";
	} 
	else {
	    echo "Error !";
	}
	mysqli_close($conn);
}
?>
