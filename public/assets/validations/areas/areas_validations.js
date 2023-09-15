

$(document).ready(function () {
    var check = true;
 
    var area_regex = /^[A-Za-z ]{4,}$/;
 
     $("#area_name").on('input',function () {
        var area_name = $("#area_name").val().replace( /[^A-Za-z ]$/, '');
        $("#area_name").val(area_name);
         validate_areas();
        //   check1();
     });
     
     
 
     function validate_areas() {
         let area = $("#area_name").val();
         $('#name').on('input', function () {
          
        });


         if (!area.match(area_regex) || area.trim()==='') {
            $("#check_area_name").html("Please enter a valid area");
             check=false;
             return false;
         }
         else {
            $("#check_area_name").html('');
            check=true;
         }
    //  }

    //  function check1() {
        $.ajax({
            url: base_url+"AreasController/check_duplicate",
            method: "POST",
            data: {
                'area': area
            },
            success: function(response) {
                $("#check_area_name").html(response.status);
                // xhr.abort()
            //     check=false;
            //    return false;
            },
            error: function(xhr, textStatus, errorThrown) {
                alert('Error: ' + errorThrown);
            }
        });
        // check=false;
        // return false;
     }

 
 
 })
 
 function area_submit()
 {
 
 $('#form_submit_btn').click(function()
 {
    //  check=true;    
    // check_duplicate();
     validate_areas();

    
     
     if(check==true)
     {
         return true;
     }
     else
     {
         return false;
     }
     
 })
}


/**
 * <!DOCTYPE html>
<html>
<head>
    <title>Name Validation</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <form id="nameForm">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <span id="nameError" style="color: red;"></span>
        <br>
        <input type="submit" value="Submit">
    </form>

    <script>
        $(document).ready(function () {
            $('#name').on('input', function () {
                var sanitizedInput = $("#").val().replace(/[^A-Za-z], '');
                $("#").val(sanitizedInput);
            });

            $('#nameForm').submit(function (event) {
                event.preventDefault()
                var name = $('#name').val();
                if (name.trim() === '') {
                    $('#nameError').text('Name is required.');
                } else {
                    $('#nameError').text('');
                    // $('#nameForm').submit();
                }
            });
        });
    </script>
</body>
</html>

 */
 
 