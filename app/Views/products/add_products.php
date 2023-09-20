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
            <h2>Add Product</h2>
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

                <!-- tax name -->
                <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align float-start" for="tax_name">
                  Tax Name</label><span class="required"></span>
                </label>
                <div class="col-md-4 col-sm-4">
                <select class="form-select form-select-sm float-end" name="tax_name" id="tax_name"
                    required>
                    <option>Select Tax</option>
                    <?php foreach($taxes as $row):?>
                    <option class="<?= $row["tax_percentage"]?>" id="<?= $row["tax_id"]?>"><?= $row["tax_name"]?></option>
                    <?php endforeach;?> 
                  </select>
                       <input type="hidden" name="tax_id" id="tax_id">
                  
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
                          
                                         <!-- product before tax -->
                                         <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align float-left" for="price_before_tax"> Price Before Tax</label><span class="required"></span>
											</label>
                                            <div class="col-md-4 col-sm-4">
                                            <input type="text" class="form-control form-control-sm" id="price_before_tax" name="price_before_tax" rows="3" placeholder="Price Before Tax" required>
                                            <span id="valid_price_before_tax"
                                        class="text-danger md-3"></span>
                                          </div>
                                        </div>


                                        <!-- product tax amount -->
                                        <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align float-start" for="product_tax_amount">Tax Amount</label><span class="required"></span>
											</label> 
                                            <div class="col-md-4 col-sm-4">
            
                                            <input type="text" class="form-control form-control-sm float-end" id="product_tax_amount" name="product_tax_amount" rows="3" placeholder="Tax Amount" required readonly>
                                          
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
            
                <tr></tr>      <button type="submit" class="btn btn-success" id="form_submit_btn">Submit</button>
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
<script src="<?= base_url('/public/assets/validations/products/products_validations.js') ?>"></script>
<script>

  $("#tax_name").change(function(){
  var a = $(this).children(":selected").attr("id");
  var percentage = $(this).children(":selected").attr("class");
  $("#product_tax_amount").val(percentage);
   var tax_id =$("#tax_id").val(a);
   });

  //selling price calculations
  $("#price_before_tax").keyup(function(){
  //  alert("oretoi");
    var price_without_tax = parseFloat($(this).val());
    // alert(price_without_tax);
   var tax = parseFloat($("#product_tax_amount").val());
   var selling_price_including_tax = price_without_tax + tax;
   $("#selling_price_including_tax").val(selling_price_including_tax);
  });
</script>
