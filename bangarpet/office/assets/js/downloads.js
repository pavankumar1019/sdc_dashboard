$(document).ready(function(){

    $('#btndownloadnewadmission').click(function(){
        $("#newadmissionmodal").modal('show');
        $('#markscardform').trigger("reset");
        $('#type').val('add');
      });


    //   form submit
    $('#newadmissionform').on('submit', function (e) {
        e.preventDefault();
  
        $.ajax({
          method:"POST",
          url: './php_operations/downloads.php',
          data: $('form').serialize(),
          success: function (result) {
            alert(result);
            load_data(1);
            $("#newadmissionmodal").modal('hide');
          }
        });
      });

});