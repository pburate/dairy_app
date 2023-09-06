 <!-- menu profile quick info -->
 <body class="nav-md">
  <div class="container body text-black">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view ">
          <div class="navbar nav_title " style="border: 0;">
            <a href="index.html" class="site_title"><img src="./public/assets/build/images/logo 2.png" alt="logo" class="logo_img"><span>Dairy Products!</span></a>
          </div>

          <div class="clearfix"></div>

 
 <div class="profile clearfix">
              <div class="profile_pic">
                <img src="./public/assets/build/images/profile_img.jpeg" alt="profile" class="img-circle profile_img">
              </div>
              
              <div class="profile_info">
                <!-- <h2>Welcome,</h2> -->
                <h2 class="text-white" style="margin-left:-40px;">Welcome,<?php 
                 $user = \auth()->user();
                echo $user->username
                ?>
              </h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />