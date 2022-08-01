
$(document).ready(function(){
    $('#enterammount').simpleMoneyFormat();
    $('#enterammount1').simpleMoneyFormat();

// fee auto view panel 
$("#name").change(function(){
 $("#v_name").html($(this).val());
});
$("#fathername").change(function(){
  $("#v_fathername").html($(this).val());
 });
 $("#dob").change(function(){
  $("#v_dob").html($(this).val());
 });
 $("#phone").change(function(){
  $("#v_phone").html($(this).val());
 });


  });
  
  function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}