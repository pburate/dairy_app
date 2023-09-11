

$(document).ready(function () {
    var check = true;
 
 //validation for product name
     $("#product_name").keyup(function () {
      validate_product_name();
     });
     var product_name_regex = /^[A-Za-z]+$/;

     function validate_product_name() {
         let product_name = $("#product_name").val();
         if (!product_name.match(product_name_regex) || product_name.length==0) {
            $("#valid_product_name").html("**please enter a valid product name.");
             check=false;
             return false;
         }
         else {
            $("#valid_product_name").html('');
            check=true;
         }
       
     }
 
     $('#form_submit_btn').click(function()
     {
        //  check=true;           
        validate_product_name();
         
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
 
     //valdidation for product weight

     $("#product_weight").keyup(function () {
      validate_product_weight();
     });
     var product_weight_regex = /^[-+]?[0-9]*\.?[0-9]+$/;
 
     function validate_product_weight() {
         let product_weight = $("#product_weight").val();
         if (!product_weight.match(product_weight_regex) || product_weight.length==0) {
            $("#valid_product_weight").html("**please enter a valid weight");
             check=false;
             return false;
         }
         else {
            $("#valid_product_weight").html('');
            check=true;
         }
       
     }
 
     $('#form_submit_btn').click(function()
     {
        //  check=true;           
        validate_product_weight();
         
         if(check==true)
         {
             return true;
         }
         else
         {
             return false;
         }
         
     });
 

//validation for product tax amount
     $("#product_tax_amount").keyup(function () {
      validate_product_tax_amount();
     });
     var product_tax_regex = /^[-+]?[0-9]*\.?[0-9]+$/;
 
     function validate_product_tax_amount() {
         let product_tax = $("#product_tax_amount").val();
         if (!product_tax.match(product_tax_regex) || product_tax.length==0) {
            $("#valid_product_tax_amount").html("**please enter a valid tax amount.");
             check=false;
             return false;
         }
         else {
            $("#valid_product_tax_amount").html('');
            check=true;
         }
       
     }
 
     $('#form_submit_btn').click(function()
     {
        //  check=true;           
        validate_product_tax_amount();
         
         if(check==true)
         {
             return true;
         }
         else
         {
             return false;
         }
         
     });

     //valiadation for selling price including tax
     $("#selling_price_including_tax").keyup(function () {
      validate_product_selling_price();
     });
     var product_selling_price_regex = /^[-+]?[0-9]*\.?[0-9]+$/;
 
     function validate_product_selling_price() {
         let product_selling_price = $("#selling_price_including_tax").val();
         if (!product_selling_price.match(product_selling_price_regex) || product_selling_price.length==0) {
            $("#valid_product_selling_price").html("**please enter a valid selling price with tax.");
             check=false;
             return false;
         }
         else {
            $("#valid_product_selling_price").html('');
            check=true;
         }
       
     }
 
     $('#form_submit_btn').click(function()
     {
        //  check=true;           
        validate_product_selling_price();
         
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
 
 

 