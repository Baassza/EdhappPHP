<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edh app</title>
    <link rel="icon" href="<?= base_url(); ?>/public/favicon.ico" type="image/x-icon" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url(); ?>/public/src/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/public/src/css/login.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/public/src/css/font-awesome.all.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/public/src/css/font.css" />
</head>

<body>
    <div class='row min-vh-100 g-0'>
        <div class='main min-vh-100 col-12 d-flex justify-content-center align-items-center'>
            <h3>Edhapp</h3><br></br>
            <?php if ($this->session->flashdata('error')) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= $this->session->flashdata('error'); ?>
                </div>
            <?php } ?>
            <button onclick="gmail_login('<?= site_url('login/gmail_login'); ?>','<?= site_url('/'); ?>')" type='button' class=' gray d-flex gmail-login rounded-btn  justify-content-center align-items-center'><object data="<?= base_url(); ?>/public/src/images/google-icon.svg" width="20" height="20"></object>&nbsp;&nbsp;Continue with google</button>
            <br></br>
            <p class="gray">or Sign in with email</p>
            <form class="login-form" method='post' action="<?= site_url('login/auth'); ?>">
                <div class="form-group login-form-group">
                    <label class="gray">Email</label>
                    <input name="email" type="email" class="gray form-control" id="Email" required />
                </div>
                <div class="form-group login-form-group">
                    <label class="gray">Password</label>
                    <div class='d-flex'>
                        <input name="password" type="password" class="gray form-control" id="password" required />
                        <button type="button" onclick="passhide(this)" state="password" class='d-flex hide-password justify-content-end'>
                            <i class='fa fa-eye'></i>
                        </button>
                    </div>
                </div>
                <div>
                    <div class="form-check d-flex  justify-content-between ">
                        <div>
                            <input name="remember" type="checkbox" class="form-check-input" id="Checkbox" />
                            <label class="gray form-check-label">Remember me</label>
                        </div>
                        <a href='#' class="gray">Forgot password?</a>
                    </div>
                </div>
                <br></br>
                <button type="submit" class='login-btn rounded-btn'>Login</button>
            </form>
            <br></br>
            <a href='<?= site_url('register/'); ?>' class="gray" id="register-link">Create an account</a>
        </div>
    </div>
</body>
<script src="<?= base_url(); ?>/public/src/js/firebase-app.js"></script>
<script src="<?= base_url(); ?>/public/src/js/firebase-auth.js"></script>
<script src="<?= base_url(); ?>/public/src/js/register.js"></script>
</html>