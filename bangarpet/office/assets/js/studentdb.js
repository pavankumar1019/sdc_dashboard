
$(document).ready(function(){
  
      // count total admissions
  
      countdata();
  setInterval(function(){ 
      countdata();
  }, 1000);
  function countdata()
  {
  $.ajax({
      url:"./php_operations/student.php",
      method:"POST",
      data:{type: "getcount"},
      success:function(data)
      {
        $('#getcountdata').html(data);
      }
    });
  }
  
  
  // load data
  load_data(1);
  
      function load_data(page, query = '')
      {
        $.ajax({
          url:"./php_operations/student.php",
          method:"POST",
          data:{page:page, query:query, type: "loaddata"},
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
    
        $('#search_box').keyup(function(){
          var query = $('#search_box').val();
          load_data(1, query);
        });
  
  
  
      //   edit
      $(document).on('click', '#edit', function(){
          var id = $(this).attr('data-id');
          var type = 'edit';
          $.ajax({
            url:"./php_operations/student.php",
            method:"POST",
            data:{id:id, type:type},
            dataType:"json",
            success:function(data)
            {
              $('#id').val(data.id);
              $('#class').append(`<option value="${data.class}" selected> ${data.class} </option>`);
  
              $("#newadmissionmodal").modal('show');
  
              $('#type').val('update');
           
                // ('#customRadio2').prop('checked', true);
           
  
     
            }
          });
        });
  // insert form
  $('#newadmissionform').on('submit', function (e) {
  
    e.preventDefault();
  
    $.ajax({
      method:"POST",
      url: './php_operations/student.php',
      data: $('form').serialize(),
      beforeSend: function(){
        $('#submit').val("connecting...");
      },
      complete: function(){
        $('#submit').val("Submit");
      },
      success: function (result) {
        load_data(1);
        $('#newadmissionform').trigger("reset");
    
        $("#newadmissionmodal").modal('hide');
      }
    });
  
  });
  
  });