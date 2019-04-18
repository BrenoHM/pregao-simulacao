<!DOCTYPE html>
<html
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administrador</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <link rel="shortcut icon" href="<?php echo BASE_URL_SITE; ?>/favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?php echo BASE_URL_SITE; ?>/favicon.ico" type="image/x-icon">
  
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/iCheck/flat/blue.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/select2/select2.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/datatables/dataTables.bootstrap.css">
  <!-- Croopie -->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/croppie/croppie.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/dist/css/AdminLTE.min.css">
  <!-- System style -->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/dist/css/estilo.css">
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  
  <!-- jQuery 2.2.3 -->
  <script src="<?php echo BASE_URL; ?>/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <?php
    $usuario = Sessao::getSessionNivel() == 'admin' ? new Usuario() : new UsuarioAtletica();
    $gravata = $usuario->getGravata(Sessao::getSessionEmail(), 160);
  ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">

    <img src="<?php echo BASE_URL; ?>/dist/img/cgov-logo-header.png" alt="LOGOMARCA CGOV" height="90" />

    <!-- Logo -->
    <!--<a href="<?php //echo BASE_URL; ?>/" class="logo">-->
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!--<span class="logo-mini"><b><?php //echo Sessao::getSessionNivel() == "admin" ? 'ADM' : 'ATL'; ?></b></span>-->
      <!-- logo for regular state and mobile devices -->
      <!--<span class="logo-lg"><b><?php //echo $_SESSION['usuario']['login']; ?></b></span>-->
    <!--</a>-->
    <!-- Header Navbar: style can be found in header.less -->
    
      <!-- Sidebar toggle button-->
      <!--<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>-->

  </header>

  <ul class="menu">
      <li><a href="<?php echo BASE_URL ?>/">Home</a></li>
          <li><a href="#">Serviços do Fornecedor</a>
              <ul>
                  <li><a href="<?php echo BASE_URL ?>/pregao-eletronico">Pregão Eletrônico</a></li>
              </ul>
          </li>
      <li><a href="<?php echo BASE_URL ?>/logout">Sair</a></li>
  </ul>
      

  <!-- =============================================== -->

  <?php
    /*if( Sessao::getSessionNivel() == 'atletica' ){
        $dadoUsuario = $usuario->getId(Sessao::getSessionId());
        $viewData['idAtletica'] = $dadoUsuario['idAtletica'];
    }
    $viewData['gravata'] = $gravata;*/
    //$this->loadView("menu", $viewData); 
  ?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      
      <?php $this->loadViewInTemplate($viewName, $viewData); ?>
    
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Versão</b> 1.0.0
    </div>
    <strong>Copyright &copy; <?php echo date("Y"); ?> <a href="http://meeweb.com.br" target="_blank">Meeweb</a>.</strong> Todos os direitos reservados.
  </footer>

  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->


<!-- DataTables -->
<script src="<?php echo BASE_URL; ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo BASE_URL; ?>/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- Masked Input -->
<script src="<?php echo BASE_URL; ?>/plugins/maskedinput/jquery.mask.min.js"></script>
<!-- nicEdit -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>/plugins/nicEdit/nicEdit.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo BASE_URL; ?>/bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?php echo BASE_URL; ?>/plugins/select2/select2.full.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo BASE_URL; ?>/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo BASE_URL; ?>/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo BASE_URL; ?>/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo BASE_URL; ?>/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo BASE_URL; ?>/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo BASE_URL; ?>/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo BASE_URL; ?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo BASE_URL; ?>/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo BASE_URL; ?>/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo BASE_URL; ?>/dist/js/app.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?php echo BASE_URL; ?>/dist/js/demo.js"></script>
<!-- CK Editor -->
<!--<script src="<?php //echo BASE_URL; ?>/plugins/ckeditor/ckeditor.js"></script>
<script src="<?php //echo BASE_URL; ?>/plugins/ckfinder/ckfinder.js"></script>-->

<!-- Croopie -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>/plugins/croppie/croppie.js"></script>

<script>
    
    $(function(){
        /*$("#checkAll").change(function(){
            if ($(this).is(':checked')) {
                $('input:checkbox').not($(this)).prop('checked',true);
            } else {
                $('input:checkbox').prop('checked', false);
            }       
        });*/
    });
    
    /*function removeFoto(obj, controller){
        if(confirm("Deseja realmente excluir este item?")){

            var url = '<?php //echo BASE_URL; ?>';

            var element = obj;
            $.ajax({
                url: url + controller,
                type: 'POST',
                data: {foto:element.data('foto')},
                //dataType: 'json',
                //contentType: "application/json",
                beforeSend: function() {},
                success: function(data) {
                    element.parent().remove();
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log('ERROR', textStatus, errorThrown);
                }
            });
        }
    }
    */
</script>
</body>
</html>
