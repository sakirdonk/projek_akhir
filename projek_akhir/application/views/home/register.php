<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url('plugins/fontawesome-free/css/all.min.css')?>">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?=base_url('plugins/icheck-bootstrap/icheck-bootstrap.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url('dist/css/adminlte.min.css')?>">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
        <a href="index.html" class="logo d-flex justify-content-center mb-3"><img src="<?=base_url('assets/img/logo.png')?>" style="width:80%;" alt=""></a>
      <p class="login-box-msg">Sign up to create your account</p>

      <?= form_open(base_url().'index.php/login/register')?>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" id="email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="username" class="form-control" placeholder="Username" id="username" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" id="password" name="password">
          <input type="password" class="form-control" value="public" id="role" name="role" hidden>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <div class="col-4">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
            </div>
          </div>
          <!-- /.col -->
        </div>
        <?php form_close()?>

      <p class="mb-0 mt-4">
        <a href="<?=base_url('index.php/login')?>" class="text-center">Click here to Login if you have an Account</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
</body>
</html>