<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" href="<?= base_url(); ?>/public/src/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= base_url(); ?>/public/src/css/register.css">
<link rel="stylesheet" href="<?= base_url(); ?>/public/src/css/font.css" />
<link rel="stylesheet" href="<?= base_url(); ?>/public/src/css/font-awesome.all.min.css" />

<head>
    <title>Edh app</title>
    <link rel="icon" href="<?php echo base_url(); ?>/public/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="<?php echo base_url(); ?>/public/favicon.ico" type="image/x-icon" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div>
        <nav>
            <div class="nav-wrapper">
                <a href='<?= site_url('login/') ?>' class="brand-logo gray">
                    <i class="fa fa-arrow-left"></i>
                    Back page
                </a>
            </div>
        </nav>
        <div class='main  col g-0 d-flex align-items-center justify-content-center'>
            <form class='register-form' method="post" action="<?= site_url('register/setuser') ?>">
                <?php if (validation_errors()) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                <?php } ?>
                <h3 class="gray">Create Account</h3>
                <div class="form-group login-form-group">
                    <label class="gray">Name</label>
                    <input name="firstname" type="text" class="gray form-control" id="Firstname" required />
                </div>
                <div class="form-group login-form-group">
                    <label class="gray">Lastname</label>
                    <input name="lastname" type="text" class="gray form-control" id="Lastname" required />
                </div>
                <div class="form-group login-form-group">
                    <label class="gray">Email</label>
                    <input name="email" type="email" class="gray form-control" id="Email" required />
                </div>
                <div class="form-group login-form-group">
                    <label class="gray">Password</label>
                    <div class='d-flex'>
                        <input name="password" type="password" class="gray form-control" id="password" required />
                        <button type="button" onclick="passhide(this)" state="password" class='d-flex hide-password justify-content-end'><i id="password-hide" class="fa fa-eye"></i></button>
                    </div>
                </div>
                <div class="form-group login-form-group">
                    <label class="gray">Re-Password</label>
                    <div class='d-flex'>
                        <input name="re-password" type="password" class="gray  form-control" id="re-password" required />
                        <button state="re-password" type="button" onclick="passhide(this)" class='d-flex hide-password justify-content-end'><i id="re-password-hide" class="fa fa-eye"></i></button>
                    </div>
                </div>
                <button type="submit" class='register-btn'>Create</button>
            </form>
        </div>
    </div>
</body>
<script src="<?= base_url(); ?>/public/src/js/register.js"></script>

</html>