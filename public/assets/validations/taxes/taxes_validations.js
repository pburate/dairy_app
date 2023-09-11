$(document).ready(function () {

    var check = true;
 
 //validation for tax name
     $("#tax_name").keyup(function () {
        validate_tax_name();
     });
     var tax_regex = /^[A-Za-z ]+$/;

     function validate_tax_name() {
         let tax_name = $("#tax_name").val();
         if (!tax_name.match(tax_regex) || tax_name.length==0) {
            $("#valid_tax_name").html("**please enter a valid tax name.");
             check=false;
             return false;
         }
         else {
            $("#valid_tax_name").html('');
            check=true;
         }
       
     }
 

     $('#form_submit_btn').click(function()
     {
        //  check=true;           
        validate_tax_name();
         
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


$(document).ready(function () {

    var check = true;

    //validation for tax percentage
    $("#tax_percentage").keyup(function () {
      validate_tax_percentage();
     });
     var tax_percentage_regex = /^[-+]?[0-9]*\.?[0-9]+$/;
 
     function validate_tax_percentage() {
         let tax_percentage = $("#tax_percentage").val();
         if (!tax_percentage.match(tax_percentage_regex) || tax_percentage.length==0) {
            $("#valid_tax_percentage").html("**please enter a valid percentage.");
             check=false;
             return false;
         }
         else {
            $("#valid_tax_percentage").html('');
            check=true;
         }
       
     }
 
     $('#form_submit_btn').click(function()
     {
        //  check=true;           
        validate_tax_percentage();
         
         if(check==true)
         {
             return true;
         }
         else
         {
             return false;
         }
         
        });

        // validation for tax reg number
        $("#tax_reg_number").keyup(function () {
      validate_tax_reg_number();
     });
     var tax_reg_num_regex = /^[a-zA-Z0-9_.-]*$/;
 
     function validate_tax_reg_number() {
         let tax_reg_number = $("#tax_reg_number").val();
         if (!tax_reg_number.match(tax_reg_num_regex) || tax_reg_number.length==0) {
            $("#valid_reg_number").html("**please enter a valid reg number.");
             check=false;
             return false;
         }
         else {
            $("#valid_reg_number").html('');
            check=true;
         }
       
     }
 
     $('#form_submit_btn').click(function()
     {
        //  check=true;           
        validate_tax_reg_number();
         
         if(check==true)
         {
             return true;
         }
         else
         {
             return false;
         }
         
        }); 
        
        
        //validation for hsn code
        $("#hsn_code").keyup(function () {
      validate_tax_hsn_code();
     });
     var tax_hsn_code_regex = /^[a-zA-Z0-9_.-]*$/;
 
     function validate_tax_hsn_code() {
         let tax_hsn_code = $("#hsn_code").val();
         if (!tax_hsn_code.match(tax_hsn_code_regex) || tax_hsn_code.length==0) {
            $("#valid_hsn_code").html("**please enter a valid HSN code.");
             check=false;
             return false;
         }
         else {
            $("#valid_hsn_code").html('');
            check=true;
         }
       
     }
 
     $('#form_submit_btn').click(function()
     {
        //  check=true;           
        validate_tax_hsn_code();
         
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