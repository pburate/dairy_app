<?php include(APPPATH.('Views/Home/header.php')) ?>

  <body class="login">
    
    <div>
    
    <?php if (session('error') !== null) : ?>
                    <div class="alert alert-danger" role="alert"><?= session('error') ?></div>
                <?php elseif (session('errors') !== null) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?php if (is_array(session('errors'))) : ?>
                            <?php foreach (session('errors') as $error) : ?>
                                <?= $error ?>
                                <br>
                            <?php endforeach ?>
                        <?php else : ?>
                            <?= session('errors') ?>
                        <?php endif ?>
                    </div>
                <?php endif ?>

                <?php if (session('message') !== null) : ?>
                <div class="alert alert-success" role="alert"><?= session('message') ?></div>
                <?php endif ?>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
          <form action="<?= url_to('login') ?>" method="post">
                    <?= csrf_field() ?>
              <h1>Login</h1>
              <div>
                <input type="text" class="form-control" placeholder="Email Address"  name="email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password"  name="password" required="" />
              </div>
              <div>
                
                <button type="submit" class="btn btn-outline-info">Log in</button>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                 <a href="<?= url_to('register') ?>"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />
<!-- 
                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 4 template. Privacy and Terms</p>
                </div> -->
              </div>
            </form>
          </section>
        </div>

       
      </div>
    </div>
  </body>
</html>
