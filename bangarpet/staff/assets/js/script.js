$(document).ready(function(){

$('#consolidate').click(function(){
    var page = "./export/export.php?data=consolidate_pdf";  
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

});