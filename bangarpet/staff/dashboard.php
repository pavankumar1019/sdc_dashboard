<?php
session_start();

if(isset($_SESSION['name_staff']))
{
    include ("./model/includes/header.php");
    include("./model/dashboard.php");
    include ("./model/includes/footer.php");
}
 else{
    header("location:index.php");
}

?>