
<?php
include '../db_bpet_sdc/db.php';
if($_POST['type']=="getcount"){

  $query = "
  SELECT * FROM ".$tbl_admission."
  ";
  $statement = $connect->prepare($query);
  $statement->execute();
  echo $statement->rowCount();

}

// load data

if($_POST['type']=="loaddata"){
  function get_total_row($connect)
  {
    $query = "
    SELECT * FROM ".$tbl_admission."
    ";
    $statement = $connect->prepare($query);
    $statement->execute();
    return $statement->rowCount();
  }
  
  $total_record = get_total_row($connect);
  
  $limit = '6';
  $page = 1;
  if($_POST['page'] > 1)
  {
    $start = (($_POST['page'] - 1) * $limit);
    $page = $_POST['page'];
  }
  else
  {
    $start = 0;
  }
  
  $query = "
  SELECT * FROM ".$tbl_admission." 
  ";
  
  if($_POST['query'] != '')
  {
    $query .= '
    WHERE RollNo  LIKE "%'.str_replace(' ', '%', $_POST['query']).'%"  OR StudentName  LIKE "%'.str_replace(' ', '%', $_POST['query']).'%" 
    OR combination  LIKE "%'.str_replace(' ', '%', $_POST['query']).'%"   OR mobile_no  LIKE "%'.str_replace(' ', '%', $_POST['query']).'%" 
    OR Class  LIKE "%'.str_replace(' ', '%', $_POST['query']).'%"  
    ';
  }
  
  $query .= 'ORDER BY RollNo ASC ';
  
  $filter_query = $query . 'LIMIT '.$start.', '.$limit.'';
  
  $statement = $connect->prepare($query);
  $statement->execute();
  $total_data = $statement->rowCount();
  
  $statement = $connect->prepare($filter_query);
  $statement->execute();
  $result = $statement->fetchAll();
  $total_filter_data = $statement->rowCount();
  
  $output = '
<h2>'.$total_data.'</h2>
  <table class="table table-hover">
  <tbody>
  ';
  if($total_data > 0)
  {
    // function count_digit($number) {
    //   ret strlen($number);
    // }
    
     foreach($result as $row)
    {
      if($row['Class']==0){
        $number_phone='<i
        class="fas fa-circle text-c-red f-10 m-r-15"></i>Null';
      }else{
        $class="SELECT * from class where id='".$row['Class']."'";
        $classresult= $conn->query($class);
        foreach($classresult as $cls){
            $number_phone='<i
            class="fas fa-circle text-c-green f-10 m-r-15"></i>'.$cls['section'].'-'.$cls['name'];
        }
    
      }
          
      $output .= '
      <tr class="unread">
      <td>   <h6 class="mb-1">'.$row['RollNo'].'</h6>
      </td> 
      <td>
          <h6 class="mb-1">'.$row['StudentName'].'</h6>
          <p class="m-0">Father Name : '.$row['father_name'].'<br>'.$row['combination'].'<br>'.$row['lang_code'].'<br>'.$row['mobile_no'].'</p>
      </td>
      <td>
          <h6 class="text-muted">'.$number_phone.'</h6>
      </td>
      <td><a href="#!"
              class="label theme-bg2 text-white f-12" data-id='.$row['id'].' id="edit">Edit</a><a
              href="#!" class="label theme-bg text-white f-12" id="delete" data-id='.$row['id'].'>Delete</a>
      </td>
  </tr>
      ';
    }
  }
  else
  {
    $output .= '
    <tr>
      <td colspan="2" align="center">No Data Found</td>
    </tr>
    ';
  }
  
  $output .= '
  </tbody>
  </table>
  <br />
  <div align="center">
    <ul class="pagination">
  ';
  
  $total_links = ceil($total_data/$limit);
  $previous_link = '';
  $next_link = '';
  $page_link = '';
  
  //echo $total_links;
  
  if($total_links > 4)
  {
    if($page < 5)
    {
      for($count = 1; $count <= 5; $count++)
      {
        $page_array[] = $count;
      }
      $page_array[] = '...';
      $page_array[] = $total_links;
    }
    else
    {
      $end_limit = $total_links - 5;
      if($page > $end_limit)
      {
        $page_array[] = 1;
        $page_array[] = '...';
        for($count = $end_limit; $count <= $total_links; $count++)
        {
          $page_array[] = $count;
        }
      }
      else
      {
        $page_array[] = 1;
        $page_array[] = '...';
        for($count = $page - 1; $count <= $page + 1; $count++)
        {
          $page_array[] = $count;
        }
        $page_array[] = '...';
        $page_array[] = $total_links;
      }
    }
  }
  else
  {
    for($count = 1; $count <= $total_links; $count++)
    {
      $page_array[] = $count;
    }
  }
  
  for($count = 0; $count < count($page_array); $count++)
  {
    if($page == $page_array[$count])
    {
      $page_link .= '
      <li class="page-item active">
        <a class="page-link" href="#">'.$page_array[$count].' <span class="sr-only">(current)</span></a>
      </li>
      ';
  
      $previous_id = $page_array[$count] - 1;
      if($previous_id > 0)
      {
        $previous_link = '<li class="page-item"><a class="page-link" href="javascript:void(0)" data-page_number="'.$previous_id.'">Previous</a></li>';
      }
      else
      {
        $previous_link = '
        <li class="page-item disabled">
          <a class="page-link" href="#">Previous</a>
        </li>
        ';
      }
      $next_id = $page_array[$count] + 1;
      if($next_id >= $total_links)
      {
        $next_link = '
        <li class="page-item disabled">
          <a class="page-link" href="#">Next</a>
        </li>
          ';
      }
      else
      {
        $next_link = '<li class="page-item"><a class="page-link" href="javascript:void(0)" data-page_number="'.$next_id.'">Next</a></li>';
      }
    }
    else
    {
      if($page_array[$count] == '...')
      {
        $page_link .= '
        <li class="page-item disabled">
            <a class="page-link" href="#">...</a>
        </li>
        ';
      }
      else
      {
        $page_link .= '
        <li class="page-item"><a class="page-link" href="javascript:void(0)" data-page_number="'.$page_array[$count].'">'.$page_array[$count].'</a></li>
        ';
      }
    }
  }
  
  $output .= $previous_link . $page_link . $next_link;
  $output .= '
    </ul>
  
  </div>
  ';
  
  echo $output;
}
// edit data get
if($_POST['type']=="edit"){
  $query = '
  SELECT * FROM '.$tbl_admission.' WHERE id="'.$_POST['id'].'"
  ';
  $statement = $connect->prepare($query);
  $statement->execute();
  $result = $statement->fetchAll();

  foreach($result as $row){
    echo json_encode(array(
      "sats"=>$row['sats'],
      "RollNo"=>$row['RollNo'],
      "student_number"=>$row['student_number'],
      "StudentName"=>$row['StudentName'],
      "father_name"=>$row['father_name'],
      "mother_name"=>$row['mother_name'],
      "dob"=>$row['dob'],
      "mobile_no"=>$row['mobile_no'],
      "Class"=>$row['Class'],
      "combination"=>$row['combination'],
      "lang_code"=>$row['lang_code'],
      "class_name"=>$row['class_name'],
      "id"=>$row['id']
    
   
  ));
  }
}

