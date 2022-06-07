$(document).ready(function(){
    countdata();
    setInterval(function(){ 
        countdata();
    }, 1000);
function countdata()
{
    $.ajax({
        url:"./php_operations/markscard.php",
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
        url:"./php_operations/markscard.php",
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
    $(document).on('click', '#print', function(){ 

        window.open("http://sdccollegebpet.in/bangarpet/office/model/templates/markscard/index.php?reg_no="+$(this).attr('data-id'), "PopupWindow", "width=1000,height=800,scrollbars=yes,resizable=no");
        
          })



  });