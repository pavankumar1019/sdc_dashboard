<?php  
include ('../db_bpet_sdc/db.php');
if($_POST['type']=="downloadnewadmission"){
    $sql = $_POST['cmd'];  
    $setRec = mysqli_query($conn, $sql);  
   $setData = '';  
      while ($rec = mysqli_fetch_row($setRec)) {  
        $rowData = '';  
        foreach ($rec as $value) {  
            $value = '"' . $value . '"' . "\t";  
            $rowData .= $value;  
        }  
        $setData .= trim($rowData) . "\n";  
    }  
      
    header("Content-type: application/octet-stream");  
    header("Content-Disposition: attachment; filename=User_Detail.xls");  
    header("Pragma: no-cache");  
    header("Expires: 0");  
    
      echo  $setData; 
}


 ?> 