// add data
if($_POST['type']=="add"){
$dob = $_POST['dd'].'-'.$_POST['mm'].'-'.$_POST['yy'];
  $insert_data = array(
    "sats"=>$_POST['sats'],
    "RollNo"=>$_POST['RollNo'],
    "student_number"=>$_POST['student_number'],
    "StudentName"=>$_POST['StudentName'],
    "father_name"=>$_POST['father_name'],
    "mother_name"=>$_POST['mother_name'],
    "dob"=>$_POST['dob'],
    "mobile_no"=>$_POST['mobile_no'],
    "Class"=>$_POST['Class'],
    "combination"=>$_POST['combination'],
    "lang_code"=>$_POST['lang_code'],
    "class_name"=>$_POST['class_name']
       );
       $table_columns= implode(',', array_keys($insert_data));
       $table_data= implode("', '", $insert_data);
     $sql = "INSERT INTO ".$tbl_admission." ($table_columns) VALUES ('$table_data') "; 
     if($conn->query($sql)==TRUE){
echo "Done";
     }
     else{
      echo "Failed";
     }
 

}

if($_POST['type']=="update"){
  
  $insert_data = array(
    "id"=>$_POST['id'],
    "StudentName"=>$_POST['StudentName'],
    "father_name"=>$_POST['father_name'],
    "mother_name"=>$_POST['mother_name'],
    "dob"=>$_POST['dob'],
    "mobile_no"=>$_POST['mobile_no'],
    "Class"=>$_POST['Class'],
    "combination"=>$_POST['combination'],
    "lang_code"=>$_POST['lang_code'],
    "class_name"=>$_POST['class_name']
       );
  $query = '';   
  foreach($insert_data as $key => $value)  
  {  
       $query .= $key . "='".$value."', ";  
  }  
  $query = substr($query, 0, -2);  
  /*This code will convert array to string like this-  
  input - array(  
       'key1'     =>     'value1',  
       'key2'     =>     'value2'  
  )  
  output = key1 = 'value1', key2 = 'value2'*/  


  $sql ="UPDATE ".$tbl_admission." SET ".$query." WHERE id=".$_POST['id']."";  
  if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }

}

if($_POST['type']=="delete"){
  $query = '
  DELETE FROM '.$tbl_admission.' WHERE id="'.$_POST['id'].'"
  ';
  $statement = $connect->prepare($query);
  $statement->execute();  
  $query1 = '
  DELETE FROM '.$tbl_absentees.' WHERE id="'.$_POST['id'].'"
  ';
  $statement1 = $connect->prepare($query1);
  $statement1->execute();  
}

if($_POST['type']=="sats_check"){
  $sql = '
  SELECT * FROM '.$tbl_admission.' WHERE sats="'.$_POST['value'].'"
  ';
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
	echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
}
?>