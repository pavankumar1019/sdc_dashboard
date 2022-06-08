
$(document).ready(function(){

    // count total admissions

    countdata();
setInterval(function(){ 
    countdata();
}, 1000);
function countdata()
{
$.ajax({
    url:"./php_operations/newadmission.php",
    method:"POST",
    data:{type: "getcount"},
    success:function(data)
    {
      $('#getcountdata').html(data);
    }
  });
}


});