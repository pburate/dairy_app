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
        <div class="row" style="display: block;">


            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <?php $session = \Config\Services::session();
                        if ($session->getFlashdata('status')): ?>

                            <div class="alert alert-success" id="alert">
                                <?= $session->getFlashdata('status') ?>
                            </div>
                        <?php endif; ?>
                        <h2>Wastages</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div>


                        <form id="form" name="myform" data-parsley-validate class="form-horizontal form-label-left"
                            action="<? //= base_url('AreasController/store_areas') ?>" method="post"
                            onsubmit="area_submit()">
                            

                            <div class="form-row">
                                <div  class="col-md-6">
                                <label class="col-form-label left col-md-2" for="product_name">Product<span class="required"></span>
                                </label>
                                <div class="col-md-7">
                                    <select class="form-control" name="customer_monthly_details[product_id]"
                                        id="product_name" for="prodcut_id">
                                        <option selected>Select Product</option>
                                        <?php //foreach ($products as $item): ?>
                                        <option value="<? //= $item['product_id'] ?>" class="form-select"><? //= $item['product_name'] ?></option>
                                        <?php // endforeach ?>
                                    </select>
                                    <span id="check_product_name"
                                        class=" parsley-error text-danger row font-weight-bold"></span>
                                </div>
                                </div>

                                <div  class="col-md-6">
                                <label class="col-form-label left col-md-2" for="product_name">Quantity
                                </label>
                                <div class="col-md-7">
                                    <input class="form-control" id="inputSuccess4">
                                </div>
                                </div>
                            </div>

                            <div class="form-row mt-2">
                            <div  class="col-md-6">
                                <label class="col-form-label left col-md-2" for="product_name">Wastage Date
                                </label>
                                <div class="col-md-7">
                                    <input class="form-control" id="inputSuccess4">
                                </div>
                                </div>

                                <div  class="col-md-6">
                                <label class="col-form-label left col-md-2" for="product_name">Location
                                </label>
                                <div class="col-md-7">
                                    <input class="form-control" id="inputSuccess4">
                                </div>
                                </div>
                            </div>

                            <div class="form-row mt-2">
                            <div  class="col-md-6">
                                <label class="col-form-label left col-md-2" for="product_name">Reason
                                </label>
                                <div class="col-md-7">
                                    <input class="form-control" id="inputSuccess4">
                                </div>
                                </div>
                                <div>
                                    <button class="btn btn-primary">+</button>
                                </div>
                            </div>

                                

                            <!-- </div> -->



                            <div class="ln_solid"></div>


                        </form>
                    </div>



                    <table id="myTable" class="">
                        <thead>
                            <tr class="headings">
                                <!-- <th class="column-title">Wastage</th> -->
                                <!-- <th class="column-title">Wastage Date</th> -->
                                <th class="column-title">Quantity</th>
                                <th class="column-title">Wastage Date</th>
                                <th class="column-title">Location</th>
                                <th class="column-title">Reason</th>
                                <th class="column-title ">Edit</th>
                                <th class="column-title ">Delete</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($wastage as $item) { ?>
                                <tr class="odd pointer">

                                    <td>
                                        <?= $item['quantity'] ?>
                                    </td>

                                    <td>
                                        <?= $item['wastage_date'] ?>
                                    </td>

                                    <td>
                                        <?= $item['location'] ?>
                                    </td>

                                    <td>
                                        <?= $item['reason'] ?>
                                    </td>


                                    <td>
                                        <a href="<?= base_url('WastagesController/edit_wastage/') . $item['wastage_id'] ?>"
                                            class="btn btn-success">Edit</a>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger" id="delete_btn"
                                            value="<?= $item['wastage_id'] ?>">
                                            Delete
                                        </button>

                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->


<!-- wastage Delete Model -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Area</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="hidden_delete_id">
                Are you sure you want to delete this area
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary wastage_yes_btn" data-dismiss="modal">Yes</button>
            </div>
        </div>
    </div>
</div>



<!-- /footer content -->
<?php include(APPPATH . 'Views/Home/footer.php') ?>


<script>

    setTimeout(() => {
        const alert = document.getElementById('alert');
        alert.style.display = 'none';
    }, 2000);

    //  to delee the data and 
    $(document).ready(function () {
        $(document).on('click', '#delete_btn', function () {
            var wastage_id = $(this).closest('tr').find('#delete_btn').val();
            //  alert(wastage_id)
            $('#hidden_delete_id').val(wastage_id);
            $('#deleteModal').modal('show');
        });
    });


    $(document).on('click', '.wastage_yes_btn', function () {
        var area_id = $('#hidden_delete_id').val();
        $.ajax({
            url: "<?= base_url('wastageController/delete_wastage') ?>",
            method: "POST",
            data: {
                'area_id': area_id
            },
            success: function (response) {
                location.reload();
            }
        })
    });

</script>