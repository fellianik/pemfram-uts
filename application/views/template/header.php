<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/dashboard.css') ?>">

</head>

<body>

    <script src="<?php echo base_url('assets/bootstrap.bundle.min.js.download') ?>"></script>
    <script src="<?php echo base_url('assets/dashboard.js.download') ?>"></script>
    <script src="<?php echo base_url('assets/feather.min.js.download') ?>"></script>
    <script src="<?php echo base_url('assets/chart.umd.min.js.download') ?>"></script>


    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="<?php echo base_url("/index.php") ?>">Trans UPN</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- <input class="form-control form-control w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search"> -->
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="https://getbootstrap.com/docs/5.3/examples/dashboard/#">Sign out</a>
            </div>
        </div>
    </header>