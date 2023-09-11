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
									<h2>Edit Area</h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form id="form" data-parsley-validate class="form-horizontal form-label-left" action="<?= base_url('AreasController/update_areas') ?>" method="post"  onsubmit="return area_validations()">
                                    <input type="hidden" name="area_id" value="<?= $areas['area_id'] ?>" >
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="area_name">Area<span class="required"></span>
											</label>
											<div class="col-md-6 col-sm-6">
												<input type="text" class="form-control" id="area_name" name="area_name" required value="<?= $areas['area_name'] ?>" >
												<span id="check_area_name" class="text-danger row font-weight-bold"></span>
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-4 col-sm-4 offset-md-3">
												<button type="submit" id="form_submit_btn" class="btn btn-success" >Update</button>
                                                <a href="<?= base_url('AreasController') ?>"  class="btn btn-danger">Cancel</a>
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
<script src="<?= base_url('/public/assets/validations/areas/areas_validations.js') ?>"></script>
