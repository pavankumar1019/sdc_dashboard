

//   document.onkeyup = function(e) {
//     if(e.ctrlKey && e.which == 66) {
//         document.getElementById("tcform").submit();
//       }
//   };



$('#viewdata').on('click',  function(e){
    e.preventDefault();
    $('#exampleModalCenter').modal('show');
    $('#vadmission').html($('#t1').val());
    $('#vt10').html($('#t10').val());
    $('#vt2').html($('#t2').val());
    $('#vt4').html($('#t4').val());
    $('#vt20').html($('#t20').val());
    $('#vt5').html($('#t5').val());
    $('#vt6').html($('#t6').val());
    $('#vt7').html($('#t7').val());
    $('#vt8').html($('#t8').val());
    $('#vt9').html($('#t9').val());
    $('#vt11').html($('#t11').val());
    $('#vt12').html($('#t12').val());
    $('#vt13').html($('#t13').val());
    if($('#t14').val()==1){
var comb="PCMB"
    }
    if($('#t14').val()==2){
var comb="PCMCS"
    }
    if($('#t14').val()==3){
var comb="EBACS"
    }
    if($('#t14').val()==7){
var comb="EBAS"
    }
    if($('#t14').val()==8){
var comb="ABMS"
    }
    $('#vt14').html(comb);
    $('#vt15').html($('#t15').val());
    $('#vt16').html($('#t16').val());
    $('#vt17').html($('#t17').val());
    $('#vt18').html($('#t18').val());
    $('#vt19').html($('#t19').val());
})
