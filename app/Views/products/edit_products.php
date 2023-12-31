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
									<h2>Edit Products</h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form class="form form-label" name="myform" action="<?= base_url('ProductsController/update_product') ?>" method="post" onsubmit="return add_validations()">
                                    <input type="hidden" name="product_id" value="<?= $products['product_id'] ?>" >
                                           
                                        <!-- product name -->
										<div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align float-left" for="product_name">Name</label><span class="required"></span>
											</label>
                                            <div class="col-md-4 col-sm-4">
                                            <input type="text" class="form-control form-control-sm" id="product_name" name="product_name" value="<?= $products['product_name'] ?>" rows="3" placeholder="Name" required>
                                            <span id="valid_product_name"
                                        class="text-danger md-3"></span>
                                            </div>
										</div>

                                           <!-- product categories -->
										<div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align float-left" for="product_category"> Category</label><span class="required"></span>
											</label>
                                            <div class="col-md-4 col-sm-4">
                                            <select class="form-select form-select-sm" name="product_category" id="product_category">
                                            
                                            <option selected>
                                                <?= $products["product_category"] ?>
                                        </option>
                                        <?php 
                                        if($products["product_category"]!= "Regular" ) { ?>
                                                <option>Regular</option>
                                                <?php } else{?>
                                                    <option>Seasonal</option>
                                                    <?php }?>
                                            </select>
                                            </div>
                                        </div>
										
                                       <!-- product weight -->
                                        <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align float-left" for="product_weight"> Weight</label><span class="required"></span>
											</label>
                                            <div class="col-md-4 col-sm-4">
                                            <input type="text" class="form-control form-control-sm" id="product_weight" name="product_weight" rows="3" placeholder="Weight" value="<?= $products['weight'] ?>" required>
                                            <span id="valid_product_weight"
                                        class="text-danger md-3"></span>
                                          </div>
                                        </div>

                                        <!-- product unit -->
                                        <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align float-left" for="product_unit"> Unit</label><span class="required"></span>
											</label>
                                            <div class="col-md-4 col-sm-3">
                                            <select class="form-select form-select-sm" name="product_unit" id="product_unit">

                                            <option selected>
                                                <?= $products["unit"] ?>
                                        </option>
                                        <?php 
                                        if($products["unit"]!= "Litre" ) { ?>
                                                <option>Litre</option>
                                                <?php } else{?>
                                                    <option>Kilogram</option>
                                                    <?php }?>
                                            </select>
                                            </div>
                                        </div>

                                          <!-- product before tax -->
                                          <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align float-left" for="price_before_tax"> Price Before Tax</label><span class="required"></span>
											</label>
                                            <div class="col-md-4 col-sm-4">
                                            <input type="text" class="form-control form-control-sm" id="price_before_tax" name="price_before_tax" rows="3" placeholder="Price Before Tax" required  value="<?= $products['price_before_tax'] ?>" >
                                            <span id="valid_price_before_tax"
                                        class="text-danger md-3"></span>
                                          </div>
                                        </div>


                                         <!-- product tax amount -->
                                         <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="product_tax_amount">Tax Amount</label><span class="required"></span>
											</label> 
                                            <div class="col-md-4 col-sm-4">
                                          
                 <input type="text" class="form-control form-control-sm" id="product_tax_amount" name="product_tax_amount" rows="3" placeholder="Tax Amount" value="<?= $products['tax_amount'] ?>"  required>
                 <span id="valid_product_tax_amount"
                                        class="text-danger md-3"></span>
                </div>
                                        </div>



                                        <!-- product selling_price_including_tax -->
                                        <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="selling_price_including_tax">Selling Price Including Tax</label><span class="required"></span>
											</label>
                                            <div class="col-md-4 col-sm-4 ">
                                            <input type="text" class="form-control form-control-sm" id="selling_price_including_tax" name="selling_price_including_tax" rows="3" placeholder="Selling Price Including Tax" value="<?= $products['selling_price_including_tax'] ?>"required>
                                          
                                        <span id="valid_product_selling_price"
                                        class="text-danger md-3"></span>
                                          </div>
                                        </div>

                                       
                                        <!-- submit/cancel -->
                                       
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button type="submit" class="btn btn-success" >Update</button>
                                                <a href="<?= base_url('ProductsController') ?>"  class="btn btn-danger">Cancel</a>
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
