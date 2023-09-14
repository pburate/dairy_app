<?php include(APPPATH . ('Views/Home/header.php')) ?>


<body class="login">

    <div>
        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                <form action="<?= url_to('register') ?>" method="post">
                    <?= csrf_field() ?>

                        <div id="register">
                            <section class="login_content">
                                <form>
                                    <h1>Create Account</h1>
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
                </div>
                                   <!-- Email -->
                    <div class="form-floating mb-2">
                    <!-- <label for=""><?//= lang('Auth.email') ?></label> -->
                        <input type="email" class="form-control" id="floatingEmailInput" name="email" inputmode="email" autocomplete="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" required />
                    </div>

                    <!-- Username -->
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="floatingUsernameInput" name="username" inputmode="text" autocomplete="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>" required />
                       </div>

                    <!-- Password -->
                    <div class="form-floating mb-2">
                        <input type="password" class="form-control" id="floatingPasswordInput" name="password" inputmode="text" autocomplete="new-password" placeholder="<?= lang('Auth.password') ?>" required />
                    </div>

                    <!-- Password (Again) -->
                    <div class="form-floating mb-5">
                        <input type="password" class="form-control" id="floatingPasswordConfirmInput" name="password_confirm" inputmode="text" autocomplete="new-password" placeholder="<?= lang('Auth.passwordConfirm') ?>" required />
                    </div>
                                    <div>
                                    <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.register') ?></button>
                                    </div>

                                    <div class="clearfix"></div>

                                    <div class="separator">
                                        <p class="change_link">Already a member ?
                                            <a href="<?= base_url('login') ?>" class="to_register"> Log in </a>
                                        </p>

                                        <div class="clearfix"></div>
                                        <br />

                                        <div>
                                            <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                                            <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 4 template.
                                                Privacy and Terms</p>
                                        </div>
                                    </div>
                                </form>
                            </section>
                        </div>

                    </form>
                </section>
            </div>


        </div>
    </div>


