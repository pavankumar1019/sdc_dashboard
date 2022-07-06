

//   document.onkeyup = function(e) {
//     if(e.ctrlKey && e.which == 66) {
//         document.getElementById("tcform").submit();
//       }
//   };

$( "#exampleModalCenter" ).on('show.bs.modal', function() {
  $('#v_admission').html($('#t1').val());
});