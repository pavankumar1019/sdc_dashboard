<?php
//index.php
session_start();
if(isset($_SESSION["user_id"]))
{
 header("location:dashboard.php?page=home");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SDC Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="./dist/css/adminx.css" media="screen" />
  </head>
  <body>
    <div class="adminx-container d-flex justify-content-center align-items-center">
      <div class="page-login">
        <div class="text-center">
          <a class="navbar-brand mb-4 h1" href="login.html">
            <img src="./demo/img/logo.png" style="width: 9.875rem;height: 10.875rem" width="250px" class="navbar-brand-image d-inline-block align-top mr-2" alt="">
  <h1>   SDC-COLLEGE</h1>
          </a>
        </div>

        <div class="card mb-0">
       
          <div class="card-body">
          
              <div class="form-group">
                <label for="userId" class="form-label">User ID</label>
                <input type="text" class="form-control" id="userId"  placeholder="User_ID">
              </div>
              <div class="form-group">
                <label for="key" class="form-label">Key</label>
                <input type="password" class="form-control" id="key" placeholder="Password">
              </div>
         
              <button  class="btn btn-sm btn-block btn-primary" id="continue"> Continue</button>
          
          </div>
          <div class="card-footer text-center">
            <a href="http://sdccollegebpet.in/"><small>SDC Portal</small></a>
          </div>
          <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter"  data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Enter Your OTP</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body">
        <p>OTP Sent to XXXXX<span id="mobile_last_digit"></span></p>
        <div class="alert alert-primary" id="otp_resent" role="alert" style="display: none;">
        OTP Resent
        </div>
    <input type="text" style="text-align: center;" class="form-control" name=""  onkeypress='validate(event)' id="otp">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="resendotp" >Resend OTP</button>
        <button type="button" id="login" class="btn btn-primary">Login</button>
      </div>
    </div>
  </div>
</div>
        </div>
      </div>
    </div>

    <!-- If you prefer jQuery these are the required scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="./dist/js/vendor.js"></script>
    <script src="./dist/js/adminx.js"></script>

    <!-- If you prefer vanilla JS these are the only required scripts -->
    <!-- script src="./dist/js/vendor.js"></script>
    <script src="./dist/js/adminx.vanilla.js"></script-->
      <script>
   function validate(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
        $(document).on('click','#continue',function(e) {
            var userId = $('#userId').val();
            var key = $('#key').val();
            $.ajax({
                 data: {
                  type: 2,
                  userId: userId,
                  key: key
                        
                },
                 type: "POST",
                 url: "./login_ajax.php",
                success: function(dataResult){
                  var dataResult = JSON.parse(dataResult);
                  if(dataResult.statusCode==200){
                    $('#mobile_last_digit').html(dataResult.phone);
                 $('#exampleModalCenter').modal('show');
                  }
                  else{
                      alert(dataResult);
                  }
                 
                }
          });
          
        });
        $(document).on('click','#resendotp',function(e) {
            var otp = $('#otp').val();
            $.ajax({
                data:   {
                      type: 4,
                      otp: otp
                            
                    },
                type: "post",
                url : "login_ajax.php",
                success: function(dataResult){
                  var dataResult = JSON.parse(dataResult);
                  if(dataResult.statusCode==200){
                 $('#otp_resent').show();
                 $('#resendotp').attr('disabled', true);
                  }
                  else{
                      
                  }
                  
                }
          });
          
        });
        $(document).on('click','#login',function(e) {
            var otps = $('#otp').val();
            var userId = $('#userId').val();
            var key = $('#key').val();
            $.ajax({
                data:   {
                      type: 3,
                      otp: otps,
                      userId: userId,
                      key: key
                            
                    },
                type: "post",
                url : "login_ajax.php",
                success: function(dataResult){
                  var dataResult = JSON.parse(dataResult);
                  if(dataResult.statusCode==200){
                    location.reload();
                  }
                  else{
                  
                    $('#otp_resent').toggleClass("alert-danger");
                      $('#otp_resent').html('Invalid OTP !');
                  }
                  
                }
          });
          
        });
        </script>
  </body>
</html>