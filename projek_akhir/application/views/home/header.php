<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Medicio Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('assets/img/favicon.png') ?>" rel="icon">
    <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/animate.css/animate.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets/css/style.css" rel="stylesheet') ?>">

    <!-- =======================================================
  * Template Name: Medicio - v4.7.0
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top" style="top:0px;">
        <div class="container d-flex align-items-center">

            <a href="index.html" class="logo "><img src="<?= base_url('assets/img/logo.png') ?>" alt=""></a>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

            <nav id="navbar" class="navbar order-last order-lg-0 me-auto">
                <ul>
                    <?php
                    if ($this->session->has_userdata('USERNAME')) { ?>
                        <li><a class="nav-link scrollto" href="<?= base_url('index.php/home/') ?>#profile">Profile</a></li>
                    <?php } ?>
                    <li><a class="nav-link scrollto" href="<?= base_url('index.php/home/') ?>#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('index.php/home/') ?>#services">Services</a></li>
                    <li class="dropdown"><a href="<?= base_url('index.php/home/') ?>#departments"><span>Medical Facility List</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#rs">Rumah Sakit</a></li>
                            <li><a href="#kg">Klinik Gigi</a></li>
                            <li><a href="#ku">Klinik Umum</a></li>
                            <li><a href="#ps">Puskesmas</a></li>
                            <li><a href="#ap">Apotik</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="<?= base_url('index.php/home/') ?>#about">About</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

            <!-- Logic PHP Login jadi Username -->
            <?php
            if ($this->session->has_userdata('USERNAME')) { ?>
                <!-- Pakai foto default disamping username -->
                <img style="border-radius: 100%; width:4%; margin-right: 3px;" src="<?= base_url('assets/img/testimonials/person.png') ?>" alt="">
                <?php
                echo '<p style="font-family: cursive; font-size:15px; margin:0px; padding: 0px;">'
                    . $this->session->userdata('USERNAME')
                    . '<br><span style="font-family: cursive; font-size: 10px;">' . $this->session->userdata('ROLE') . '</span>'
                    . '</p>';
                ?>
                <a href="<?= base_url('index.php/login/logout') ?>" class="appointment-btn scrollto">Logout</a>
            <?php
            } else {
            ?>
                <a href="<?= base_url('index.php/login/') ?>" class="appointment-btn scrollto">Sign in</a>
                <a href="<?= base_url('index.php/login/createAccount') ?>" class="appointment-btn scrollto">Sign up</a>
            <?php }
            ?>
            <!-- Logout Button -->
            <!-- End PHP Login jadi Username -->

        </div>
    </header>
    <!-- End Header -->