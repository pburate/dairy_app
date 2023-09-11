

$(document).ready(function () {
    var check = true;
 
 
     $("#counter_name").keyup(function () {
         validate_counters_name();
     });
     var counter_name_regex = /^[A-Za-z ]{3,}$/;
 
     function validate_counters_name() {
         let counter = $("#counter_name").val();

         if (!counter.match(counter_name_regex) || counter.lenght==0) {
            $("#check_counter_name").html("Please enter a valid counter name");
             check=false;
             return false;
         }
         else {
            $("#check_counter_name").html('');
            check=true;
         }
       
     }

     
     $("#counter_value").keyup(function () {
        validate_counters_value();
    });
 
    var counter_value_regex = /^[A-Za-z0-9/]{1,}$/;

    function validate_counters_value() {
        let counter = $("#counter_value").val();

        if (!counter.match(counter_value_regex) || counter.lenght==0) {
           $("#check_counter_value").html("Please enter a valid counter value");
            check=false;
            return false;
        }
        else {
           $("#check_counter_value").html('');
           check=true;
        }
      
    }
 

    $('#form_submit_btn').click(function()
    {
       //  check=true;          
         validate_counters_name();
         validate_counters_value();
         
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
 
 
 