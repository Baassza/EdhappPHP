<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<nav class="navbar navbar-expand navbar-light bg-white" style='height:90px;'>
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= site_url('/admin/dashboard'); ?>">Edhapp</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?= site_url('/admin/course'); ?>">Course</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('/admin/payment'); ?>">Payment</a>
            </li>
        </ul>
    </div>
</nav>