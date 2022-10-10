<?php

//import.php

include '../vendor/autoload.php';

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
if($data[0][0]=="" || $data[0][0]!="categories"){
  $msg[]="categories";
  $error+=1;
}
if($data[0][1]=="" || $data[0][1]!="acession_no"){
  $msg[]="acession_no";
  $error+=1;
}
if($data[0][2]=="" || $data[0][2]!="isbn_issn_no"){
  $msg[]="acession_no";
  $error+=1;
}
if($data[0][3]=="" || $data[0][3]!="title"){
  $msg[]="title";
  $error+=1;
}
if($data[0][4]=="" || $data[0][4]!="pages"){
  $msg[]="pages";
  $error+=1;
}
if($data[0][5]=="" || $data[0][5]!="price"){
  $msg[]="price";
  $error+=1;
}
if($data[0][6]=="" || $data[0][6]!="invoice_no"){
  $msg[]="invoice_no";
  $error+=1;
}
if($data[0][7]=="" || $data[0][7]!="purchase_date"){
  $msg[]="purchase_date";
  $error+=1;
}
if($data[0][8]=="" || $data[0][8]!="rack_id"){
  $msg[]="rack_id";
  $error+=1;
}
if($data[0][9]=="" || $data[0][9]!="main_author"){
  $msg[]="main_author";
  $error+=1;
}
if($data[0][10]=="" || $data[0][10]!="joint_author"){
  $msg[]="joint_author";
  $error+=1;
}
if($data[0][11]=="" || $data[0][11]!="publisher"){
  $msg[]="publisher";
  $error+=1;
}
if($data[0][12]=="" || $data[0][12]!="place_publication"){
  $msg[]="place_publication";
  $error+=1;
}
if($data[0][13]=="" || $data[0][13]!="year_publication"){
  $msg[]="year_publication";
  $error+=1;
}
if($data[0][14]=="" || $data[0][14]!="edition"){
  $msg[]="edition";
  $error+=1;
}
if($data[0][15]=="" || $data[0][15]!="ddcn"){
  $msg[]="ddcn";
  $error+=1;
}
if($data[0][16]=="" || $data[0][16]!="series"){
  $msg[]="series";
  $error+=1;
}
if($data[0][17]=="" || $data[0][17]!="volume"){
  $msg[]="volume";
  $error+=1;
}
if($data[0][18]=="" || $data[0][18]!="department"){
  $msg[]="department";
  $error+=1;
}
if($data[0][19]=="" || $data[0][19]!="color"){
  $msg[]="color";
  $error+=1;
}
if($data[0][20]=="" || $data[0][20]!="note"){
  $msg[]="note";
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
    <th>Categories</th>
    <th>Acession_No</th>
    <th>ISBN/ISSN</th>
    <th>Title</th>
    <th>Pages</th>
    <th>Price</th>
    <th>Invoice_No</th>
    <th>Purchase_Date</th>
    <th>Rack_ID</th>
    <th>Main_Author</th>
    <th>Joint_Author</th>
    <th>Publisher</th>
    <th>Place Of Publication</th>
    <th>Year Of Publication</th>
    <th>Edition</th>
    <th>DDCN</th>
    <th>Series</th>
    <th>Volume</th>
    <th>Department</th>
    <th>Color</th>
    <th>Note</th>
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
    <td>'.$row[4].'</td>
    <td>'.$row[5].'</td>
    <td>'.$row[6].'</td>
    <td>'.$row[7].'</td>
    <td>'.$row[8].'</td>
    <td>'.$row[9].'</td>
    <td>'.$row[10].'</td>
    <td>'.$row[11].'</td>
    <td>'.$row[12].'</td>
    <td>'.$row[13].'</td>
    <td>'.$row[14].'</td>
    <td>'.$row[15].'</td>
    <td>'.$row[16].'</td>
    <td>'.$row[17].'</td>
    <td>'.$row[18].'</td>
    <td>'.$row[19].'</td>
    <td>'.$row[20].'</td>
    <td>'.$row[21].'</td>
  </tr>
    ';
  }
  $html.= '
  </tbody>
  </table>
</div>';

echo $html;

}



 }
}
}


// add


?>
