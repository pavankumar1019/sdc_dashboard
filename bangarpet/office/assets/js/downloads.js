$(document).ready(function(){

    $('#btndownloadnewadmission').click(function(){
        $("#newadmissionmodal").modal('show');
        $('#markscardform').trigger("reset");
        $('#type').val('add');
      });


    //   form submit
    $('#markscardform').on('submit', function (e) {
        // e.preventDefault();
        // $.ajax({
        //   method:"POST",
        //   url: './php_operations/markscard.php',
        //   data: $('form').serialize(),
        //   success: function (result) {
        //     alert(result);
        //   }
        // });
alert('')
      });

});