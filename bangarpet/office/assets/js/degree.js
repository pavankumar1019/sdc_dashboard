$(document).ready(function() {
  $(document).on('click','tr', function()
{
  
      var inp = $(this).find('.check');
      var tr = $(this).closest('tr');
      inp.prop('checked', !inp.is(':checked'))
  
      tr.toggleClass('isChecked', inp.is(':checked'));
    });
  
    // do nothing when clicking on checkbox, but bubble up to tr
    $(document).on('click','.check', function(e)
    {
      e.preventDefault();
    })

    loadtotalStudents();
    function loadtotalStudents(){
     $.ajax({
         url:'./php_operations/degree.php',
         method:'POST',
         data:{type:"loadtotal"},
         success:function(result)
         {
     $('#total_student').html(result);
         }
         
        });
    }



// send sms 

 
$('#btn_delete').click(function(){
  
  if(confirm("Are you sure you want to SMS this?"))
  {
   var id = [];
   
   $(':checkbox:checked').each(function(i){
    id[i] = $(this).val();
   });
   
 
    $.ajax({
     url:'./php_operations/degree.php',
     method:'POST',
     data:{id:id, type:"sendsms"},
     success:function()
     {
      for(var i=0; i<id.length; i++)
      {
       $('tr#'+id[i]+'').css('background-color', '#ccc');
       $('tr#'+id[i]+'').fadeOut('slow');
       $('#total_student').html('<b>Attendance Submitted</b>');
      }
     }
     
    });
   
   
  }
  else
  {
   return false;
  }
 });
 




  })