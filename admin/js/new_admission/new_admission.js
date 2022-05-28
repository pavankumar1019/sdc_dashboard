$(document).ready(function(e){
    $("#aadhar").keyup(function(){
       alert('asdsa') ;
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