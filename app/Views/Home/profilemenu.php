 <!-- menu profile quick info -->
 <body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Dairy Products!</span></a>
          </div>

          <div class="clearfix"></div>

 
 <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?//= ?>" alt="profile" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <h2>Welcome,</h2>
                <h3><?php  $user = \auth()->user();
                echo $user->username
                ?>
              </h3>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />