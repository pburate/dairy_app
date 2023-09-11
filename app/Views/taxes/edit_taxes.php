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

									<h2>Edit Product</h2>

									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />

									<form class="form form-label" name="myform" action="<?= base_url('TaxesController/update_tax') ?>" method="post" onsubmit="return add_validations()">
                                    <input type="hidden" name="tax_info_id" value="<?= $taxes['tax_info_id'] ?>" >
                                           
                                        <!-- Tax name -->
										<div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align float-left" for="tax_name"> Tax Name</label><span class="required"></span>
											</label>
                                            <div class="col-md-4 col-sm-4">
                                            <input type="text" class="form-control form-control-sm" id="tax_name" name="tax_name" value="<?= $taxes['tax_name'] ?>" rows="3" placeholder=" Tax Name" required>
                                            <span id="valid_tax_name"
                                        class="text-danger md-3"></span>
                                          </div>
										</div>

                                           <!-- tax percentage -->
										<div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align float-left" for="tax_percentage">  Tax Percentage</label><span class="required"></span>
											</label>
                                            <div class="col-md-4 col-sm-4">
                                            <input type="text" class="form-control form-control-sm float-end" id="tax_percentage" name="tax_percentage" value="<?= $taxes['tax_percentage'] ?>"  rows="3" placeholder="Tax Percentage" required>
                                            <span id="valid_tax_percentage"
                                        class="text-danger md-3"></span>
                                          </div>
                                        </div>
										
                                        <!-- tax reg number-->
                                        <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align float-start" for="tax_reg_number">Tax Reg. Number</label><span class="required"></span>
											</label>
                                            <div class="col-md-4 col-sm-4">
                                            <input type="text" class="form-control form-control-sm float-end" id="tax_reg_number" name="tax_reg_number" value="<?= $taxes['tax_reg_number'] ?>"  rows="3" placeholder="Tax Reg. Number" required>
                                            <span id="valid_reg_number"
                                        class="text-danger md-3"></span>
                                            </div>
                                        </div>

                                        <!-- hsn code-->
                                        <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align float-start" for="hsn_code">HSN Code</label><span class="required"></span>
											</label> 
                                            <div class="col-md-4 col-sm-4">
                                            <input type="text" class="form-control form-control-sm float-end" id="hsn_code" name="hsn_code" value="<?= $taxes['hsn_code'] ?>"  rows="3" placeholder="HSN Code" required>
                                            <span id="valid_hsn_code"
                                        class="text-danger md-3"></span>
                                            </div>
                                        </div>               
                        

                                        <!-- submit/cancel -->
                                       
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button type="submit" class="btn btn-success" >Update</button>

                                                <a href="<?= base_url('TaxesController') ?>"  class="btn btn-danger">Cancel</a>

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
<<<<<<< HEAD
<script>
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
</script>
