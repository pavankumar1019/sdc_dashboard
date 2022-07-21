<?php
include('../db_bpet_sdc/db.php');
// echo $_GET['class_id']
$query = "SELECT ".$tbl_admission.".StudentName,  ".$tbl_admission.".father_name, ".$tbl_admission.".combination, ".$tbl_admission.".lang_code, ".$tbl_admission.".mobile_no, ".$tbl_admission.".RollNo, ".$class_test_marks.".l1, ".$class_test_marks.".l2,  ".$class_test_marks.".s1, ".$class_test_marks.".s2,  ".$class_test_marks.".s3,  ".$class_test_marks.".s4,  ".$class_test_marks.".total
FROM ".$tbl_admission."
LEFT JOIN ".$class_test_marks." ON ".$tbl_admission.".RollNo = ".$class_test_marks.".roll AND ".$class_test_marks.".test_id=". $_SESSION['test_name']."    WHERE ".$tbl_admission.".Class=".$_GET['class_id']."  
";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
<head>
  
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>
<body>
<section><div class="container">
<div style="overflow-x:auto;">
  <table>
  <tr>
      <th>Name</th>
      <th>Phone Number</th>
      <th>L1</th>
      <th>L2</th>
      <th>S1</th>
      <th>S2</th>
      <th>S3</th>
      <th>S4</th>
      <th>Total</th>
    </tr>
    <?php
    foreach($result as $row){
      echo '
      <tr>
      <td>'.$row['StudentName'].'</td>
      <td>'.$row['mobile_no'].'</td>
      <td>'.$row['l1'].'</td>
      <td>'.$row['l2'].'</td>
      <td>'.$row['s1'].'</td>
      <td>'.$row['s2'].'</td>
      <td>'.$row['s3'].'</td>
      <td>'.$row['s4'].'</td>
      <td>'.$row['total'].'</td>
    
    </tr>
      ';
    }    ?>
    
   
  </table>
</div>
</div>
<br>
<div class="container">
  <div class="row">
    <div class="col text-center">
      <button class="btn btn-default bg-warning" id="butsave">Run SMS Server</button>
    </div>
  </div>
</div>
<br>
<div class="container">
<table>
    <tr>
      <th>Name</th>
      <th>Phone Number</th>
      <th>L1</th>
      <th>L2</th>
      <th>S1</th>
      <th>S2</th>
      <th>S3</th>
      <th>S4</th>
      <th>Total</th>
    </tr>
<tbody id="data">

</tbody>
 
  </table>
</div>
</section>






<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
$(document).ready(function() {
$('#butsave').on('click', function() {
$("#butsave").attr("disabled", "disabled");
var class_id = <?php echo $_GET['class_id']; ?>;

if(class_id!=""){
	$.ajax({
		url: "./scriptsendsms.php",
		type: "POST",
		data: {
			class_id: class_id
					
		},
		cache: false,
		success: function(dataResult){
			var dataResult = JSON.parse(dataResult);
			if(dataResult.statusCode==200){
        $("#data").html(dataResult.data);
			}
			else if(dataResult.statusCode==201){
				alert("Error occured !");
			}
			
		}
	});
	}
	else{
		alert('Class ID is empty  !');
	}
});
});
</script>


</body>
</html>
