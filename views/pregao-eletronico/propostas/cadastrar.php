<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>Cadastramento de Proposta</h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Cadastramento de Proposta</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

<div class="row">
  <div class="col-xs-12">
  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Inclua a proposta</h3>
    </div>
    <div class="box-body">
        
        <?php if( isset($aviso) ){ echo $aviso; } ?>

        <form action="" method="post" onsubmit="return confirmaDados();">
            <?php $this->loadView("pregao-eletronico/propostas/form", array('itens' => $itens, 'show' => $show)); ?>  
        </form>
        
    </div>
    <!-- /.box-body -->
    
  </div>
  <!-- /.box -->
  </div>
</div>

</section>
<!-- /.content -->

<script type="text/javascript">
  
    function confirmaDados() 
    {

      var itens = "";
      var count = 1;

      $(".valor_unit").each(function(i, value){
          var valor_unit  = $(this).val();
          var valor_total = $(".valor_total")[i].value;
          var marca       = $(".marca")[i].value;
          var fabricante  = $(".fabricante")[i].value;
          var descricao   = $(".descricao")[i].value;
          
          if( valor_unit || valor_total || marca || fabricante || descricao ) {
              itens += "Item: " + count + " - Valor Total: R$" + valor_total + " - Marca: " + marca + "\n";
              count++;
          }
      });

      var msg = 'Confirme os dados abaixo:\nEmpresa: 77.777.777/00001-77 - SAO LUIZ ARMAZENS LTDA\nLogin: fornec2\n' + itens + '\n';

      msg += "Antes da abertura da sessão pública do Pregão Eletronico, certifique-se da entrega de sua proposta e comprove a exatidão dos dados, através da opção Pregão Eletrônico -> Proposta -> Consultar";

      if ( !confirm(msg) ) {
        return false;
      }

      return true;

    }  
  
  
</script>