<?php
include '../db_bpet_sdc/db.php';
if($_POST['type']=="loaddata"){
    function get_total_row($connect)
    {
      $query = "SELECT * FROM staff WHERE branch='".$_SESSION['branch_staff']."'
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
    
    $query = "SELECT * FROM `staff` WHERE branch='".$_SESSION['branch_staff']."' AND role=''
    ";
    
    if($_POST['query'] != '')
    {
      $query .= '
     AND name LIKE "%'.str_replace(' ', '%', $_POST['query']).'%"  OR 
    phone_no LIKE "%'.str_replace(' ', '%', $_POST['query']).'%"  
      ';
    }
    
    $query .= 'ORDER BY id ';
    
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
                                                 <img src="'.$row['photo'].'" width="50">
                                                    </td>
                                                    <td>
                                                        <h3 class="mb-1">'.$row['name'].'</h3>
                                                       
                                                      
                                                      
                                                    </td>
                                                    <td>
                                                    <p class="m-0">'.$row['phone_no'].'</p>
                
                                                    
                                                    </td>
                                                
                                                    <td>
                                                    <a class="label theme-bg2 text-white f-12" data-id='.$row['id'].' id="reject" style="cursor: pointer;">Reject</a>
                                                    <a class="label theme-bg text-white f-12" data-id='.$row['id'].' id="accpet" style="cursor: pointer;">Enroll</a>
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
if($_POST['type']=="reject"){   
       $sql = "DELETE FROM `staff` WHERE id='".$_POST['id']."'";  
       $conn->query($sql);
    $error=true;
        if ($error==true) {
          echo "Done";
        } else {
          echo "Failed to reject. !";
        }
    
  
    echo $html;

}





// update marks card
if($_POST['type']=="accept"){

$getdata='SELECT * from `staff` where id ="'.$_POST['id'].'"';
$result=$conn->query($getdata);
foreach($result as $row){
  $u_key = substr($row['phone_no'], -4);
  $user_id = substr($row['name'], 0, 5).$u_key;



  $insert_data = array(
 
    "class_id"=>$_POST['class_id'],
    "user_id"=>$user_id,
    "ukey"=>$u_key,
  
    "role"=>"ct",
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


  $sql ="UPDATE `staff` SET ".$query." WHERE id='".$_POST['id']."'";  
    if ($conn->query($sql) === TRUE) {
    $method = 'sendMessage';

    // Message details
  
$content =  rawurlencode('Dear '.$row['name'].' 
Your Credentials to login into staff portal User_ID:'.$user_id.' Key:'.$u_key.'
SDC COLLEGE BANGARPET-563114');
  
  
   
    // Prepare data for POST request
   
    // Send the POST request with cURL
    $ch = curl_init('https://smsforall.com/portal/receive_api/api_request?method=sendMessage&mobileno='.$row['phone_no'].'&content='.$content.'&loginid=Sdcbpet2&auth_scheme=PLAIN&password=Sajsdc@25');
    curl_setopt($ch, CURLOPT_POST, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    echo "Done";

  } else {
    echo "Failed Duplicate entry. !";
  }


}
}
?>
    