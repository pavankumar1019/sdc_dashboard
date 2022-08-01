
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
  $("#v_dob").html('DOB : '+$(this).val());
 });
 $("#phone").change(function(){
  $("#v_phone").html($(this).val());
 });
 $("#address").change(function(){
  $("#v_address").html($(this).val());
 });
 $("#class").change(function(){
  $("#v_class").html($(this).val());
 });
 $("#comb").change(function(){
  $("#v_comb").html(" "+$(this).val());
 });
 $(".fixation").change(function(){
  $("#v_fixation").html("<b>+Fee Fixation</b> <br>"+$(this).val());
 });
 $(".paid").keypress(function(){
  var val1 = (isNaN(parseInt($('.fixation').val()))) ? 0 : parseInt($('.fixation').val());
  var val2 = (isNaN(parseInt($(this).val()))) ? 0 : parseInt($(this).val());
  $("#v_paid").html("<b>+Paying fee</b> <br>"+$(this).val());
$('#balance').html("<b>Balance</b> <br>"+(val1 - val2));
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