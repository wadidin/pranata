<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE HTML>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- TITLE -->  
<title>PORTAL PI | Login System</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link href="<?php echo base_url('assets/favicon.png'); ?>" type="image/x-icon" rel="shortcut icon">
 
  <div class="login-box">

  <div class="login-logo">
    <a href="<?php echo base_url('belakang/auth/masuk/'); ?>"><b>LOGIN </b>PORTAL PI</a>
  </div>
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/belakang/frameworks/bootstrap/css/bootstrap.min.css'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/belakang/frameworks/font-awesome/css/font-awesome.min.css'); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/belakang/frameworks/ionicons/css/ionicons.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/belakang/frameworks/dist/css/AdminLTE.min.css'); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets/belakang/plugins/iCheck/square/blue.css'); ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
  <body class="hold-transition login-page">

  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Masuk ke Dashboard <b>WEB PORTAL PI</b></p>

    <form action="<?php echo base_url().'belakang/auth/cek_user/'; ?>" method="post">

          <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Email atau username" required autofocus>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password" required autofocus>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      
      <div class="row">
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">MASUK</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    
  </div>
  <!-- /.login-box-body -->

    <hr>

    <div class="row">
      <div class="col-xs-6">
        <a href="<?php echo base_url(); ?>"> &nbsp; &nbsp; &nbsp; &nbsp;  ← Kembali ke <b>WEB PI</b></a>    
      </div>

      <div class="col-xs-6">      
        <a href="<?php echo base_url('belakang/auth/lupa/'); ?>">Kamu Lupa <b>Password</b> ?</a><br>   
      </div>
    </div>

    <hr>

</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('assets/belakang/plugins/jQuery/jquery-2.2.3.min.js'); ?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('assets/belakang/frameworks/bootstrap/js/bootstrap.min.js'); ?>"></script>
<!-- Select2 -->
<script src="<?php echo base_url('assets/belakang/frameworks/plugins/select2/select2.full.min.js'); ?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/belakang/plugins/iCheck/icheck.min.js'); ?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
<!-- Google Recaptcha -->
<script src='https://www.google.com/recaptcha/api.js'></script>

</body>
</html>


