
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
 $(".paid").change(function(){
  var val1 = $(".fixation").val().replace(',', '');
  var val2 = $(".paid").val().replace(',', '');
  var total = val1-val2;
  $("#v_paid").html("<b>+Paying fee</b> <br>"+$(this).val());
$('#balance').html("<b>Balance</b> <br>"+total);
 });
 
// radio check
$('input[type=radio][name=m_pay]').change(function() {
  if (this.value == 'cash') {
     $('#payment_modal').modal('show');
     $('#mode').html(this.value)
     $("input#txt").hide();
  }
  else if (this.value == 'phonephe') {
    $('#payment_modal').modal('show');
  }
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