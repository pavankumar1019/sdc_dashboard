<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8" />
  <title>SDC</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
<section class="m-5">
    <h2>ರಾಷ್ಟ್ರದೇವೋಭವ</h2>
<form id="form-search">
  <div class="form-group">
    <label for="exampleFormControlInput1">Name of the Participant <span style="color:red;"><b>*</b></span></label>
    <input type="text" class="form-control" name="name_std" id="exampleFormControlInput1" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Name of the Parent  <span style="color:red;"><b>*</b></span></label>
    <input type="text" class="form-control" name="parent" id="exampleFormControlInput1" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Date of Birth  <span style="color:red;"><b>*</b></span></label>
    <input type="date" class="form-control" name="dob" id="exampleFormControlInput1" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Residential Address  <span style="color:red;"><b>*</b></span></label>
    <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3" required></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Class  <span style="color:red;"><b>*</b></span></label>
    <select class="form-control" name="class" id="exampleFormControlSelect1" required>
      <option>1st PUC Commerce</option>
      <option>1st PUC Science</option>
      <option>2nd  PUC Commerce</option>
      <option>2nd PUC Science</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">SDC Branch  <span style="color:red;"><b>*</b></span></label>
    <select class="form-control" name="branch" id="exampleFormControlSelect1" required>
      <option>Kolar</option>
      <option>Mulbagal</option>
      <option>Bangarpet</option>
      <option>KGF</option>
      <option>Srinivasapura</option>

    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Contact No.  <span style="color:red;"><b>*</b></span></label>
    <input type="number" class="form-control" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;" name="contact" id="exampleFormControlInput1" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email</label>
    <input type="email" class="form-control" name="email" id="exampleFormControlInput1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Events  <span style="color:red;"><b>*</b></span></label>
    <select class="form-control" name="event" id="exampleFormControlSelect1">
      <option>Quiz</option>
      <option>Debit</option>
      <option>Painting</option>
      <option>Essay Writting</option>
      <option>Patriotic Song</option>

    </select>
  </div>
  <div class="form-group">
 <input type="submit" id="save" class="btn btn-info" name="save" value="Register" >
  </div>
</form>


</section>



<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
$('#form-search').on('submit', function (e) {

e.preventDefault();
    var data = $("#form-search").serialize();
    $.ajax({
         data: data,
         type: "post",
         url: "save.php",
         success: function(data){
              alert(data);
         }
	});
});
</script>

</body>
</html>
  