$(document).ready(function(){

$('#consolidate').click(function(){
    var page = "./export/export.php?data=consolidate_pdf&testid="+$('#testname_p').val();  
    window.location = page;
   });
$('#consolidatep').click(function(){
    var value=$('#consolidateclass').val();
    var page = "./export/pexport.php?data=consolidate_pdf&class_id="+value;  
    window.location = page;  
   });
$('#sendsms').click(function(){
    var value=$('#consolidateclass').val();
    var page = "./export/sendsms.php?data=consolidate_pdf&class_id="+value;  
    window.location = page;  
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

});