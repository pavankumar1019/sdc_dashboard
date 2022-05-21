$(document).ready(function () {
  $(document).on('click', '#print', function(){ 

window.open("http://localhost/php/sdccollege/Modules/api/markscard/index.php?reg_no="+$(this).attr('data-id'), "PopupWindow", "width=1000,height=800,scrollbars=yes,resizable=no");

  })

  loadtable('');
    $('#inputsearch').keyup(function(){
      var search=$(this).val();
      if(search!=''){
        loadtable(search);
      }
      else{
        loadtable('');
      }
    });
 
    // print all

    $('#print_all').click(function(){
      // window.open('http://localhost/php/sdccollege/Modules/api/markscard/index.php?reg_no=');
    // window.location = 'http://localhost/php/sdccollege/Modules/api/markscard/index.php?reg_no=';
    window.open("http://localhost/php/sdccollege/Modules/api/markscard/index.php?reg_no=", "PopupWindow", "width=1000,height=800,scrollbars=yes,resizable=no");

    })
    // print function
  
    function loadtable(query){
     var fd = new FormData();
              importData(fd, query);
                function importData(form_data, query){
              form_data.append('type', 'loaddata');   
              form_data.append('query', query);   
              $.ajax({
                url:"./Modules/php_inc/upload_markscard.php", /*point to server-side PHP script */
                /* what to expect back from the PHP script, if anything*/
                  cache: false,
                  contentType: false,
                  processData: false,
                  data: form_data,                         
                  type: 'post',
                  success: function(dataReasult){
$('#data').html(dataReasult);
                  }
               });
    }
}
    $('#deploy').change(function(){
         var file_data = $(this).prop("files")[0];
          var fd = new FormData();
          fd.append('file', file_data); 
        importData(fd);
        })
      function importData(form_data){
        // console.log("ADDing.........");
        // var file_data = $(this).prop('files')[0];   
        // var form_data = new FormData();
        // form_data.append('file', file_data);   
        form_data.append('type', 'import_validate');   
        $.ajax({
          url:"./Modules/php_inc/upload_markscard.php", /*point to server-side PHP script */
       /* what to expect back from the PHP script, if anything*/
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,                         
            type: 'post',
            success: function(dataReasult){
           
           $('#mssg').html(dataReasult);
            }
         });
      }
      $('#truncate').click(function(){
        Swal.fire({
            title: 'Are you sure? want to delete all',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            if (result.isConfirmed) {
         
                var fd = new FormData();
              importData(fd);
                function importData(form_data){
              form_data.append('type', 'truncate');   
              $.ajax({
                url:"./Modules/php_inc/upload_markscard.php", /*point to server-side PHP script */
                /* what to expect back from the PHP script, if anything*/
                  cache: false,
                  contentType: false,
                  processData: false,
                  data: form_data,                         
                  type: 'post',
                  success: function(dataReasult){

                  }
               });
            }
              Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              )
            }
          })
      })
   
});