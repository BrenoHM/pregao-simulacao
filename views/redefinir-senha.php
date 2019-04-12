<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administrador | Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <link rel="shortcut icon" href="<?php echo BASE_URL_SITE; ?>/favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?php echo BASE_URL_SITE; ?>/favicon.ico" type="image/x-icon">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/dist/css/style-menu.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style type="text/css">
    .login-page {
/*      background: url('<?php //echo BASE_URL; ?>/dist/img/matrix.jpg');*/
      background-position: top center;
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
    }
    body {
      height: auto;
    }
  </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Redefinir Senha</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Digite sua nova senha!</p>

    <?php if(isset($aviso)) { echo $aviso; } ?>
    
    <?php if( $codigoValido ): ?>
        <form action="" method="post">
          <div class="form-group has-feedback">
              <input type="password" class="form-control" name="senUsu" placeholder="Nova Senha">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
              <input type="password" class="form-control" name="senha2" placeholder="Repita a Senha">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>  
          <div class="row">
            <div class="col-xs-8">
              <a href="<?php echo $tipoUsuario == 'admin' ? BASE_URL . "/login" : BASE_URL . "/login/atletica"; ?>">Entrar</a>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" name="formRedefinir" class="btn btn-primary btn-block btn-flat">Enviar</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
    <?php endif; ?>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo BASE_URL; ?>/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo BASE_URL; ?>/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
