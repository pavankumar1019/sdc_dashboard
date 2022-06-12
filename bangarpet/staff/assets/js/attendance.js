function markabsent(id){
    $('#'+id+'').html('<i class="fas fa-circle text-c-red f-20 m-r-15"> &nbsp;A</i>');
    $('.'+id+'').val('A');
  }
  function markpresent(id){
    $('#'+id+'').html('<i class="fas fa-circle text-c-green f-20 m-r-15"> &nbsp;P</i>');
    $('.'+id+'').val('P');
  }
  // add to attendance
  $(document).ready(function(){
// function call
getstudentlist($('#class_select').val());

   
  $('#class_select').on('change', function (e) {
      var class_id = this.value;
      loadtotalStudents();

      getstudentlist(class_id);
      loadtotalAbsentiesStudents();
  
  });
//   get function list
function getstudentlist(class_id){
    $.ajax({
        url:'./php_operations/attendance.php',
        method:'POST',
        data:{class_id:class_id, type:"getlist"},
        success:function(result)
        {
    $('#student_list').html(result);
        }
        
       });
}


//   load total students
  loadtotalStudents();
   function loadtotalStudents(){
    var class_code = $('#class_select').val();
    $.ajax({
        url:'./php_operations/attendance.php',
        method:'POST',
        data:{type:"loadtotal", class_code:class_code},
        success:function(result)
        {
    $('#total_student').html(result);
        }
        
       });
   }
  loadtotalAbsentiesStudents();
   function loadtotalAbsentiesStudents(){
    var class_code = $('#class_select').val();
    $.ajax({
        url:'./php_operations/attendance.php',
        method:'POST',
        data:{type:"loadabsenties", class_code:class_code},
        success:function(result)
        {
    $('#total_student_absenties').html(result);
        }
        
       });
   }



    $('#btn_submit').click(function(){
  
  if(!$("input[name='status[]']")
  .map(function(){return $(this).val();})){
    var reg_no = $("input[name='reg_no[]']")
    .map(function(){return $(this).val();}).get();

    var status = $("input[name='status[]']")
    .map(function(){return $(this).val();}).get();
    $.ajax({
        url:'./php_operations/attendance.php',
        method:'POST',
        data:{status:status, reg_no:reg_no, type:"add_atten"},
        beforeSend: function(){
            $('#progress').html('Proccesing');
          $("#loading").animate({
            width: "50%"
        }, 300 );
        },
        complete: function(){
            $('#progress').html('Done');

          $("#loading").animate({
            width: "100%"
        }, 300 );
      
        },
        success:function(result)
        {
    $('#result').html(result);
    getstudentlist($('#class_select').val());
        }
        
       });
  } else{
    alert('Please mark all students ! :)');
  }
    });

    // download
    $("#downloadexcelreport").click(function (event) {
        window.location = './php_operations/download.php?type=downloadreport&class_id='+$('#class_select').val();
        event.preventDefault();
      });
    
   });