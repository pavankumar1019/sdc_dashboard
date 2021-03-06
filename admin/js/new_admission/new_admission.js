$(document).ready(function(e){
    $("#aadhar").keyup(function(){
        $.ajax({
            type: "POST",
            data: {
                aadhar: $(this).val(),
            },
            url: "./Modules/php_inc/checkdata.php",
            success: function(data)
            {
                if(data === 'USER_AVAILABLE')
                {
                   $('#checkdata').html('Data already Present');
                }
                else
                {
                    $('#checkdata').html('');
                }
            }
        })  
      });
    $("#aadhar").keydown(function(){
        $.ajax({
            type: "POST",
            data: {
                aadhar: $(this).val(),
            },
            url: "./Modules/php_inc/checkdata.php",
            success: function(data)
            {
                if(data === 'USER_AVAILABLE')
                {
                   $('#checkdata').html('Data already Present');
                }
                else
                {
                    $('#checkdata').html('');
                }
            }
        })  
      });
    // Submit form data via Ajax
    $("#fupForm").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: './Modules/php_inc/newadmission.php',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(response){ 
                console.log(response);
                $('#message').html(response);
                if(response=="done"){
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Your work has been saved',
                        showConfirmButton: false,
                        timer: 1500
                      })
                      $("#fupForm").trigger("reset");
                      $('#checkdata').html('');
                }else{
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong! Failed',
                        footer: '<a href="">Why do I have this issue?</a>'
                      })
                }
              
            }
        });
    });
});