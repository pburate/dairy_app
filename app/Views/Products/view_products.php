<?php include(APPPATH . 'Views/Home/header.php') ?>
<!-- menu profile quick info -->
<?php include(APPPATH . 'Views/Home/profilemenu.php') ?>
<!-- /menu profile quick info -->
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
            <h2>Products</h2>
            <div class="clearfix"></div>
          </div>
          <!-- <div class="mb-"></div> -->
          <div class="d-flex justify-content-end">
            <a href="<?= base_url('ProductsController/add_products')?>" class="btn btn-primary">Add Product</a>
          </div>
          <table id="myTable" class="">
            <thead>
              <tr class="headings">
                <th class="column-title">Products</th>
                <th> Categories</th>
                <th> weight</th>
                <th> Unit</th>
                <th>Selling Price Including Tax</th>
                <th> tax Amount</th>
                <th class="column-title ">Edit</th>
                <th class="column-title ">Delete</th>

              </tr>
            </thead>

            <tbody>
            
            <?php foreach ($products as $item) { ?>
              <tr class="odd pointer">
                           
                            <td>
                                <?= $item['product_name'] ?>
                            </td>
                            <td>
                                <?= $item['product_category'] ?>
                            </td>
                            <td>
                              
                                <?= $item['weight'] ?>
                            </td><td>
                                <?= $item['unit'] ?>
                            </td><td>
                                <?= $item['selling_price_including_tax'] ?>
                            </td><td>
                                <?= $item['tax_amount'] ?>
                            </td>
                            <td>
                                <a href="<?= base_url('ProductsController/edit_product/').$item['product_id'] ?>" class="btn btn-success" onclick="edit_product()">Edit</a>
            </td>
            <td>
                                <a href="<?= base_url('ProductsController/delete_product/').$item['product_id'] ?>" class="btn btn-danger">Delete</a>
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



<!-- /footer content -->
<?php include(APPPATH . 'Views/Home/footer.php') ?>

<script>
 
function edit_product() 
  {
   
}
</script>