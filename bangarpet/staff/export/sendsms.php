<?php


include('../db_bpet_sdc/db.php');
// echo $_GET['class_id']
$query = "SELECT ".$tbl_admission.".StudentName,  ".$tbl_admission.".father_name, ".$tbl_admission.".combination, ".$tbl_admission.".lang_code, ".$tbl_admission.".mobile_no, ".$tbl_admission.".RollNo, ".$class_test_marks.".l1, ".$class_test_marks.".l2,  ".$class_test_marks.".s1, ".$class_test_marks.".s2,  ".$class_test_marks.".s3,  ".$class_test_marks.".s4,  ".$class_test_marks.".total
FROM ".$tbl_admission."
LEFT JOIN ".$class_test_marks." ON ".$tbl_admission.".RollNo = ".$class_test_marks.".roll AND ".$class_test_marks.".test_id=".$_GET['test_id']."    WHERE ".$tbl_admission.".Class=".$_GET['class_id']."  
";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
<head>
  
<meta name="viewport" content="width=device-width, initial-scale=1">


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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
      <input type="hidden" id="class_id" value="<?php echo $_GET['class_id']; ?>">
      <input type="hidden" id="test_id" value="<?php echo $_GET['test_id']; ?>">
      <button class="btn btn-default bg-warning" id="butsave">Run SMS Server</button>
    </div>
  </div>
</div>
<br>
<div class="container">
<table>
  
<tbody id="data">

</tbody>
 
  </table>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Please Wait... ! Dont close</h5>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
            </div>
            <div class="modal-body">
                <h6 class="text-center  m-b-10"><span class="text-muted m-r-5" id="progress"></span></h6>
                <div class="progress">
                    <div class="progress-bar progress-c-theme2" id="loading" role="progressbar" style="height:6px;"
                        aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
           </div>
            <div class="modal-footer">
                <button type="button" id="closemodal" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
</section>







<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
$(document).ready(function() {
$('#butsave').on('click', function() {
$("#butsave").attr("disabled", "disabled");
var class_id = $('#class_id').val();
var test_id=$('#test_id').val();
if(class_id!=""){
	$.ajax({
		url: "./scriptsendsms.php",
		type: "POST",
		data: {
			class_id: class_id,
      test_id: test_id		
		},
    beforeSend: function(){
          $("#closemodal").attr("disabled", true);
          $('#exampleModalCenter').modal('show');
            $('#progress').html('Proccesing');
          $("#loading").animate({
            width: "50%"
        }, 9000 );
        },
     
		cache: false,
		success: function(dataResult){
      $("#data").html(dataResult);
      $('#progress').html('Done');
            $("#closemodal").removeAttr("disabled");
          $("#loading").animate({
            width: "100%"
        }, 10);
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
