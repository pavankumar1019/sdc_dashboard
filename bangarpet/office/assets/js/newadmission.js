
$(document).ready(function(){

    // count total admissions

    countdata();
setInterval(function(){ 
    countdata();
}, 1000);
function countdata()
{
$.ajax({
    url:"./php_operations/newadmissions.php",
    method:"POST",
    data:{type: "getcount"},
    success:function(data)
    {
      $('#getcountdata').html(data);
    }
  });
}


// load data
load_data(1);

    function load_data(page, query = '')
    {
      $.ajax({
        url:"./php_operations/newadmissions.php",
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



    //   edit
    $(document).on('click', '#edit', function(){
        var id = $(this).attr('data-id');
        var type = 'edit';
        $.ajax({
          url:"./php_operations/newadmissions.php",
          method:"POST",
          data:{id:id, type:type},
          dataType:"json",
          success:function(data)
          {
            $("#newadmissionmodal").modal('show');

            $('#type').val('update');
            $('#sats_no').val(data.sats_no);
            $('#student_no').val(data.student_no);
            $('#reg_no').val(data.reg_no);
            $('#name').val(data.name);
            $('#father_name').val(data.father_name);
            $('#mother_name').val(data.mother_name);
            $('#l1').val(data.l1);
            $('#l2').val(data.l2);
            $('#s1').val(data.s1);
            $('#s2').val(data.s2);
            $('#s3').val(data.s3);
            $('#s4').val(data.s4);
            $('#gt').val(data.gt);
            $('#year_of_passing').val(data.year_of_passing);
            $('#id').val(data.reg_no);

          }
        });
      });

});