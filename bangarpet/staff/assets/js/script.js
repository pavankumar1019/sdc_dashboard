$(document).ready(function(){

$('#consolidate').click(function(){
    var page = "./export/export.php?data=consolidate_pdf&testid="+$('#testname_p').val();  
    window.location = page;
   });
$('#consolidatep').click(function(){
if(!$('#class_names').val()=="" && !$('#testname_p').val()==""){
  var value= $('#class_names').val();
  var page = "./export/pexport.php?data=consolidate_pdf&class_id="+value+"&test_id="+$('#testname_p').val();  
  window.location = page;
}else{
  alert("Please Select Options");
}  
   });
$('#sendsms').click(function(){
  if(!$('#class_names').val()=="" && !$('#testname_p').val()==""){
    var value= $('#class_names').val();
    var page = "./export/sendsms.php?data=consolidate_pdf&class_id="+value+"&test_id="+$('#testname_p').val();  
    window.location = page; 
  }else{
    alert("Please Select Options");
  }
 
   });
   gettest($("#class_name").val());
   function gettest(valueclass){
     $.ajax({
       url:"./php_operations/markscard.php",
       method:"POST",
       data:{type: "gettest", value: valueclass},
       success:function(data)
       {
 $('#testname_p').html(data);
       }
     });
   }

   $('#class_names').on('change', function() {
   
    $.ajax({
      url:"./php_operations/markscard.php",
      method:"POST",
      data:{type: "gettest_p", value: $(this).find(':selected').data('id')},
      success:function(data)
      {
$('#testname_p').html(data);
      }
    });
  });



});