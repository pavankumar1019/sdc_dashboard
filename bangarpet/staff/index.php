<?php
//index.php
session_start();
if(isset($_SESSION["name_staff"]))
{
 header("location:dashboard.php?page=home");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SDC | Bangarpet Staff Login</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui"
    />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="description"
      content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs."
    />
    <meta
      name="keywords"
      content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"
    />
    <meta name="author" content="CodedThemes" />

    <!-- Favicon icon -->
    <link rel="icon" href="http://sdccollegebpet.in/SDC.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link
      rel="stylesheet"
      href="assets/fonts/fontawesome/css/fontawesome-all.min.css"
    />
    <!-- animation css -->
    <link
      rel="stylesheet"
      href="assets/plugins/animation/css/animate.min.css"
    />
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>

  <body>
    <div class="auth-wrapper">
      <div class="auth-content">
        <div class="auth-bg">
          <span class="r"></span>
          <span class="r s"></span>
          <span class="r s"></span>
          <span class="r"></span>
        </div>
        <div class="card">
          <div class="card-body text-center">
            <div class="mb-4">
              <i class="feather icon-unlock auth-icon"></i>
            </div>
            <h3 class="mb-4">Login</h3>
            <div class="input-group mb-3">
              <select  type=""
                class="form-control"
            
                id="branch">
                <option value="" selected>- Select Branch -</option>
         <option value="1">BANGARPET</option>
         <option value="2">KGF</option>
              </select>
               
       
            </div>
            <div class="input-group mb-3">
              <select  type=""
                class="form-control"
            
                id="role">
                <option value="" selected>- Select Role -</option>
         <option value="P">Principal</option>
         <option value="ct">Class Teacher</option>
              </select>
               
       
            </div>
            <div class="input-group mb-3">
              <input
                type="text"
                class="form-control"
                placeholder="User_ID"
                id="user_id"
              />
            </div>
            <div class="input-group mb-4">
              <input
                type="password"
                class="form-control"
                placeholder="Key"
                id="key"
              />
            </div>

            <button class="btn btn-primary shadow-2 mb-4" id="continue">
              Continue
            </button>
            <p class="mb-0 text-muted">Not enrolled? <a href="auth-signup.html">Click Here</a></p>
          </div>
        </div>
      </div>
    </div>

    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <script>
      $("#continue").click(function () {
    
          if( ($('#branch').val()!="")||($('#role').val()!="") ||($('#user_id').val()!="") ||($('#key').val()!="")){

          $("#verifyModal").modal("show");
          $.ajax({
            type: "POST",
            url: "./php_operations/staff.php",
            beforeSend: function(){
      $('#continue').html("connecting...");
      $('#continue').prop('disabled', true);
    },
    complete: function(){
      $('#continue').html("continue");
      $('#continue').prop('disabled', false);
    },
            data: {
              type: 4,
              user_id: $("#user_id").val(),
              key: $("#key").val(),
              role: $("#role").val(),
              branch: $("#branch").val(),
            },
            success: function (dataResult) {
              var dataResult = JSON.parse(dataResult);
              if (dataResult.statusCode == 200) {
                Swal.fire({
                  title:
                    '  <p class="mb-4"><b>OTP Sent to Your Registered Number</b> <br>xxxxxxx'+dataResult.phone+'</p>',
                  input: "text",
                  inputAttributes: {
                    autocapitalize: "off",
                  },
                  showCancelButton: true,
                  confirmButtonText: "Login",
                  showLoaderOnConfirm: true,
                  allowOutsideClick: () => !Swal.isLoading(),
                }).then((result) => {
                  if (result.isConfirmed) {
                    $.ajax({
                      type: "POST",
                      url: "./php_operations/staff.php",
                      data: {
                        type: 2,
                        otp: result.value,
                        name: dataResult.name,
                        branch: dataResult.branch,
                        role: dataResult.role,
                        img: dataResult.img,
                        class_id: dataResult.class_id,
                        id: dataResult.id,
                      },
                      success: function (dataResult) {
                        var dataResult = JSON.parse(dataResult);
                        if (dataResult.statusCode == 200) {
                          $('#continue').prop('disabled', 'disabled');
                          location.reload();
                        } else {
                          Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Invalid OTP!',
  footer: '<p>Enter Correct OTP</p>'
})
                        }
                      },
                    });
                  }
                });
                // CONFIM BUTTON CLOSE
              } else{
                alert("invalid User Credentials");
              }
              
            },
          });
        }
        else {
          alert("Fill all the fields!");
        }
      
      });

    

      // $("#otp_resend").click(function(){
      // 	$.ajax({
      // 				type: "POST",
      // 				url: "otp_process.php",
      // 				data:{
      // 					type: 3,
      // 					phone: $('#phone').val()
      // 				},
      // 				success: function(dataResult){
      // 					var dataResult = JSON.parse(dataResult);
      // 					if(dataResult.statusCode==200){
      // 						$("#resend_msg").html('OTP Resend Successfully !');
      // 					}
      // 				}
      // 	});
      // });
    </script>
  </body>
</html>
