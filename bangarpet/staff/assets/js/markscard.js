$(document).ready(function(){
    $('#btnmarkscard').click(function(){
        $("#newadmissionmodal").modal('show');
        $('#markscardform').trigger("reset");
        $('#type').val('add');
      });


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




        //   add marks card custom
        $('#markscardform').on('submit', function (e) {

            e.preventDefault();
  
            $.ajax({
              method:"POST",
              url: './php_operations/markscard.php',
              data: $('form').serialize(),
              success: function (result) {
                alert(result);
                load_data(1);
                $("#newadmissionmodal").modal('hide');
              }
            });
  
          });



          // add marks card
          $(document).on('click', '#add', function(){
            var id = $(this).attr('data-id');
            var type = 'edit';
            $.ajax({
              url:"./php_operations/markscard.php",
              method:"POST",
              data:{id:id, type:type},
              dataType:"json",
              success:function(data)
              {
                $("#newadmissionmodal").modal('show');

                $('#type').val('add');
    
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
      
          })
          // edit marks card
          $(document).on('click', '#edit', function(){
            var id = $(this).attr('data-id');
            var type = 'edit';
            $.ajax({
              url:"./php_operations/markscard.php",
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

                // class option logic
                if(data.combination_opted=5){
                  optionText="PCMB";
                }
                if(data.combination_opted=4){
                  optionText="PCMCS";
                }
                if(data.combination_opted=3){
                  optionText="EBAS";
                }
                if(data.combination_opted=2){
                  optionText="EBACS";
                }
                if(data.combination_opted=1){
                  optionText="BASM";
                }
                $('#combination_opted').append(`<option value="${data.combination_opted}" selected> ${optionText} </option>`);
                
        // language function
        if(data.lang1=1){
          optionlangText="KANNADA";
        }
        if(data.lang1=3){
          optionlangText="HINDI";
        }
        if(data.lang1=8){
          optionlangText="URDU";
        }
        if(data.lang1=9){
          optionlangText="SANSKRIT";
        }
        $('#lang1').append(`<option value="${data.lang1}" selected> ${optionlangText} </option>`);
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

  function sumauto() {
    var total=$('#l1').val()+$('#l2').val()+$('#s1').val()+$('#s2').val()+$('#s3').val()+$('#s4').val();
    $('#gt').val(total)
  }
  
  var blink = 
  document.getElementById('blink');

setInterval(function () {
  blink.style.opacity = 
  (blink.style.opacity == 0 ? 1 : 0);
}, 100); 