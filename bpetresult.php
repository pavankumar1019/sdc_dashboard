<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDC-College Bangarpet</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="style.css">
    <style>
       table, th, td {
    border:2px solid black;
    border-style: double;
    background-color: white !important;
  }
    </style>
</head>
<body id="body">
  
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <h4 style="color:rgb(2, 42, 102);">Bangarpet</h4><br>
      <h4 style="color:red;">Ist PUC Commerce and Science Result Announced</h4>
      <img src="logo.jpg" width="10px" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <!-- onkeypress="return isNumber(event)" -->
    <form id="foo" method="post"> 
      <input type="text" id="login" class="fadeIn second" name="reg" placeholder="Register Number">
      <input type="submit" class="fadeIn fourth" value="Search">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">PK DEVELOPER</a>
    </div>

  </div>
</div>

<script>
  function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
$("#foo").submit(function(event) {
    var ajaxRequest;

    /* Stop form from submitting normally */
    event.preventDefault();
    var values = $(this).serialize();

$.ajax({
       url: "result.php",
       type: "post",
       data: values ,
       success: function (response) {
        $('#body').html(response);
          // You will get response from your PHP page (what you echo or print)
       },
       error: function(jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
         
       }
   });

})

</script>
</body>
</html>