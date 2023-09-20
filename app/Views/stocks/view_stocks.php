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

  <?php $session = \Config\Services::session();
   if($session->getFlashdata('status')):
?>

<div class="alert alert-success" id="alert">
       <?= $session->getFlashdata('status')?> 
</div>
<?php endif;?>
          <div class="x_title">
            <h2>Products</h2>
            <div class="clearfix"></div>
          </div>
          <!-- <div class="mb-"></div> -->
          <div class="d-flex justify-content-end">
            <a href="<?= base_url('StocksController/add_stocks')?>" class="btn btn-primary">Add Stocks</a>
          </div>
          <table id="myTable" class="">
            <thead>
              <tr class="headings">
                <th class="column-title">Stocks</th>
                <th class="column-title ">Edit</th>
                <th class="column-title ">Delete</th>

              </tr>
            </thead>

            <tbody>   
           
                      
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

setTimeout(() => {
  const alert = document.getElementById('alert');
  alert.style.display = 'none';
}, 2000);
</script>

