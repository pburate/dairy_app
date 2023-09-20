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
                        <h2>Add Tax</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form class="form form-label" name="myform"
                            action="<?= base_url('TaxesController/store_taxes') ?>"
                            method="post">
                            <!-- tax name -->
                            <div class="item form-group">
                                <label
                                    class="col-form-label col-md-3 col-sm-3 label-align float-start"
                                    for="tax_name"> Tax Name</label><span
                                    class="required"></span>
                                </label>
                                <div class="col-md-4 col-sm-4">
                                    <input type="text"
                                        class="form-control form-control-sm float-end"
                                        id="tax_name" name="tax_name" rows="3"
                                        placeholder="Tax Name" required value="gst" readonly>
                                    <span id="valid_tax_name"
                                        class="text-danger md-3"></span>
                                </div>
                            </div>
                            <!-- tax percentage -->
                            <div class="item form-group">
                                <label
                                    class="col-form-label col-md-3 col-sm-3 label-align float-start"
                                    for="tax_percentage"> Tax
                                    Percentage</label><span
                                    class="required"></span>
                                </label>
                                <div class="col-md-4 col-sm-4">
                                    <input type="text"
                                        class="form-control form-control-sm float-end"
                                        id="tax_percentage"
                                        name="tax_percentage" rows="3"
                                        placeholder="Tax Percentage" required>
                                    <span id="valid_tax_percentage"
                                        class="text-danger md-3"></span>
                                </div>
                            </div>
                            <!-- tax reg number-->
                            <div class="item form-group">
                                <label
                                    class="col-form-label col-md-3 col-sm-3 label-align float-start"
                                    for="tax_reg_number">Tax Reg.
                                    Number</label><span class="required"></span>
                                </label>
                                <div class="col-md-4 col-sm-4">
                                    <input type="text"
                                        class="form-control form-control-sm float-end"
                                        id="tax_reg_number"
                                        name="tax_reg_number" rows="3"
                                        placeholder="Tax Reg. Number" required>
                                    <span id="valid_reg_number"
                                        class="text-danger md-3"></span>
                                </div>
                            </div>
                            <!-- hsn code-->
                            <div class="item form-group">
                                <label
                                    class="col-form-label col-md-3 col-sm-3 label-align float-start"
                                    for="hsn_code">HSN Code</label><span
                                    class="required"></span>
                                </label>
                                <div class="col-md-4 col-sm-4">
                                    <input type="text"
                                        class="form-control form-control-sm float-end"
                                        id="hsn_code" name="hsn_code" rows="3"
                                        placeholder="HSN Code" required>
                                    <span id="valid_hsn_code"
                                        class="text-danger md-3"></span>
                                </div>
                            </div>
                            <!-- submit/cancel -->
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <button type="submit"
                                        class="btn btn-success" id="form_submit_btn">Submit</button>
                                    <a href="<?= base_url('TaxesController') ?>"
                                        class="btn btn-danger">Cancel</a>
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
<script src="<?= base_url('/public/assets/validations/taxes/taxes_validations.js') ?>"></script>
