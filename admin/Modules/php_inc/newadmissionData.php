<?php
include '../../php_include/db/db.php';
function get_total_row($connect)
{
  $query = "
  SELECT * FROM new_admission_bpet
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
SELECT * FROM new_admission_bpet 
";

if($_POST['query'] != '')
{
  $query .= '
  WHERE student_name LIKE "%'.str_replace(' ', '%', $_POST['query']).'%" 
  ';
}

$query .= 'ORDER BY id ASC ';

$filter_query = $query . 'LIMIT '.$start.', '.$limit.'';

$statement = $connect->prepare($query);
$statement->execute();
$total_data = $statement->rowCount();

$statement = $connect->prepare($filter_query);
$statement->execute();
$result = $statement->fetchAll();
$total_filter_data = $statement->rowCount();

$output = '
<label>Total Records Found - '.$total_data.'</label>
<table class="table table-striped table-bordered">
  <tr>
    <th>ID</th>
    <th>Detailes</th>
    <th>Photo</th>
    <th>Sats_Number</th>
    <th>Crud</th>
  </tr>
';
if($total_data > 0)
{
  // function count_digit($number) {
  //   ret strlen($number);
  // }
  
   foreach($result as $row)
  {
	
		  if($row["photo"] != 'null'){
			$checkimage= '<img src="./" >';
		  }else{
$checkimage= '<input type="file" name="photo" data-id="'.$row['id'].'">';
		  }
// 		  if($row["sats"] != 'null'){
// 			$checksats= $row["sats"];
// 		  }else{
// $checksats='<input type="text" name="sats" data-id="'.$row['id'].'">&nbsp;<button class="btn btn-outline-info btn-sm">ADD</button>';
// 		  }
		  if(strlen($row["mobile_no"])=="10"){
			$checksats= $row["mobile_no"];
		  }else{
$checksats='<input type="text" name="sats" data-id="'.$row['id'].' value='.$row["mobile_no"].'">&nbsp;<button class="btn btn-outline-info btn-sm">ADD</button>';
		  }
	$detailes='
	<h3>'.$row['student_name'].'</h3>
	<p>'.$row['father_name'].'</p>
	<p>Percentage in SSLC '.$row['per'].'%<br> Combination Optained'.$row['combination_opted'].'<br> Language Optained'.$row['lang_opted'].'</p>
	<p>Total Marks &nbsp;'.$row['total'].'</p>
  ';
    $output .= '
    <tr>
      <td>'.$row["id"].'</td>
      <td>'.$detailes.'</td>
      <td>'.$checkimage.'</td>
      <td>'.$checksats.'</td>
      <td><button class="btn btn-warning">Edit</button></td>
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

?>
    