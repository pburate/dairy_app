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
									<h2>Edit Areas</h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?= base_url('CountersController/update_counters') ?>" method="post">
                                    <input type="hidden" name="counters_info_id" value="<?= $counters['counters_info_id'] ?>" >
									<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="counters_name">Counters<span class="required"></span>
											</label>
											<div class="col-md-6 col-sm-6">
												<input type="text" id="counters_name" name="counters_name" required="required" class="form-control" value="<?= $counters['counters_name'] ?>" disabled>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="counters_value">Value<span class="required"></span>
											</label>
											<div class="col-md-6 col-sm-6">
												<input type="text" id="counters_value" name="counters_value" required="required" class="form-control" value="<?= $counters['counters_value'] ?>">
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button class="btn btn-primary" type="reset">Cancel</button>
												<button type="submit" class="btn btn-success">Update</button>
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