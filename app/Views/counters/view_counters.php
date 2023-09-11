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
            <h2>Counters</h2>
            <div class="clearfix"></div>
          </div>
          <!-- <div class="mb-"></div> -->
          <div class="d-flex justify-content-end">
            <a href="<?= base_url('CountersController/add_counters')?>" class="btn btn-primary">Add Counter</a>
          </div>
          <table id="myTable" class="">
            <thead>
              <tr class="headings">
                <th class="column-title">Counters</th>
                <th class="column-title">Counters Value</th>
                <th class="column-title">Edit</th>
              </tr>
            </thead>

            <tbody>
              <?php foreach ($counters as $item) { ?>
                <tr class="odd pointer">

                  <td>
                    <?= $item['counter_name'] ?>
                  </td>
                  <td>
                    <?= $item['counter_value'] ?>
                  </td>

                  <td>
                    <a href="<?= base_url('CountersController/edit_counters/') . $item['counter_info_id'] ?>"
                      class="btn btn-success">Edit</a>
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

