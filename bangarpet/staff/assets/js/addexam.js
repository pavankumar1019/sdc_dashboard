$(document).ready(function(){
    $('#exam').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
          method:"POST",
          url: './php_operations/addexam.php',
          beforeSend: function(){
            $('#continue').html("connecting...");
            $('#continue').prop('disabled', true);
          },
          complete: function(){
            $('#continue').html("ADD");
            $('#continue').prop('disabled', false);
          },
          data: $('form').serialize(),
          success: function (result) {
          
            Swal.fire({
              position: 'center',
              icon: 'success',
              title: 'Your work has been saved',
              showConfirmButton: false,
              timer: 2000
            })
       console.log(result);
       load();
          }
        });

      });

      function load(){
        $.ajax({
            url:"./php_operations/approvestaff.php",
            method:"POST",
            beforeSend: function(){
              $('#loadmessage').html("Loading...");
            
            },
            complete: function(){
              $('#loadmessage').hide();
              },
            data:{page:page, query:query, type: "loaddata"},
            success:function(data)
            {
              $('#dynamic_content').html(data);
            }
          });
      }




})