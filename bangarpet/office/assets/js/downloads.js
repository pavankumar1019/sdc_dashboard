$(document).ready(function(){

    $('#btndownloadnewadmission').click(function(){
        $("#newadmissionmodal").modal('show');
        $('#markscardform').trigger("reset");
        $('#type').val('add');
      });


    //   form submit
    $('#newadmissionform').on('submit', function (e) {
        e.preventDefault();
  alert('asdas');
      });

});