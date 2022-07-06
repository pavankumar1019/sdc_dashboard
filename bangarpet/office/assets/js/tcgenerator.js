

//   document.onkeyup = function(e) {
//     if(e.ctrlKey && e.which == 66) {
//         document.getElementById("tcform").submit();
//       }
//   };



$('#viewdata').on('click',  function(e){
    e.preventDefault();
    $('#exampleModalCenter').modal('show');
    $('#vadmission').html($('#t1').val());
})
