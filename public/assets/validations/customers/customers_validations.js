

$(document).ready(function () {
    var flag = true;

    var full_name_regex = /^[A-Za-z ]{8,}$/;
    var phone_regex = /^[6-9]{1}[0-9]{9}$/;
    var whatsapp_regex = /^[6-9]{1}[0-9]{9}$/;
    var email_regex = /^[a-zA-Z0-9._]{5,}@([\w-]+.)+[\w-]{2,4}$/;
    var address_regex = /^[A-Za-z0-9 ]{8,}$/;
    var quantity_regex = /^[1-9]{1,}$/;



 
 
     $("#full_name").keyup(function () {
         validate_customers_name();
     });

 
     function validate_customers_name() {
         let counter = $("#full_name").val();

         if (!counter.match(full_name_regex) || counter.lenght==0) {
            $("#check_full_name").html("Please enter a valid  name");
             flag=false;
             return false;
         }
         else {
            $("#check_full_name").html('');
            flag=true;
         }
       
     }

     
     $("#phone").keyup(function () {
        validate_phone_value();
    });
 

    function validate_phone_value() {
        let phone = $("#phone").val();

        if (!phone.match(phone_regex) || phone.lenght==0) {
           $("#check_phone").html("Please enter a valid phone number");
            flag=false;
            return false;
        }
        else {
           $("#check_phone").html('');
           flag=true;
        }
      
    }

    $("#whatsapp").keyup(function () {
        validate_whatsapp_value();
    });
 

    function validate_whatsapp_value() {
        let whatsapp = $("#whatsapp").val();

        if (!whatsapp.match(whatsapp_regex) || whatsapp.lenght==0) {
           $("#check_whatsapp").html("Please enter a valid whatsapp number");
            flag=false;
            return false;
        }
        else {
           $("#check_whatsapp").html('');
           flag=true;
        }
      
    }

      
    $("#email").keyup(function () {
        validate_email();
    });


    function validate_email() {
        
        let email_value = $("#email").val();
    if (!email_value.match(email_regex) || email_value.length == 0) {
            $('#check_email').html("Please enter a valid email"); 
            flag=false;
            return false;
        }
        else
        {
            $('#check_email').html("");
            flag = true;
        }
    }

    
      
    $("#address").keyup(function () {
        validate_address_name();
    });

    function validate_address_name() {
        let address_value = $("#address").val();

        if (!address_value.match(address_regex) || address_value.lenght==0) {
           $("#check_address").html("Please enter a valid address");
            flag=false;
            return false;
        }
        else {
           $("#check_address").html('');
           flag=true;
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
            flag=false;
              return false;
        }
        else {
            $("#check_area_name").html("");
            flag = true;
        }
    }


    

    $("#form_submit_btn").click(function () {
        validate_product();
    });
    $("#product_name").click(function () {
        validate_product();
    });

    function validate_product() {
        let area_value = $("#product_name").val();
        if (area_value == "Select Product") {
            $("#check_product_name").html("Please select valid product");
            flag=false;
              return false;
        }
        else {
            $("#check_product_name").html("");
            flag = true;
        }
    }

    
    $("#quantity").keyup(function () {
        validate_quantity_value();
    });
 

    function validate_quantity_value() {
        let quantity = $("#quantity").val();

        if (!quantity.match(quantity_regex) || quantity.lenght==0) {
           $("#check_quantity").html("Please enter a valid quantity");
            flag=false;
            return false;
        }
        else {
           $("#check_quantity").html('');
           flag=true;
        }
      
    }



 
    $('#form_submit_btn').click(function()
    {
       //  flag=true;       
        flag=false;
        validate_customers_name();
        flag=false;
        validate_phone_value();
        flag=false;
        validate_whatsapp_value();
        flag=false;
        validate_email();
        flag=false;
        validate_area();
        flag=false;
        validate_address_name();
        flag=false;
        validate_product();
        flag=false;
        validate_quantity_value();
        // flag=false;


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
   
 
 