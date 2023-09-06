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
            <h2>Areas</h2>
            <div class="clearfix"></div>
          </div>
          <!-- <div class="mb-"></div> -->
          <div class="d-flex justify-content-end">
            <a href="<?= base_url('AreasController/add_areas')?>" class="btn btn-primary">Add Area</a>
          </div>
          <table id="myTable" class="">
            <thead>
              <tr class="headings">
                <th class="column-title">Areas</th>
                <!-- <th class="column-title">Date</th> -->
                <th class="column-title ">Action</th>
              </tr>
            </thead>

            <tbody>
            <?php foreach ($areas as $item) { ?>
              <tr class="odd pointer">
                           
                            <td>
                                <?= $item['areas_name'] ?>
                            </td>
                           
                            <td>
                                <a href="<?= base_url('AreasController/edit_areas/').$item['areas_id'] ?>" class="btn btn-success">Edit</a>
                                <a href="<?= base_url('AreasController/delete_areas/').$item['areas_id'] ?>" class="btn btn-danger" onclick="myFunction()">Delete</a>
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
  function myFunction() 
  {
  let text = "Do you really want to delete!";
  if (confirm(text) == true) {
    text = "You pressed OK!";
  } else {
    text = "You canceled!";
  }
 
}
</script>