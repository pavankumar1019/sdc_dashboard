<?php
session_start();

if(isset($_SESSION['name']))
{
    if($_SESSION['branch']==1){
        // bangarpet branch tabels
        $sdc_marks_card="sdc_marks_card_bpet"; 
     }
if($_SESSION['branch']==2){
    // kgf branch tabels
    $sdc_marks_card="sdc_marks_card_kgf"; 
}


    include ("./model/includes/header.php");
    include("./model/dashboard.php");
    include ("./model/includes/footer.php");
}
 else{
    header("location:index.php");
}

?>