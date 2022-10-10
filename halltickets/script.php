<?php

//import.php

include './vendor/autoload.php';

$result = array();
if(isset($_POST['type'])=="import_validate"){
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
if($data[0][0]=="" || $data[0][0]!="name"){
  $msg[]="name";
  $error+=1;
}
if($data[0][1]=="" || $data[0][1]!="reg_no"){
  $msg[]="reg_no";
  $error+=1;
}
if($data[0][2]=="" || $data[0][2]!="combination"){
  $msg[]="combination";
  $error+=1;
}
if($data[0][3]=="" || $data[0][3]!="student_no"){
  $msg[]="student_no";
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
  $html.= '<div class="table-responsive"  style=" height: 300px;overflow-y:scroll;">
  <input type="hidden" data-id="deploy" id="deploy_id">
  <table class="table table-striped">
  <thead>
  <tr>
    <th>name</th>
    <th>reg_no</th>
    <th>combination</th>
    <th>student_no</th>
    
  </tr>
  </thead>
  <tbody>
   ';
 
   unset($data[0]);
  foreach($data as $row){
    $html.='
    <tr>
    <td>'.$row[0].'</td>
    <td>'.$row[1].'</td>
    <td>'.$row[2].'</td>
    <td>'.$row[3].'</td>
   
  </tr>
    ';
  }
  $html.= '
  </tbody>
  </table>
  <div>
  <button class="btn btn-primary" id="button2">Generate Hall Tickets</button>

  </div>
</div>';

echo $html;

}



 }
}
}


// add


?>
