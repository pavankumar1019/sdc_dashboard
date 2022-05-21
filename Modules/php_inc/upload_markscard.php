<?php
// Turn off error reporting
error_reporting(0);

// Report runtime errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Report all errors
error_reporting(E_ALL);

// Same as error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);
?>
<?php

//import.php

include '../../php_include/db/db.php';
include '../../php_include/vendor/autoload.php';

$result = array();

// import_validate
if($_POST['type']=="import_validate"){
    if($_FILES["file"]["name"] != '')
{
 $allowed_extension = array('xls', 'csv', 'xlsx');
 $file_array = explode(".", $_FILES["file"]["name"]);
 $file_extension = end($file_array);

 if(in_array($file_extension, $allowed_extension))
 {
  $file_name = time() . '.' . $file_extension;
  move_uploaded_file($_FILES['file']['tmp_name'], $file_name);
  $file_type = \PhpOffice\PhpSpreadsheet\IOFactory::identify($file_name);
  $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($file_type);

  $spreadsheet = $reader->load($file_name);

  unlink($file_name);

  $data = $spreadsheet->getActiveSheet()->toArray();

$error=0;
$msg=array();
$usercolumn=array();
$html='';
if($data[0][0]=="" || $data[0][0]!="sats_no"){
  $msg[]="sats_no";
  $error+=1;
}
if($data[0][1]=="" || $data[0][1]!="student_no"){
  $msg[]="student_no";
  $error+=1;
}
if($data[0][2]=="" || $data[0][2]!="reg_no"){
  $msg[]="reg_no";
  $error+=1;
}
if($data[0][3]=="" || $data[0][3]!="student_name"){
  $msg[]="student_name";
  $error+=1;
}
if($data[0][4]=="" || $data[0][4]!="father_name"){
  $msg[]="father_name";
  $error+=1;
}
if($data[0][5]=="" || $data[0][5]!="mother_name"){
  $msg[]="mother_name";
  $error+=1;
}
if($data[0][6]=="" || $data[0][6]!="lang_code"){
  $msg[]="lang_code";
  $error+=1;
}
if($data[0][7]=="" || $data[0][7]!="l1"){
  $msg[]="l1";
  $error+=1;
}
if($data[0][8]=="" || $data[0][8]!="l2"){
  $msg[]="l2";
  $error+=1;
}
if($data[0][9]=="" || $data[0][9]!="sub1"){
  $msg[]="sub1";
  $error+=1;
}
if($data[0][10]=="" || $data[0][10]!="sub2"){
  $msg[]="sub2";
  $error+=1;
}
if($data[0][11]=="" || $data[0][11]!="sub3"){
  $msg[]="sub3";
  $error+=1;
}
if($data[0][12]=="" || $data[0][12]!="sub4"){
  $msg[]="sub4";
  $error+=1;
}
if($data[0][13]=="" || $data[0][13]!="gt"){
  $msg[]="gt";
  $error+=1;
}
if($data[0][14]=="" || $data[0][14]!="class_code"){
  $msg[]="class_code";
  $error+=1;
}
if($data[0][15]=="" || $data[0][15]!="year_of_passing"){
  $msg[]="year_of_passing";
  $error+=1;
}



for($i=0; $i<sizeof($data[0]); $i++){
      $usercolumn[]=$data[0][$i];
}
if($error !=0){
  echo "Columns Required ( <b style='color:red;font-weight:bold;'>".implode(", ",$msg)."</b> ). <br> Your file contains - ( 
    ".implode(", ",$usercolumn)."
  )";
}else{
  
    unset($data[0]);
    foreach($data as $row)
    {
     $insert_data = array(
    "sats_no"=>$row[0],
    "student_no"=>$row[1],
    "reg_no"=>$row[2],
     "student_name"=>$row[3],
     "father_name"=>$row[4],
     "mother_name"=>$row[5],
     "langcode"=>$row[6],
     "l1"=>$row[7],
     "l2"=>$row[8],
     "s1"=>$row[9],
     "s2"=>$row[10],
     "s3"=>$row[11],
     "s4"=>$row[12],
     "gt"=>$row[13],
     "class_code"=>$row[14],
     "year_of_passing"=>$row[15],
     );
     $table_columns= implode(',', array_keys($insert_data));
     $table_data= implode("', '", $insert_data);
   $sql = "INSERT INTO sdc_marks_card_bpet ($table_columns) VALUES ('$table_data') "; 
   $conn->query($sql);
$error=true;
    }
    if ($error==true) {
      echo "<p style='font-weight:bold; font-size:20px;color:blue;'>Data Deployed Successfully :) </p>";
    } else {
      echo "duplicate entries are present in the file faild to insert  (:";
    }


echo $html;

}



 }
}
}


// add


if($_POST['type']=="truncate"){
    $sql = "TRUNCATE TABLE sdc_marks_card_bpet"; 
   if($conn->query($sql)){
       echo "done";
   }else{
       echo "failed to truncate";
   }
}
if($_POST['type']=="loaddata"){
    if(isset($_POST["query"]))
    {
      $search = mysqli_real_escape_string($conn, $_POST["query"]);
      $query = "
       SELECT * FROM sdc_marks_card_bpet 
       WHERE reg_no LIKE '%".$search."%'
       OR student_name LIKE '%".$search."%' 
      ";
     }
     else
     {
      $query = "
       SELECT * FROM sdc_marks_card_bpet ORDER BY reg_no
      ";
     }
     $result = $conn->query($query);

    $html='';
    $html.=' <table class="table table-bordered">
    <thead>
      <tr>
        <th>
          Reg_no
        </th>
        <th>
      Student Detailes
        </th>
        <th>
          Marks
        </th>
        <th>
          Grand Total
        </th>
        <th>
          Deadline
        </th>
      </tr>
    </thead>
    <tbody>
 ';

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          $html.='

                        <tr>
                          <td>
                   '.$row['reg_no'].'
                          </td>
                          <td>
                          Student Name: <b>
                      '.$row['student_name'].'</b><br>
                          Father Name: <b>
                      '.$row['father_name'].'</b><br>
                          Mother Name: <b>
                      '.$row['mother_name'].'</b><br>
                  
                          </td>
                          <td>
                         L1 : <b>
                         '.$row['l1'].'</b><br>
                         L2 :<b>
                         '.$row['l2'].'</b><br>
                         Subject1 :<b>
                         '.$row['s1'].'</b><br>
                         Subject2 :<b>
                         '.$row['s2'].'</b><br>
                         subject3 :<b>
                         '.$row['s3'].'</b><br>
                         subject4 :<b>
                         '.$row['s4'].'</b><br>
                          </td>
                          <td style="font-weight:bold;font-size:20px;">
                        '.$row['gt'].'
                          </td>
                          <td>
                          <button type="submit" class="btn  btn-outline-warning mr-2">View</button>
                          <button type="submit" class="btn  btn-primary mr-2" id="print" data-id='.$row['reg_no'].'>Print</button>
                          <button type="submit" class="btn  btn-secondary mr-2">Edit</button>

                          </td>
                        </tr>
                  
                  
';   
  }
  $html.='    </tbody>
  </table>';
  echo $html;
    } else {
      echo "0 results";
    }
}



// printdata

?>
