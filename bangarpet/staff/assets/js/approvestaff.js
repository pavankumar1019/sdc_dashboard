$(document).ready(function(){



    countdata();
    setInterval(function(){ 
        countdata();
    }, 1000);
function countdata()
{
    $.ajax({
        url:"./php_operations/approvestaff.php",
        method:"POST",
        data:{type: "getcount"},
        success:function(data)
        {
          $('#getcountdata').html(data);
          $('#getcountdata2').html(data);
        }
      });
}


    load_data(1);

    function load_data(page, query = '')
    {
      $.ajax({
        url:"./php_operations/approvestaff.php",
        method:"POST",
        data:{page:page, query:query, type: "loaddata"},
        success:function(data)
        {
          $('#dynamic_content').html(data);
        }
      });
    }

    $(document).on('click', '.page-link', function(){
      var page = $(this).data('page_number');
      var query = $('#search_box').val();
      load_data(page, query);
    });

    $('#search_box').keyup(function(){
      var query = $('#search_box').val();
      load_data(1, query);
    });


    // print idividual marks card
    // $(document).on('click', '#print', function(){ 

    //     window.open("http://sdccollegebpet.in/bangarpet/office/model/templates/markscard/index.php?reg_no="+$(this).attr('data-id'), "PopupWindow", "width=1000,height=800,scrollbars=yes,resizable=no");
        
    //       })




        //   add marks card custom
        $('#enroll').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
              method:"POST",
              url: './php_operations/approvestaff.php',
              beforeSend: function(){
                $('#continue').html("connecting...");
                $('#continue').prop('disabled', true);
              },
              complete: function(){
                $('#continue').html("Accept");
                $('#continue').prop('disabled', false);
              },
              data: $('form').serialize(),
              success: function (result) {
              
                Swal.fire({
                  position: 'center',
                  icon: 'success',
                  title: 'Your work has been saved',
                  showConfirmButton: false,
                  timer: 2000
                })
                load_data(1);
                $("#exampleModalCenter").modal('hide');
              }
            });
  
          });



          // add marks card
          $(document).on('click', '#accpet', function(){
               $("#exampleModalCenter").modal('show');
               var id = $(this).attr('data-id');
                $('#id').val(id);
                $('#type').val('accept');
                      })

                      
          $(document).on('click', '#reject', function(){
            var id = $(this).attr('data-id');
            var type= "reject";  
            if (confirm("Are you Sure ?!")) {
              $.ajax({
             
                url: './php_operations/approvestaff.php',
                method:"POST",
                data:{id:id, type:type},
                dataType:"json",
                success: function (result) {
                  load_data(1);
                }
              });
            } else {
             
            }



       




           
                      })
          // edit marks card
        
    
  });

