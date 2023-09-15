

$(document).ready(function () {
    var flag = true;
    var counter_name_regex = /[^A-Za-z]$/;
   
   
     $("#counter_name").on('input',function () {
        var counter_name = $("#counter_name").val().replace(counter_name_regex,'')
        $("#counter_name").val(counter_name);
         validate_counters_name();
     });
 
     function validate_counters_name() {
         let counter = $("#counter_name").val();

         if (!counter.match(counter_name_regex) || counter.lenght==0) {
            $("#check_counter_name").html("Please enter a valid counter name");
             flag=false;
             return false;
         }
         else {
            $("#check_counter_name").html('');
            flag=true;
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
            flag=false;
            return false;
        }
        else {
           $("#check_counter_value").html('');
           flag=true;
        }
      
    }
 

    $('#form_submit_btn').click(function()
    {
       //  flag=true;          
         validate_counters_name();
         flag=false;
         validate_counters_value();
         
         if(flag==true)
         {
             return true;
         }
         else
         {
             return false;
         }
         
     })
 
 })
 
 
 