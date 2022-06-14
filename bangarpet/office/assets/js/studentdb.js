
$(document).ready(function(){
    $('#btnAdmissionModal').click(function(){
      $("#newadmissionmodal").modal('show');
      $('#newadmissionform').trigger("reset");
      $('#type').val('add');
    });
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
              $("#newadmissionmodal").modal('show');
  
              $('#type').val('update');
              $('#id').val(data.id);
              $('#student_name').val(data.student_name);
              $('#student_aadhar').val(data.student_aadhar);
              $('#father_name').val(data.father_name);
              $('#mother_name').val(data.mother_name);
              $('#caste').val(data.caste);
              let text = data.dob;
              const myArray = text.split("-");
            $('#dd').val(myArray[0]);
              $('#mm').val(myArray[1]);
              $('#yy').val(myArray[2]);
  
  
              $('#religion').append(`<option value="${data.religion}" selected> ${data.religion} </option>`);
  
              $("[name=customRadio]").val([data.gender]);
           
                // ('#customRadio2').prop('checked', true);
           
  
              $('#subcaste').val(data.subcaste);
              $('#address').val(data.address);
              $('#mobile_no').val(data.mobile_no);
              $('#email_id').val(data.email_id);
              $('#reg_no_sslc').val(data.reg_no_sslc);
              $('#year_of_passing').val(data.year_of_passing);
              $('#total').val(data.total);
              $('#combination_opted').val(data.combination_opted);
              $('#lang_opted').val(data.lang_opted);
  
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
  
      }
    });
  
  });
  
  });