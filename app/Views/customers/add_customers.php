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
						<h2>Add Customer</h2>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<br />
						<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
							action="<?= base_url('CustomersController/store_customers') ?>" method="post">

							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="full_name">Customer's
									Name<span class="required"></span>
								</label>
								<div class="col-md-4 col-sm-4">
									<input type="text" id="full_name" name="customer[full_name]" required="required"
										class="form-control " placeholder="Enter Full Name">
										<span id="check_full_name" class="text-danger row font-weight-bold"></span>

								</div>
							</div>

							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="phone">Phone
									Number<span class="required"></span>
								</label>
								<div class="col-md-4 col-sm-4">
									<input type="number" id="phone" name="customer[phone]" required="required"
										class="form-control " placeholder="Enter Phone Number" >
										<span id="check_phone" class="text-danger row font-weight-bold"></span>
								</div>
							</div>
							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="whatsapp">Whatsapp<span
										class="required"></span>
								</label>
								<div class="col-md-4 col-sm-4">
									<input type="number" id="whatsapp" name="customer[whatsapp]" required="required"
										class="form-control " placeholder="Enter Whatsapp Number ">
										<span id="check_whatsapp" class="text-danger row font-weight-bold"></span>
								</div>
							</div>

							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email<span
										class="required"></span>
								</label>
								<div class="col-md-4 col-sm-4">
									<input type="email" id="email" name="customer[email]" required="required"
										class="form-control " placeholder="Enter Email">
										<span id="check_email" class="text-danger row font-weight-bold"></span>
								</div>
							</div>

							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="address">Address<span
										class="required"></span>
								</label>
								<div class="col-md-4 col-sm-4">
									<textarea class="form-control" id="address" name="customer[address]" rows="2" 
									placeholder="Etner Address"
										required></textarea>
										<span id="check_address" class="text-danger row font-weight-bold"></span>
								</div>
							</div>

							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="area_id">Area<span
										class="required"></span>
								</label>
								<div class="col-md-4 col-sm-4">
									<select class="form-select" tabindex="-1" name="customer[area_id]"
										id="area_name" for="area_id">
										<!-- <option value=""></option> -->
										<option selected>Select Area</option>
										<?php foreach ($areas as $item): ?>
											<option value="<?= $item['area_id'] ?>" class="form-select"><?= $item['area_name'] ?></option>
										<?php endforeach ?>
									</select>
									<span id="check_area_name" class=" parsley-error text-danger row font-weight-bold"></span>
								</div>
							</div>

							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="latitude">Latitude<span
										class="required"></span>
								</label>
								<div class="col-md-4 col-sm-4">
									<input type="text" id="latitude" name="customer[latitude]"
										class="form-control " placeholder="Latitude">
										<span id="check_latitude" class="text-danger row font-weight-bold"></span>
								</div>
							</div>

							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align"
									for="longitude">Longitude<span class="required"></span>
								</label>
								<div class="col-md-4 col-sm-4">
									<input type="text" id="longitude" name="customer[longitude]"
										class="form-control " placeholder="Longitude">
										<span id="check_longitude" class="text-danger row font-weight-bold"></span>
								</div>
							</div>
							<div class="ln_solid"></div>
							<div class="item form-group">
								<div class="col-md-6 col-sm-6 offset-md-3">
									<button type="submit" id="form_submit_btn" class="btn btn-success">Submit</button>
									<a href="<?= base_url('CustomersController') ?>" class="btn btn-danger">Cancel</a>
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