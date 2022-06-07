<?php
include '../db_bpet_sdc/db.php';
if($_POST['type']=="loaddata"){
    function get_total_row($connect)
    {
      $query = "
      SELECT * FROM sdc_marks_card_bpet
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
    SELECT * FROM sdc_marks_card_bpet 
    ";
    
    if($_POST['query'] != '')
    {
      $query .= '
      WHERE reg_no LIKE "%'.str_replace(' ', '%', $_POST['query']).'%" 
      ';
    }
    
    $query .= 'ORDER BY reg_no ASC ';
    
    $filter_query = $query . 'LIMIT '.$start.', '.$limit.'';
    
    $statement = $connect->prepare($query);
    $statement->execute();
    $total_data = $statement->rowCount();
    
    $statement = $connect->prepare($filter_query);
    $statement->execute();
    $result = $statement->fetchAll();
    $total_filter_data = $statement->rowCount();
    
    $output = '

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
        
            if($row['class_code']==5){
                $class="PCMB";
            }
            if($row['class_code']==4){
                $class="PCMCS";
            }
            if($row['class_code']==3){
                $class="EBAS";
            }
            if($row['class_code']==2){
                $class="EBACS";
            }
            if($row['class_code']==1){
                $class="BASM";
            }

        $output .= '
        <tr class="unread">
                                                    <td>
                                                    <h5 class="mb-1">'.$row['reg_no'].'</h5>
                                                    </td>
                                                    <td>
                                                        <h6 class="mb-1">'.$row['student_name'].'</h6>
                                                        <p class="m-0">'.$row['father_name'].'</p>
                                                        <p class="m-0">'.$class.'</p>
                                                      
                                                    </td>
                                                    <td>
                                                        <h6 class="text-muted"><i
                                                                class="fas fa-circle text-c-green f-10 m-r-15"></i>L1
                                                                '.$row['l1'].'  &nbsp;&nbsp;&nbsp;<i
                                                                class="fas fa-circle text-c-green f-10 m-r-15"></i>L2
                                                                '.$row['l2'].' </h6>
                                                       
                                                        <h6 class="text-muted"><i
                                                                class="fas fa-circle text-c-blue f-10 m-r-15"></i>S1
                                                                '.$row['s1'].'  &nbsp;&nbsp;&nbsp;<i
                                                                class="fas fa-circle text-c-blue f-10 m-r-15"></i>S2
                                                                '.$row['s2'].' 
                                                        
                                                        </h6>
                                                        <h6 class="text-muted"><i
                                                                class="fas fa-circle text-c-blue f-10 m-r-15"></i>S3
                                                                '.$row['s3'].'  &nbsp;&nbsp;&nbsp;<i
                                                                class="fas fa-circle text-c-blue f-10 m-r-15"></i>S4
                                                                '.$row['s4'].' 
                                                        
                                                        </h6>
                                                        <h6 class="text-muted"><i
                                                                class="fas fa-circle text-c-black f-10 m-r-15"></i>TOTAL : 
                                                                '.$row['gt'].' 
                                                        </h6>
                
                                                    
                                                    </td>
                                                    <td><a 
                                                            class="label theme-bg2 text-white f-12" data-id='.$row['reg_no'].' id="print" style="cursor: pointer;">Print</a><a
                                                            class="label theme-bg text-white f-12" data-id='.$row['reg_no'].' >Edit</a>
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
    SELECT * FROM sdc_marks_card_bpet
    ";
    $statement = $connect->prepare($query);
    $statement->execute();
    echo $statement->rowCount();

}
?>
    