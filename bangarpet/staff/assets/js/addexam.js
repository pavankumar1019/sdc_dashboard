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
       load_data(1);
          }
        });

      });
      load_data(1);

      function load_data(page, query = ''){
        $.ajax({
            url:"./php_operations/addexam.php",
            method:"POST",
            data:{page:page, query:query, type: "getdata"},
            success:function(data)
            {
              $('#dynamic_content').html(data);
            }
          });
      }

    $(document).on('click', '.page-link', function(){
      var page = $(this).data('page_number');
      var query = $('#search_box').val();
      load_data(page, query);
    });

    // $('#search_box').keyup(function(){
    //   var query = $('#search_box').val();
    //   load_data(1, query);
    // });

})