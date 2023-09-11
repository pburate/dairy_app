

$(document).ready(function () {
    var check = true;

    var full_name_regex = /^[A-Za-z ]{8,}$/;
    var phone_regex = /^[6-9]{1}[0-9]{9}$/;
    var whatsapp_regex = /^[6-9]{1}[0-9]{9}$/;
    var email_regex = /^[a-zA-Z0-9._]{5,}@([\w-]+.)+[\w-]{2,4}$/;
    var address_regex = /^[A-Za-z0-9 ]{8,}$/;




 
 
     $("#full_name").keyup(function () {
         validate_customers_name();
     });

 
     function validate_customers_name() {
         let counter = $("#full_name").val();

         if (!counter.match(full_name_regex) || counter.lenght==0) {
            $("#check_full_name").html("Please enter a valid  name");
             check=false;
             return false;
         }
         else {
            $("#check_full_name").html('');
            check=true;
         }
       
     }

     
     $("#phone").keyup(function () {
        validate_phone_value();
    });
 

    function validate_phone_value() {
        let phone = $("#phone").val();

        if (!phone.match(phone_regex) || phone.lenght==0) {
           $("#check_phone").html("Please enter a valid phone number");
            check=false;
            return false;
        }
        else {
           $("#check_phone").html('');
           check=true;
        }
      
    }

    $("#whatsapp").keyup(function () {
        validate_whatsapp_value();
    });
 

    function validate_whatsapp_value() {
        let whatsapp = $("#whatsapp").val();

        if (!whatsapp.match(whatsapp_regex) || whatsapp.lenght==0) {
           $("#check_whatsapp").html("Please enter a valid whatsapp number");
            check=false;
            return false;
        }
        else {
           $("#check_whatsapp").html('');
           check=true;
        }
      
    }

      
    $("#email").keyup(function () {
        validate_email();
    });


    function validate_email() {
        
        let email_value = $("#email").val();
    if (!email_value.match(email_regex) || email_value.length == 0) {
            $('#check_email').html("Please enter a valid email"); 
            check=false;
            return false;
        }
        else
        {
            $('#check_email').html("");
            check = true;
        }
    }

    
      
    $("#address").keyup(function () {
        validate_address_name();
    });

    function validate_address_name() {
        let address_value = $("#address").val();

        if (!address_value.match(address_regex) || address_value.lenght==0) {
           $("#check_address").html("Please enter a valid address");
            check=false;
            return false;
        }
        else {
           $("#check_address").html('');
           check=true;
        }
      
    }



    $("#form_submit_btn").click(function () {
        validate_area();
    });
    $("#area_name").click(function () {
        validate_area();
    });

    function validate_area() {
        let area_value = $("#area_name").val();
        if (area_value == "Select Area") {
            $("#check_area_name").html("Please select valid area");
            check=false;
              return false;
        }
        else {
            $("#check_area_name").html("");
            check = true;
        }
    }


 
 

 
     $('#form_submit_btn').click(function()
     {
        //  check=true;       
         validate_customers_name();
         validate_phone_value();
         validate_whatsapp_value();
         validate_email();
         validate_area();
         validate_address_name();

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
 
 
 