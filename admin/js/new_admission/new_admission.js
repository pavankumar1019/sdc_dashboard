$(document).ready(function(e){
    // Submit form data via Ajax
    $("#fupForm").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: './Modules/php_inc/newadmission.php',
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
            success: function(dataResult){ //console.log(response);
                var dataResult = JSON.parse(JSON.stringify(dataResult));
			if(dataResult.statusCode==200){
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Your work has been saved',
                    showConfirmButton: false,
                    timer: 1500
                  })					
			}
			else if(dataResult.statusCode==201){
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Failed to Add',
                    footer: '<a href="#">Why do I have this issue?</a>'
                  })
			}
			else if(dataResult.statusCode==202){
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Failed to Add',
                    footer: '<a href="#">Why do I have this issue?</a>'
                  })
			}
            }
        });
    });
});