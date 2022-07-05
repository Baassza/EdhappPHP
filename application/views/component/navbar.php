<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<nav class="navbar navbar-expand navbar-light bg-white" style='height:90px;'>
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= site_url('/'); ?>">Edhapp</a>
        <ul class="navbar-nav ">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Course</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Content</a>
            </li>
        </ul>
        <ul class="d-flex navbar-nav  mb-2 mb-lg-0 ">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= site_url('/login/logout'); ?>">Log out</a>
            </li>
        </ul>
    </div>
</nav>