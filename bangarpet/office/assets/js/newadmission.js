
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



});