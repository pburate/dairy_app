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
			<div class="col-md-12 col-sm-12 ">
				<div class="x_panel">
					<div class="x_title">
						<h2>Edit Customer</h2>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<br />
						<form id="customer_form" data-parsley-validate class="form-horizontal form-label-left"
							action="<?= base_url('CustomersController/update_customers') ?>" method="post"  onsubmit="return customer_submit()">

							<input type="hidden" class="form-control" id="customer_id" name="customer_id"
								value="<?= $customers['customer_id'] ?>">

								<input type="hidden" class="form-control" id="monthly_delivery_id" name="monthly_delivery_id"
								value="<?= $customer_monthly_delivery['monthly_delivery_id'] ?>">

							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="full_name">Customer's
									Name<span class="required"></span>
								</label>
								<div class="col-md-4 col-sm-4">
									<input type="text" id="full_name" name="customer[full_name]" required="required"
										class="form-control " value="<?= $customers['full_name'] ?>">
										<span id="check_full_name" class="text-danger row font-weight-bold"></span>	
								</div>
							</div>

							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="phone">Phone
									Number<span class="required"></span>
								</label>
								<div class="col-md-4 col-sm-4">
									<input type="number" id="phone" name="customer[phone]" required="required"
										class="form-control " value="<?= $customers['phone'] ?>">
										<span id="check_phone" class="text-danger row font-weight-bold"></span>
								</div>
							</div>
							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="whatsapp">Whatsapp<span
										class="required"></span>
								</label>
								<div class="col-md-4 col-sm-4">
									<input type="number" id="whatsapp" name="customer[whatsapp]" required="required"
										class="form-control " value="<?= $customers['whatsapp'] ?>">
										<span id="check_whatsapp" class="text-danger row font-weight-bold"></span>
								</div>
							</div>

							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email<span
										class="required"></span>
								</label>
								<div class="col-md-4 col-sm-4">
									<input type="email" id="email" name="customer[email]" required="required"
										class="form-control " value="<?= $customers['email'] ?> ">
										<span id="check_email" class="text-danger row font-weight-bold"></span>
								</div>
							</div>

							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="product_id">Product<span
										class="required"></span>
								</label>
								<div class="col-md-4 col-sm-4">
									<select class="form-control" name="customer_monthly_details[product_id]" id="prodcut_name"
										for="prodcut_id" 	 value="<?= $customer_monthly_delivery['product_id'] ?>"> 
										<?php foreach ($products as $item): ?>
											<option <?php if ($customer_monthly_delivery['product_id'] === $item['product_id']): ?>selected<?php endif; ?>
												 value="<?= $item['product_id']; ?>">
												<?= $item['product_name']; ?>
											</option>
											<?php endforeach ?>
									</select>
									<span id="check_prodcut_name" class=" parsley-error text-danger row font-weight-bold"></span>
								</div>
							</div>
							
							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="quantity">Quantity<span
										class="required"></span>
								</label>
								<div class="col-md-4 col-sm-4">
									<input type="text" id="quantity" name="customer_monthly_details[quantity]" class="form-control" value="<?= $customer_monthly_delivery['quantity'] ?>" >
									<span id="check_quantity" class="text-danger row font-weight-bold"></span>
								</div>
							</div>
							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="address">Address<span
										class="required"></span>
								</label>
								<div class="col-md-4 col-sm-4">
									<textarea class="form-control" id="address" name="customer[address]" rows="2"
										required><?= $customers['address']?></textarea>
										<span id="check_address" class="text-danger row font-weight-bold"></span>
								</div>
							</div>

							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="area_id">Area<span
										class="required"></span>
								</label>
								<div class="col-md-4 col-sm-4">
									<select class="select2_single form-control" name="customer[area_id]"
										id="area_id" for="area_id"
										 value="<?= $customers['area_id'] ?>">
										
										<?php foreach ($areas as $item): ?>
											<option <?php if ($customers['area_id'] === $item['area_id']): ?>selected<?php endif; ?>
												 value="<?= $item['area_id']; ?>">
												<?= $item['area_name']; ?>
											</option>
										<?php endforeach ?>
									</select>
									<span id="check_area_id" class=" parsley-error text-danger row font-weight-bold"></span>
								</div>

							</div>

							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="latitude">Latitude<span
										class="required"></span>
								</label>
								<div class="col-md-4 col-sm-4">
									<input type="text" id="latitude" name="customer[latitude]" required="required"
										class="form-control " value="<?= $customers['latitude'] ?> ">
										<span id="check_latitude" class="text-danger row font-weight-bold"></span>
								</div>
							</div>

							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align"
									for="longitude">longitude<span class="required"></span>
								</label>
								<div class="col-md-4 col-sm-4">
									<input type="text" id="longitude" name="customer[value]=" <?= $customers['email'] ?> ""
										required="required" class="form-control "
										value="<?= $customers['longitude'] ?> ">
										<span id="check_longitude" class="text-danger row font-weight-bold"></span>
								</div>
							</div>
							<div class="ln_solid"></div>
							<div class="item form-group">
											<div class="col-md-4 col-sm-4 offset-md-3">
												<button type="submit" id="form_submit_btn" class="btn btn-success" >Update</button>
                                                <a href="<?= base_url('CustomersController') ?>"  class="btn btn-danger">Cancel</a>
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
<script src="<?= base_url('/public/assets/validations/customers/customers_validations.js') ?>"></script>
