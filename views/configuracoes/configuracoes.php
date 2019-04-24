<section class="content-header">
    <h1>Configurações</h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo BASE_URL ?>/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Configurações</li>
    </ol>
</section>
<section class="content">
	<div class="row">		

		<form action="" method="post">
			<div class="col-md-4">
				<?php if( isset($aviso) ){ echo $aviso; } ?>
				<div class="form-group">
					<label>Situação Lance</label>
					<select name="situacaoLance" class="form-control" required="required">
						<option>Selecione</option>
						<option value="A" <?php echo $situacaoLance == 'A' ? 'selected' : '' ?>>Aberto</option>
						<option value="AI" <?php echo $situacaoLance == 'AI' ? 'selected' : '' ?>>Aviso de Iminência</option>
						<option value="EA" <?php echo $situacaoLance == 'EA' ? 'selected' : '' ?>>Encerramento Aleatório</option>
					</select>
				</div>
				<div class="form-group">
					<a href="<?php echo BASE_URL ?>/pregao-eletronico" class="btn btn-primary">Voltar</a>
					<input type="submit" name="salvar" class="btn btn-primary">
				</div>
			</div>
		</form>	
	</div>
</section>