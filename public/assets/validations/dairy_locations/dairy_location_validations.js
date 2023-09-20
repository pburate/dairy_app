
$(document).ready(function () {
    var check = true;
 
 //validation for product name
     $("#location_name").keyup(function () {
        validate_location_name();
     });
     var location_name_regex = /^[A-Za-z ]+$/;

     function validate_location_name() {
         let location_name = $("#location_name").val();
         if (!location_name.match(location_name_regex) || location_name.length==0) {
            $("#valid_location_name").html("Please enter a valid location name.");
             check=false;
             return false;
         }
         else {
            $("#valid_location_name").html('');
            check=true;
         }
       
     }
 
     $('#form_submit_btn').click(function()
     {
        //  check=true;           
        validate_location_name();
         
         if(check==true)
         {
             return true;
         }
         else
         {
             return false;
         }
         
     });
    });

