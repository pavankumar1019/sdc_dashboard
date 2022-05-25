$(document).ready(function () {
    loadadmission();
    setInterval(function(){ 
        loadadmission();
    }, 1000);
function loadadmission(){
    $.ajax({    //create an ajax request to display.php
        type: "GET",
        url: "./Modules/php_inc/dashboard.php",             
        dataType: "html",   //expect html to be returned                
        success: function(response){                    
            $("#new_admission_count").html(response); 
        }

    });
}
})