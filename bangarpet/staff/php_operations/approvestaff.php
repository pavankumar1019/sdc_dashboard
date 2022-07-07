<?php
include '../db_bpet_sdc/db.php';
if($_POST['type']=="loaddata"){
    function get_total_row($connect)
    {
      $query = "SELECT * FROM `staff` WHERE branch='".$_SESSION['branch_staff']."'";
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
    
    $query = "SELECT * FROM `staff` " ;
   
    
    $query .= 'ORDER BY id DSC ';
    
    $filter_query = $query . 'LIMIT '.$start.', '.$limit.'';
    
    $statement = $connect->prepare($query);
    $statement->execute();
    $total_data = $statement->rowCount();
    
    $statement = $connect->prepare($filter_query);
    $statement->execute();
    $result = $statement->fetchAll();
    $total_filter_data = $statement->rowCount();
    
    $output = '
<p>Total Requests : '.$total_data.' </p>
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
                                                    <h5 class="mb-1">'.$row['name'].'</h5>
                                                    </td>
                                                    <td>
                                                        <h6 class="mb-1">'.$row['name'].'</h6>
                                                        <p class="m-0">'.$row['name'].'</p>
                                                        <p class="m-0">'.$row['name'].'</p>
                                                      
                                                    </td>
                                                    <td>
                                                    <p class="m-0">'.$row['name'].'</p>
                
                                                    
                                                    </td>
                                                    <td>
                                                  <p class="text-muted">'.$row['name'].'</p>
                                                    </td>
                                                    <td>
                                                    <p class="text-muted">'.$row['name'].'</p>

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

    $insert_data = array(
         "roll"=>$_POST['reg_no'],
         "l1"=>$_POST['l1'],
         "l2"=>$_POST['l2'],
         "s1"=>$_POST['s1'],
         "s2"=>$_POST['s2'],
         "s3"=>$_POST['s3'],
         "s4"=>$_POST['s4'],
         "total"=>$_POST['gt'],
         );
         $table_columns= implode(',', array_keys($insert_data));
         $table_data= implode("', '", $insert_data);
       $sql = "INSERT INTO ".$class_test_marks." ($table_columns) VALUES ('$table_data') "; 
       $conn->query($sql);
    $error=true;
        
        if ($error==true) {
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
    LEFT JOIN '.$class_test_marks.' ON '.$tbl_admission.'.RollNo = '.$class_test_marks.'.roll  WHERE '.$tbl_admission.'.Class='.$_SESSION['class_id'].' AND '.$tbl_admission.'.RollNo="'.$_POST['id'].'"
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

  $insert_data = array(
 
    "l1"=>$_POST['l1'],
    "l2"=>$_POST['l2'],
    "s1"=>$_POST['s1'],
    "s2"=>$_POST['s2'],
    "s3"=>$_POST['s3'],
    "s4"=>$_POST['s4'],
    "total"=>$_POST['gt'],
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


  $sql ="UPDATE ".$class_test_marks." SET ".$query." WHERE roll='".$_POST['id']."'";  
  if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }

}
?>
    