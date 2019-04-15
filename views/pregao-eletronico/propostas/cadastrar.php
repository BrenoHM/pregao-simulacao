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

  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Inclua a proposta</h3>
    </div>
    <div class="box-body">
        
        <?php if( isset($aviso) ){ echo $aviso; } ?>
        
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-md-4">
                  <label for="uf">Uf</label>
                  <select name="uf" required="" class="form-control">
                    <option value="">Selecione</option>
                    <option value="MG">MG</option>
                  </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-1">
                  <label for="codigo">Cod. da UASG (Unid. de Compra)</label>
                  <input type="text" id="codigo" class="form-control" name="codigo" placeholder="Código" value="<?php if( isset($evento['nome']) ) { echo $evento['nome']; } ?>" required="required">
                </div>
                <div class="col-md-1 text-center margin-left-right-0">OU</div>
                <div class="form-group col-md-2">
                  <label for="orgao">Órgão</label>
                  <select name="orgao" multiple class="form-control">
                    <option value="MIN. DO PLANEJAMENTO ORCAMENTO E GESTAO/DF">MIN. DO PLANEJAMENTO ORCAMENTO E GESTAO/DF</option>
                  </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                  <label for="num_pregao">Número Pregão</label>
                  <input type="text" id="num_pregao" class="form-control" name="num_pregao" placeholder="Preencha número e ano. Ex: 102005" value="<?php if( isset($evento['num_pregao']) ) { echo $evento['num_pregao']; } ?>" required="required">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                  <label for="data_envio_proposta">Data de Início do envio da proposta</label>
                  <input type="date" id="data_envio_proposta" class="form-control" name="data_envio_proposta" placeholder="" value="<?php if( isset($evento['data_envio_proposta']) ) { echo $evento['data_envio_proposta']; } ?>" required="required">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                  <label for="data_sessao_publica">Data de início da Sessão Pública</label>
                  <input type="date" id="data_sessao_publica" class="form-control" name="data_sessao_publica" placeholder="" value="<?php if( isset($evento['data_sessao_publica']) ) { echo $evento['data_sessao_publica']; } ?>" required="required">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
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

</section>
<!-- /.content -->