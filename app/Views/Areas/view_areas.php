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
                    <a href="<?= base_url('AreasController/edit_areas/') . $item['areas_id'] ?>"
                      class="btn btn-success">Edit</a>
                    <button type="button" class="btn btn-danger" id="delete_btn" value="<?= $item['areas_id'] ?>">
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


<!-- Areas Delete Model -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Areas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="hidden_delete_id">
        Do you want to delete ?
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary areas_yes_btn" data-dismiss="modal">Yes</button>
      </div>
    </div>
  </div>
</div>



<!-- /footer content -->
<?php include(APPPATH . 'Views/Home/footer.php') ?>


<script>

  //  to delee the data and 
  $(document).ready(function () {
    $(document).on('click', '#delete_btn', function () {
      var areas_id = $(this).closest('tr').find('#delete_btn').val();
      //  alert(areas_id)
      $('#hidden_delete_id').val(areas_id);
      $('#deleteModal').modal('show');
    });
  });
  

  $(document).on('click', '.areas_yes_btn', function () {
    var areas_id = $('#hidden_delete_id').val();
    $.ajax({
      url: "<?= base_url('AreasController/delete_areas') ?>",
      method: "POST",
      data: {
        'areas_id': areas_id
      },
      success: function (response) {
        location.reload();
      }
    })
  });

</script>