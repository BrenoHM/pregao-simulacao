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
                <?php foreach( $items as $idItem => $item ): ?>
                  <tr>
                    <td class="text-center v-middle"><?php echo $idItem; ?></td>
                    <td class="v-middle"><?php echo $item['descricao']; ?></td>
                    <td class="text-center v-middle"><?php echo $item['tratamento_diferenciado']; ?></td>
                    <td class="text-center v-middle"><?php echo $item['aplicabilidade_decreto_7174']; ?></td>
                    <td class="text-center v-middle"><?php echo $item['aplic_margem_preferencia']; ?></td>
                    <td class="text-center v-middle"><?php echo $item['unid_fornec']; ?></td>
                    <td class="text-center v-middle"><?php echo $item['qtd_estimada']; ?></td>
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
                <?php endforeach; ?>
            </tbody>
          </table>
          
          <div class="col-md-12 mb-10 text-center" style="border: 1px solid #eee">
            <p>Declaro que estou ciente e concordo com as condições no edital e seus anexos, bem como de que cumpro plenamente os requisitos de habilitação definidos no edital.</p>
            <p class="text-center">
              <label><input type="radio" name="ciente_edital" value="SIM"> SIM</label>
              <label><input type="radio" name="ciente_edital" value="NÃO"> NÃO</label>
            </p>
          </div>

          <div class="col-md-12 mb-10 text-center" style="border: 1px solid #eee">
            <p>Declaro sob as penas da lei, que até a presente data inexistem fatos impeditivos para a minha habilitação no presente processo licitário, ciente da obrigatoriedade de declarar ocorrências posteriores.</p>
            <p class="text-center">
              <label><input type="radio" name="ciente_obrigatoriedade" value="SIM"> SIM</label>
              <label><input type="radio" name="ciente_obrigatoriedade" value="NÃO"> NÃO</label>
            </p>
          </div>

          <div class="col-md-12 mb-10 text-center" style="border: 1px solid #eee">
            <p>Declaro que estou ciente e concordo com as condições no edital e seus anexos, bem como de que cumpro plenamente os requisitos de habilitação definidos no edital</p>
            <p class="text-center">
              <label><input type="radio" name="ciente_edital" value="SIM"> SIM</label>
              <label><input type="radio" name="ciente_edital" value="NÃO"> NÃO</label>
            </p>
          </div>

          <div class="col-md-12 mb-10 text-center" style="border: 1px solid #eee">
            <p>Declaro que a proposta apresentada para essa licitação foi elaborada de maneira independente, de cordo com o que é estabelecido na Instrução Normativa Nº 2 de 16 de setembro de 2009 da SLTI/MP. <br>Clique <a href="#">aqui</a> para detalhamento dessa declaração.</p>
            <p class="text-center">
              <label><input type="radio" name="proposta_independente" value="SIM"> SIM</label>
              <label><input type="radio" name="proposta_independente" value="NÃO"> NÃO</label>
            </p>
          </div>

          <div class="col-md-12 mb-10" style="border: 1px solid #eee">
            <p>Obs: Os itens, cujo campo de proposta estiver em branco, não serão cadastrados, podendo ser encaminhados posteriormente.</p>
          </div>

          <br>
          <div class="row">
              <div class="form-group col-md-12 text-center">
                  <a href="<?php echo BASE_URL ?>/propostas/" class="btn btn-primary">Voltar</a>
                  <input type="submit" name="cadastrar" value="Incluir" class="btn btn-primary" />
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