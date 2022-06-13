<!DOCTYPE html>

<?php  
include ('../db_bpet_sdc/db.php');
if($_GET['type']=="downloadreport"){
    
      
    header("Content-type: application/octet-stream");  
    header("Content-Disposition: attachment; filename=Attendance".date("Y-m-d").".xls");  
    header("Pragma: no-cache");  
    header("Expires: 0");  
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <style>
    table, thead, tr, td{
border:1px solid black;
    }
    table{
      border-collapse: collapse;
    }
  </style>
</head>
<body>
    <?php
    // $date = array("2013-06-01", "2013-06-02", "2013-06-03", "2013-06-04","2013-06-05","2023-06-06","2013-06-06","2013-06-06","2013-06-06","2013-06-06","2013-06-06","2013-06-06","2013-06-06","2013-06-06","2013-06-06","2013-06-06","2013-06-06","2013-06-06","2013-06-06","2013-06-06","2013-06-06","2013-06-06","2013-06-06","2013-06-06","2013-06-06","2013-06-06","2013-06-06","2013-06-06","2013-06-06","2013-06-06","2013-06-06","2013-06-06","2013-06-06","2013-06-06");
    $date = [];
    $query = "SELECT `Date` FROM  calendar";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
        $date[] = $row["Date"]; 
    }
    ?>
    <table>
        <thead>
            <tr>
                <td><b>REG_NO</b></td>
                <td><b>Name</b></td>
              <?php
            
              for ($i=0;$i<count($date); $i++){
                $string = $date[$i];
                $timestamp = strtotime($string);
                $day= date("d", $timestamp);
echo '  <td><b>'.$date[$i].'</b></td><td>MSSG_Status</td>';

              }
              ?>
            </tr>
        </thead>
        <tbody>
        <?php
$sql = "select 
ca.studentname,
ca.rollno,
p.msg_status,
ca.class";

for($i=0; $i<count($date); $i++){
$sql.=",
max(case when ca.date = '".$date[$i]."' then coalesce(p.status, 'P') end) `".$date[$i]."`
";
}
$sql.="
from
(
select c.date, a.studentname, a.rollno, a.class
from calendar c
cross join tbl_admission a
) ca
left join tbl_absentees p
on ca.rollno = p.rollno
and ca.date = p.date  where p.Class=".$_GET['class_id']."
group by ca.studentname, ca.rollno, ca.class
order by ca.rollno;";
// echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
echo '<tr><td>'.$row['rollno'].'</td><td>'.$row['studentname'].'</td>';

for($i=0; $i<count($date); $i++){
  echo '<td>'.$row[$date[$i]].'</td><td>'.$row['msg_status'].'</td>';
  }

echo '</tr>';
}
} else {
  echo "0 results";
}
$conn->close();
?>
        </tbody>
    </table>
</body>
</html>
<?php

}


 ?> 