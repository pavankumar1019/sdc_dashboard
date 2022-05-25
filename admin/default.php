<?php
   session_start();
include ("./Modules/includes/header.php");
// include("./modules/dashboard.php");
// include ("./Modules//header.php");
if(isset($_SESSION['username']))
{
    include("./Modules/dashboard.php");
}
else{
    header("location:./"); 
}
include ("./Modules/includes/footer.php");
?>