<?php
  if(!$this->session->has_userdata('USERNAME')){
    redirect(base_url().'index.php/home');
  }
  if($this->session->userdata('ROLE') == 'public'){
    redirect(base_url().'index.php/home');
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('plugins/fontawesome-free/css/all.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('dist/css/adminlte.min.css') ?>">
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?=base_url('index.php/admin/faskes')?>" class="nav-link">Faskes</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?=base_url('index.php/admin/komentar')?>" class="nav-link">Komentar</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?=base_url('index.php/admin/user')?>" class="nav-link">User</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?=base_url('index.php/admin/kecamatan')?>" class="nav-link">Kecamatan</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
      </ul>
    </nav>
    <!-- /.navbar -->