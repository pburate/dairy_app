<?php include(APPPATH . 'Views/Home/header.php') ?>
<!-- menu profile quick info -->
<?php include(APPPATH . 'Views/Home/profilemenu.php') ?>
<!-- /menu profile quick info -->
<!-- <br /> -->

<!-- sidebar menu -->
<?php include(APPPATH . 'Views/Home/sidemenu.php') ?>
<!-- /sidebar menu -->

<!-- top navigation -->
<?php include(APPPATH . 'Views/Home/topmenu.php') ?>
<!-- /top navigation -->

<!-- page content -->
<div class="right_col" role="main">
  <div class="">


    <div class="clearfix"></div>
    <div class="row">
      <div class=" mx-auto col-10 col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Add Products</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form class="form form-label" name="myform" action="<?= base_url('ProductsController/store_products') ?>"
              method="post">

                                        <!-- product name -->
										<div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align float-start" for="product_name">Product Name</label>
                                            <div class="col-md-4 col-sm-4">
                                            <input type="text" class="form-control form-control-sm float-end" id="product_name" name="product_name" rows="3" placeholder="Name" required>
                                            <span id="valid_product_name"
                                        class="text-danger md-3"></span>
                                            </div>
										</div>

              <!-- product categories -->
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align float-start" for="product_category">
                  Category</label><span class="required"></span>
                </label>
                <div class="col-md-4 col-sm-4">
                  <select class="form-select form-select-sm float-end" name="product_category" id="product_category"
                    required>
                    <option>Select Category </option>
                    <option> Regular</option>
                    <option>Seasonal</option>
                  </select>

                </div>
              </div>

              <!-- product weight -->
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align float-start" for="product_weight">
                  Weight</label><span class="required"></span>
                </label>
                <div class="col-md-4 col-sm-4">
                  <input type="text" class="form-control form-control-sm float-end" id="product_weight"
                    name="product_weight" rows="3" placeholder="Weight" required>
                    <span id="valid_product_weight"
                                        class="text-danger md-3"></span>
                                          
                </div>
              </div>
                                        <!-- product unit -->
                                        <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align float-start" for="product_unit"> Unit</label><span class="required"></span>
											</label>
                      <div class="col-md-4 col-sm-4">
                                            <select class="form-select form-select-sm float-end" name="product_unit" id="product_unit" required>
                                                <option>Select Unit</option>
                                                <option>Litre</option>
                                                <option>Kilogram</option>
                                            </select>
                                       
                                            </div>
                                         
                                        </div>

                                        <!-- product tax amount -->
                                        <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align float-start" for="product_tax_amount">Tax Amount</label><span class="required"></span>
											</label> 
                                            <div class="col-md-4 col-sm-4">
                                            <input type="text" class="form-control form-control-sm float-end" id="product_tax_amount" name="product_tax_amount" rows="3" placeholder="Tax Amount" required>
                                            <span id="valid_product_tax_amount"
                                        class="text-danger md-3"></span>
                                            </div>
                                        </div>


                                        <!-- product selling_price_including_tax -->
                                        <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align float-start" for="selling_price_including_tax">Selling Price With Tax</label><span class="required"></span>
											</label>
                                            <div class="col-md-4 col-sm-4 ">
                                            <input type="text" class="form-control form-control-sm float-end" id="selling_price_including_tax" name="selling_price_including_tax" rows="3" placeholder="Selling Price Including Tax" required>
                                            <span id="valid_product_selling_price"
                                        class="text-danger md-3"></span>
                                            </div>
                                        </div>

              <!-- submit/cancel -->

              <div class="ln_solid"></div>
              <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3">
                  <button type="submit" class="btn btn-success" id="form_submit_btn">Submit</button>
                  <a href="<?= base_url('ProductsController') ?>" class="btn btn-danger">Cancel</a>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- /page content -->


<!-- /footer content -->
<?php include(APPPATH . 'Views/Home/footer.php') ?>

<script>


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
 
 

 


 
</script>