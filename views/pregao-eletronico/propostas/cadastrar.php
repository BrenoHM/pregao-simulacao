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

        <form action="" method="post" enctype="multipart/form-data">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th class="text-center v-middle">Item</th>
                <th class="v-middle">Descricao</th>
                <th class="text-center v-middle">Tratamento<br>Diferenciado</th>
                <th class="text-center v-middle">Aplicabilidade<br>Decreto 7174</th>
                <th class="text-center v-middle">Aplic. Margem<br>Preferencia</th>
                <th class="text-center v-middle">Unid<br>Fornec.</th>
                <th class="text-center v-middle">Qtd.<br>Estimada</th>
                <th class="text-center">&nbsp;</th>
                <th class="text-center">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                  <td class="text-center v-middle">1</td>
                  <td class="v-middle">PAPEL BOBINADO</td>
                  <td class="text-center v-middle">-</td>
                  <td class="text-center v-middle">Não</td>
                  <td class="text-center v-middle">Não</td>
                  <td class="text-center v-middle">ROLO 30,00 M</td>
                  <td class="text-center v-middle">100</td>
                  <td class="text-center v-middle"><strong>Valor Unit.(R$)</strong><br><input type="text" name=""></td>
                  <td class="text-center v-middle"><strong>Valor Ttoal(R$)</strong><br><input type="text" name=""></td>
                </tr>
                <tr>
                  <td class="text-center v-middle">&nbsp;</td>
                  <td class="v-middle" colspan="4"><strong>Marca</strong><br><input type="text" name="" class="form-control"></td>
                  <td class="v-middle" colspan="4"><strong>Fabricante</strong><br><input type="text" name="" class="form-control"></td>
                </tr>
                <tr>
                  <td class="text-center v-middle">&nbsp;</td>
                  <td class="v-middle" colspan="8"><strong>Descricao detalhada do objeto ofertado</strong><br><textarea class="form-control" rows="5"></textarea></td>
                </tr>
                <tr>
                  <td class="text-center v-middle">&nbsp;</td>
                  <td class="v-middle" colspan="8"><strong>Caracteres restantes: </strong><input type="text" name="" value="5000"></td>
                </tr>
            </tbody>
          </table>
          <div class="row">
                <div class="form-group col-md-12 text-center">
                    <input type="submit" name="cadastrar" value="OK" class="btn btn-primary" />
                    <a href="<?php echo BASE_URL ?>/propostas/cadastrar" class="btn btn-primary">Limpar</a>
                    <a href="<?php echo BASE_URL ?>/propostas/" class="btn btn-primary">Voltar</a>
                </div>
          </div>
        </form>
        
        <?php //$this->loadView("clientes/form", array()); ?>
      
    </div>
    <!-- /.box-body -->
    
  </div>
  <!-- /.box -->
</div>
</div>

</section>
<!-- /.content -->