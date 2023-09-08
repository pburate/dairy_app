

$(document).ready(function () {
    var check = true;
 
 
     $("#area_name").keyup(function () {
         validate_areas();
     });
     var area_regex = /^[A-Za-z ]{5,}$/;
 
     function validate_areas() {
         let area = $("#area_name").val();

         if (!area.match(area_regex) || area.lenght==0) {
            $("#check_area_name").html("**please enter a valid area");
             check=false;
             return false;
         }
         else {
            $("#check_area_name").html('');
            check=true;
         }
       
     }
 
     $('#form_submit_btn').click(function()
     {
        //  check=true;           
         validate_areas();
         
         if(check==true)
         {
             return true;
         }
         else
         {
             return false;
         }
         
     })
 
 })
 
 
 