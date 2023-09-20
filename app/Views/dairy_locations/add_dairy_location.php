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
            <h2>Add LOcation</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form class="form form-label" name="myform" action="<?= base_url('DairyLocationsController/store_dairy_location') ?>"
              method="post">
                                        <!-- location name -->
										<div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align float-start" for="location_name">Location Name</label>
                                            <div class="col-md-4 col-sm-4">
                                            <input type="text" class="form-control form-control-sm float-end" id="location_name" name="location_name" rows="3" placeholder="Location Name" required>
                                            <span id="valid_location_name"
                                        class="text-danger md-3"></span>
                                            </div>
										</div>

              <!-- submit/cancel -->

              <div class="ln_solid"></div>
              <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3">
                  <button type="submit" class="btn btn-success" id="form_submit_btn">Submit</button>
                  <a href="<?= base_url('DairyLocationController') ?>" class="btn btn-danger">Cancel</a>
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
<script src="<?= base_url('/public/assets/validations/dairy_locations/dairy_locations_validations.js') ?>"></script>
<script>

