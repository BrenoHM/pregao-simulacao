<section class="content-header">
    <h1>Lances</h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo BASE_URL ?>/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Lances</li>
    </ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<!--<div class="row text-center mb-10">
				<a href="<?php //echo BASE_URL ?>/propostas/cadastrar" class="btn btn-primary">Nova Proposta</a>
			</div>-->
			<div class="box">

				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Item</th>
							<th>Descrição</th>
							<th>Situação</th>
							<th>Seu Último<br>Lance</th>
							<th>Melhor Lance</th>
							<th>Lance</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($itens as $idItem => $item): 
								if( isset($lances[$idItem]) ) {

									$search        = array('.', ',');
                    				$replace       = array('', '.');

									if( (str_replace($search, $replace, $lances[$idItem]['ultimo']) <= str_replace($search, $replace, $lances[$idItem]['melhor'])) && !$_SESSION['lanceIgual'][$idItem] ){
										$icone = "<i class='fa fa-thumbs-o-up' aria-hidden='true' style='color: green;'></i>";
									}else if( $_SESSION['lanceIgual'][$idItem] ){
										$icone = "<i class='fa fa-hand-paper-o' aria-hidden='true' style='color: yellow;'></i>";
									}
									else{
										$icone = "<i class='fa fa-thumbs-o-down' aria-hidden='true' style='color: red;'></i>";
									}

								}else{
									$icone = "<i class='fa fa-thumbs-o-down' aria-hidden='true' style='color: red;'></i>";
								}
							?>
							
							<tr>
								<td><?php echo $icone; ?> <?php echo $idItem; ?></td>
								<td><?php echo $item['descricao']; ?></td>
								<td><?php echo $situacaoLance; ?></td>
								<td><?php 
									if (isset($lances[$idItem]['ultimo'])) { echo $lances[$idItem]['ultimo']; } else if(isset($proposta['itens'][$idItem]['valor_total'])) { echo number_format($proposta['itens'][$idItem]['valor_total'], 2, ',', '.'); } else { echo '-'; } ?></td>
								<td><?php echo isset($lances[$idItem]['melhor']) ? $lances[$idItem]['melhor'] : '-'; ?></td>
								<td>(R$) <form action="" id="formulario" method="post" style="display: inline;">
											<input type="text" name="lance" class="money" required="required">
											<input type="submit" name="cadastrar" value="Enviar">
											<input type="hidden" name="item" value="<?php echo $idItem; ?>" />
											<input type="hidden" name="idProposta" value="<?php echo $idProposta; ?>">
										</form>
								</td>
							</tr>
							
						<?php endforeach; ?>
					</tbody>
				</table>
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-4 text-center"><i class="fa fa-2x fa-thumbs-o-up" aria-hidden="true" style="color: green;"></i> Seu lance é o vencedor.</div>
						<div class="col-md-4 text-center"><i class="fa fa-2x fa-thumbs-o-down" aria-hidden="true" style="color: red;"></i> Seu lance NÃO é o vencedor.</div>
						<div class="col-md-4 text-center"><i class="fa fa-2x fa-hand-paper-o" aria-hidden="true" style="color: yellow;"></i> Seu lance está EMPATADO.</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row text-center">
		<a href="<?php echo BASE_URL ?>/lances/" class="btn btn-primary">Voltar</a>
		<form action="" method="post" style="display: inline;">
			<input type="submit" name="reiniciarLances" class="btn btn-primary" value="Reiniciar Lances" onclick="return confirm('Deseja realmente Reiniciar este lance')" />
		</form>
	</div>
</section>

<script type="text/javascript">

$(function(){

	//REFRESH NA PÁGINA EM 15 SEGUNDOS
	setTimeout(function(){ 
		window.location.href = window.location.href; 
	}, 16000);

	$('#formulario').on('submit', function(){

		var valor = $(this).find('.money').val();
		var msg   = 'Confirma o lance no valor de R$ '+valor+'?\nLembre-se que deve ser informado o valor total do item.';

		if ( !confirm(msg) ) {
	        return false;
	    }
		
	});

	<?php if( $lanceInserido ): ?>
		alert('Lance registrado com sucesso!');
	<?php endif; ?>
	
});
  
</script>