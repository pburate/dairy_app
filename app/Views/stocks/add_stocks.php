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
            <h2>Add Stock</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
           
            <form class="form form-label" name="myform"
                            action="<?= base_url('StocksController/store_stocks') ?>"
                            method="post">
               <div class="row">
                  <!-- stock date -->
              <div class="col">
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align float-start" for="stock_date">
                  Stock Date</label>
                </label>
                <div class="col-md-8 col-sm-8">
                <input type="datetime-local" class="form-control form-control-sm float-end" id="stock_date" name="stock_date[]" rows="3" placeholder="Stock Date">
                </div>
              </div>
              </div>
             
                <!-- dairy location-->
                <div class="col">
                <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align float-start" for="location_name">
                  Dairy Location</label><span class="required"></span>
                </label>
                <div class="col-md-8 col-sm-8">
                <select class="form-select form-select-sm float-end" name="location_name" id="location_name"
                    required>
                    <option>Select Location</option>
                    <?php foreach($locations as $row):?>
                    <option id="<?= $row["location_id"]?>"><?= $row["location_name"]?></option>
                    <?php endforeach;?> 
                  </select>
                       <input type="hidden" name="location_id[]" id="location_id">   
                </div>
              </div>
              </div>
              </div>
            
          
              <!-- product name -->
              <div class="row">
               <div class="col">
               <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align float-start" for="product_name">
                  Product Name</label><span class="required"></span>
                </label>
                <div class="col-md-8 col-sm-8">
                <select class="form-select form-select-sm float-end"  id="product_name"
                    required>
                    <option>Select Product</option>
                    <?php foreach($products as $row):?>
                    <option id="<?= $row["product_id"]?>"><?= $row["product_name"]?></option>
                    <?php endforeach;?> 
                  </select>
                 
                  <input type="text" name="product_id" id="product_id"> 
                  <input type="hidden" name="p_name" id="p_name"> 
                    
                </div>
              </div>
               </div>
               <div class="col" style="margin-left:-70px;"> 
                 <a class="btn btn-success text-light" id="add_more"> + </a></div>
                    </div>
                  
<br><br>
<hr>
<br><br>

<!--  stock table -->
          <table id="myTable">
            <thead>
              <tr class="headings">
                <th class="column-title text-center">Product Name</th>
                <th class="text-center"> Inward Quantity</th>
                <th class="text-center"> Outward Quantity</th>
                <th class="text-center"> Stock Quantity</th>
                <th class="text-center"> Edit</th>
                <th class="column-title text-center">Delete</th>
              </tr>
            </thead>
            <tbody class="tablebody">   
            </tbody>
          </table>
          <!-- </div> -->
        </div>
      </div>
    </div>
  </div>
  
</div>

              <!-- submit/cancel -->

              <div class="ln_solid"></div>
              <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3">
                  <button type="submit" class="btn btn-success" id="form_submit_btn">Submit</button>
                  <a href="<?= base_url('StocksController') ?>" class="btn btn-danger">Cancel</a>
                </div>
              </div>
              </div>
              </form>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- /page content -->
<!-- /footer content -->
<?php include(APPPATH . 'Views/Home/footer.php') ?>
<script>

var i = 1;
$("#add_more").click(function(){
  var p_name = $("#p_name").val();
  var p_id =$("#product_id").val();
    $(".tablebody").append(
       "<tr>\
         <td class='text-center prduct_name-"+ i +"'><input type='text' name='p_id[]' id='p_id' value='"+p_id+"'>"+p_name+"</td>\
         <td class='text-center'><input type='text' class='inward_quantity-"+ i +"' name='inward_quantity[]'></td>\
         <td class='text-center'><input type='text' class='outward_quantity-"+ i +"' name='outward_quantity[]'></td>\
         <td class='text-center'><input type='text' class='stock_quantity-"+i+"' name='stock_quantity[]'></td>\
         <td class='text-center edit-"+i+"'><a href=''><i class='fa fa-pencil fs-4 text-success'></i></a></td>\
         <td class='text-center delete-"+ i +"'><a href=''><i class='fa fa-trash fs-4 text-danger'></i></a></td>\
       </tr>"
    );
    i++;
});

  $("#product_name").change(function(){
  var a = $(this).children(":selected").attr("id");
   var product_id =$("#product_id").val(a);
  });

  $("#location_name").change(function(){
  var a = $(this).children(":selected").attr("id");
   var location_id =$("#location_id").val(a);
  });

    $("#inward_quantity").keyup(function(){
      // alert("ghtf0");
        var inward_quantity = parseFloat($("#inward_quantity").val());
        var outward_quantity = parseFloat($("#outward_quantity").val());
        var total_stock = inward_quantity + outward_quantity;
        var stock_quantity = $("#stock_quantity").val(total_stock);
     });

     $("#outward_quantity").keyup(function(){
      // alert("ghtf0");
        var inward_quantity = parseFloat($("#inward_quantity").val());
        var outward_quantity = parseFloat($("#outward_quantity").val());
        var total_stock = inward_quantity + outward_quantity;
        var stock_quantity = $("#stock_quantity").val(total_stock);
     });
     $("#product_name").change(function(){
     var product_name = $("#product_name").children(":selected").val();
     $("#p_name").val(product_name);
     });

    //  var p_name = $("#p_name").val();
    //  alert(p_name);




// window.addEventListener("load", function() {
//     var now = new Date();
//     var utcString = now.toISOString().substring(0,19);
//     var year = now.getFullYear();
//     var month = now.getMonth() + 1;
//     var day = now.getDate();
//     var hour = now.getHours();
//     var minute = now.getMinutes();
//     var second = now.getSeconds();
//     var localDatetime = year + "-" +
//                       (month < 10 ? "0" + month.toString() : month) + "-" +
//                       (day < 10 ? "0" + day.toString() : day) + "T" +
//                       (hour < 10 ? "0" + hour.toString() : hour) + ":" +
//                       (minute < 10 ? "0" + minute.toString() : minute) +
//                       utcString.substring(16,19);
//     var datetimeField = document.getElementById("stock_date");
//     datetimeField.value = localDatetime;
// });
</script>
