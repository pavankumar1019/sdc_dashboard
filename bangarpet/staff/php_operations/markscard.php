<?php
include '../db_bpet_sdc/db.php';
if($_POST['type']=="loaddata"){
    function get_total_row($connect)
    {
      $query = "
      SELECT * FROM ".$sdc_marks_card."
      ";
      $statement = $connect->prepare($query);
      $statement->execute();
      return $statement->rowCount();
    }
    
    $total_record = get_total_row($connect);
    
    $limit = '47';
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
   
    $query = "SELECT ".$tbl_admission.".StudentName,  ".$tbl_admission.".father_name, ".$tbl_admission.".mobile_no, ".$tbl_admission.".RollNo, ".$class_test_marks.".l1, ".$class_test_marks.".l2,  ".$class_test_marks.".s1, ".$class_test_marks.".s2,  ".$class_test_marks.".s3,  ".$class_test_marks.".s4,  ".$class_test_marks.".total
    FROM ".$tbl_admission."
    LEFT JOIN ".$class_test_marks." ON ".$tbl_admission.".RollNo = ".$class_test_marks.".roll AND ".$class_test_marks.".test_id=". $_SESSION['test_name']."    WHERE ".$tbl_admission.".Class=".$_SESSION['class_id']."  
    ";
    
    if($_POST['query'] != '')
    {
      $query .= '
     AND '.$tbl_admission.'.RollNo LIKE "%'.str_replace(' ', '%', $_POST['query']).'%"  OR 
     '.$tbl_admission.'.StudentName LIKE "%'.str_replace(' ', '%', $_POST['query']).'%"  
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
<p>Total Students : '.$total_data.' </p>
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
         if($row['l1']!="" && $row['l2']!="" && $row['s1']!="" && $row['s2']!="" && $row['s3']!="" && $row['s4']!=""){
          $status= '<span style="color:blue;">APPROVED</span>' ;
          $function='  <a class="label theme-bg text-white f-12" data-id='.$row['RollNo'].' id="edit" style="cursor: pointer;">UPDATE</a>';

            }else{
              $status= '<span style="color:red;">PENDING</span>' ;
              $function='  <a class="label theme-bg2 text-white f-12" data-id='.$row['RollNo'].' id="add" style="cursor: pointer;">ADD MARKS</a>';

            }
        
            // if($row['class_code']==5){
            //     $class="PCMB";
            // }
            // if($row['class_code']==4){
            //     $class="PCMCS";
            // }
            // if($row['class_code']==3){
            //     $class="EBAS";
            // }
            // if($row['class_code']==2){
            //     $class="EBACS";
            // }
            // if($row['class_code']==1){
            //     $class="BASM";
            // }

        $output .= '
        <tr class="unread">
                                                    <td>
                                                    <h5 class="mb-1">'.$row['RollNo'].'</h5>
                                                    </td>
                                                    <td>
                                                        <h6 class="mb-1">'.$row['StudentName'].'</h6>
                                                        <p class="m-0">'.$row['father_name'].'</p>
                                                        <p class="m-0">'.$row['mobile_no'].'</p>
                                                      
                                                    </td>
                                                    <td>
                                                        <h6 class="text-muted"><i
                                                                class="fas fa-circle text-c-green f-10 m-r-15"></i>L1 :
                                                                '.$row['l1'].'  &nbsp;&nbsp;&nbsp;<i
                                                                class="fas fa-circle text-c-green f-10 m-r-15"></i>L2 :
                                                                '.$row['l2'].' </h6>
                                                       
                                                        <h6 class="text-muted"><i
                                                                class="fas fa-circle text-c-blue f-10 m-r-15"></i>S1 :
                                                                '.$row['s1'].'  &nbsp;&nbsp;&nbsp;<i
                                                                class="fas fa-circle text-c-blue f-10 m-r-15"></i>S2 :
                                                                '.$row['s2'].' 
                                                        
                                                        </h6>
                                                        <h6 class="text-muted"><i
                                                                class="fas fa-circle text-c-blue f-10 m-r-15"></i>S3 :
                                                                '.$row['s3'].'  &nbsp;&nbsp;&nbsp;<i
                                                                class="fas fa-circle text-c-blue f-10 m-r-15"></i>S4 :
                                                                '.$row['s4'].' 
                                                        
                                                        </h6>
                                                        <h6 class="text-muted"><i
                                                                class="fas fa-circle text-c-black f-10 m-r-15"></i>TOTAL : 
                                                                '.$row['total'].' 
                                                        </h6>
                
                                                    
                                                    </td>
                                                    <td>
                                                  <p class="text-muted">'.$status.'</p>
                                                    </td>
                                                    <td>
'.$function.'
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

if($_POST['type']=="getcount"){

    $query = "
    SELECT * FROM ".$sdc_marks_card."
    ";
    $statement = $connect->prepare($query);
    $statement->execute();
    echo $statement->rowCount();

}
if($_POST['type']=="add"){
  $total=$_POST['l1']+$_POST['l2']+$_POST['s1']+$_POST['s2']+$_POST['s3']+$_POST['s4'];
    $insert_data = array(
         "roll"=>$_POST['reg_no'],
         "test_id"=>$_POST['testname'],
         "l1"=>$_POST['l1'],
         "l2"=>$_POST['l2'],
         "s1"=>$_POST['s1'],
         "s2"=>$_POST['s2'],
         "s3"=>$_POST['s3'],
         "s4"=>$_POST['s4'],
         "total"=>$total,
         );
         $table_columns= implode(',', array_keys($insert_data));
         $table_data= implode("', '", $insert_data);
       $sql = "INSERT INTO ".$class_test_marks." ($table_columns) VALUES ('$table_data')"; 
       
          if ($conn->query($sql)) {
          echo "Done";
        } else {
          echo "Failed Duplicate entry. !";
        }
    
    
    echo $html;

}

if($_POST['type']=="edit"){
  $query = 
  'SELECT '.$tbl_admission.'.StudentName,  '.$tbl_admission.'.father_name, '.$tbl_admission.'.mobile_no, '.$tbl_admission.'.RollNo, '.$class_test_marks.'.l1, '.$class_test_marks.'.l2,  '.$class_test_marks.'.s1, '.$class_test_marks.'.s2,  '.$class_test_marks.'.s3,  '.$class_test_marks.'.s4,  '.$class_test_marks.'.total
    FROM '.$tbl_admission.'
    LEFT JOIN '.$class_test_marks.' ON '.$tbl_admission.'.RollNo = '.$class_test_marks.'.roll AND '.$class_test_marks.'.test_id='. $_SESSION['test_name'].' WHERE '.$tbl_admission.'.Class='.$_SESSION['class_id'].' AND '.$tbl_admission.'.RollNo="'.$_POST['id'].'"
    '
  ;
  $statement = $connect->prepare($query);
  $statement->execute();
  $result = $statement->fetchAll();

  foreach($result as $row){

    echo json_encode(array(
  
     
      "reg_no"=>$row['RollNo'],
      "name"=>$row['StudentName'],
      "father_name"=>$row['father_name'],
      "l1"=>$row['l1'],
      "l2"=>$row['l2'],
      "s1"=>$row['s1'],
      "s2"=>$row['s2'],
      "s3"=>$row['s3'],
      "s4"=>$row['s4'],
      "gt"=>$row['total'],  
  ));
  }



}



// update marks card
if($_POST['type']=="update"){

  $total=$_POST['l1']+$_POST['l2']+$_POST['s1']+$_POST['s2']+$_POST['s3']+$_POST['s4'];
  $insert_data = array(
 
    "l1"=>$_POST['l1'],
    "l2"=>$_POST['l2'],
    "s1"=>$_POST['s1'],
    "s2"=>$_POST['s2'],
    "s3"=>$_POST['s3'],
    "s4"=>$_POST['s4'],
    "total"=>$total,
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


  $sql ="UPDATE ".$class_test_marks." SET ".$query." WHERE roll='".$_POST['id']."' AND test_id='". $_SESSION['test_name']."'";  
  if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }

}

// gettest name 
// update marks card
if($_POST['type']=="gettest"){
  $query = 
  'SELECT * FROM `'.$current_test.'` WHERE class='.$_POST['value'].' ORDER BY id DESC LIMIT 0, 1'
  ;
  $statement = $connect->prepare($query);
  $statement->execute();
  $result = $statement->fetchAll();

  foreach($result as $row){
echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
}
}
?>
    