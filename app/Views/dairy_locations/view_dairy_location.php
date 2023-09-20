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
            <h2>Dairy Location</h2>
            <div class="clearfix"></div>
          </div>
          <!-- <div class="mb-"></div> -->
          <div class="d-flex justify-content-end">
            <a href="<?= base_url('DairyLocationsController/add_dairy_location')?>" class="btn btn-primary">Add Dairy Location</a>
          </div>
          <table id="myTable" class="">
            <thead>
              <tr class="headings">
                <th class="column-title">Location</th>
                <th class="column-title ">Edit</th>
                <th class="column-title ">Delete</th>
              </tr>
            </thead>
            <tbody>   
            <?php foreach ($location as $item) { ?>
              <tr class="odd pointer">
              <td>
                                <?= $item['location_name'] ?>
                            </td>    
                            <td>
                                <a href="<?= base_url('DairyLocationsController/edit_dairy_location/').$item['location_id'] ?>" class="btn btn-success">Edit</a>
            </td>
            <td>
                                <button class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
                            </td>

                            <!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Are you sure you want to delete this location ?
      </div>
      <div class="modal-footer">
          
        <a  href="<?= base_url('DairyLocationsController/delete_dairy_location/').$item['location_id'] ?>" class="btn btn-success" >Yes</a>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

              <?php } ?>
                        </tr>
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

