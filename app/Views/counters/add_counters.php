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
						<h2>Add Counters</h2>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<br />
						<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
							action="<?= base_url('CountersController/store_counters') ?>" method="post">

							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align"
									for="counters_name">Counters<span class="required"></span>
								</label>
								<div class="col-md-6 col-sm-6">
									<input type="text" id="counter_name" name="counter_name" required="required"
										class="form-control ">
								</div>
							</div>
							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align"
									for="counter_value">Value<span class="required"></span>
								</label>
								<div class="col-md-6 col-sm-6">
									<input type="text" id="counter_value" name="counter_value" required="required"
										class="form-control ">
								</div>
							</div>

							<div class="ln_solid"></div>
							<div class="item form-group">
								<div class="col-md-6 col-sm-6 offset-md-3">
									<button type="submit" class="btn btn-success">Submit</button>
									<a href="<?= base_url('CountersController') ?>" class="btn btn-danger">Cancel</a>
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