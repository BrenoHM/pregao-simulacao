<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Simulação | Login</title>
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

  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/dist/css/estilo.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style type="text/css">
    body {
      height: auto;
    }
  </style>
</head>
<body>
<div class="login-box">

  <div class="col-md-6 text-center">
    <!--<h1>CGOV</h1>
    <h2>Soluções em Licitações</h2>-->
    <img src="<?php echo BASE_URL; ?>/dist/img/cgov-logo-header.png" alt="LOGOMARCA CGOV" />
  </div>

  <div class="col-md-6 login-box-body">
    <!--<p class="login-box-msg">MINISTÉRIO DO PLANEJAMENTO ORÇAMENTO E GESTÃO</p>-->

    <?php if(isset($aviso)) { echo $aviso; } ?>
    
    <form action="" method="post">
      <div class="form-group has-feedback">
        <select name="perfil" class="form-control" placeholder="Perfil">
          <option value="">-- Perfil --</option>
          <option value="Fornecedor">Fornecedor</option>
          <option value="Governo">Governo</option>
        </select>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="login" placeholder="* Login" required>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="senha" placeholder="* Senha" required>
      </div>
       <span>* Inserir dados fictícios</span>
      <div class="row">
        <div class="col-xs-8">
          Ambiente: Simulação
        </div>
        <!-- /.col -->
          <br />
        <div class="col-xs-4 pull-right">
            <button type="submit" name="formLogar" class="btn btn-primary btn-block btn-flat">ACESSAR</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo BASE_URL; ?>/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo BASE_URL; ?>/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<!--<script src="<?php echo BASE_URL; ?>/plugins/iCheck/icheck.min.js"></script>-->
<script>
  $(function () {
    /*$('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });*/
  });
</script>
</body>
</html>
