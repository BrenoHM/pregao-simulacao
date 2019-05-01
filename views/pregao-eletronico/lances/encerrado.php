<section class="content-header">
    <h1>Lances Encerrados</h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo BASE_URL ?>/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Lances Encerrados</li>
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
							<th>Tratamento<br>Diferenciado</th>
							<th>Aplicabilidade<br>Decreto 7174</th>
							<th>Aplic. Margem<br>Preferencia</th>
							<th>Valor<br>Estimado</th>
							<th>Situação</th>
							<th>Melhor Lance</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($itens as $idItem => $item): ?>
							
							<tr>
								<td><?php echo $idItem; ?></td>
								<td><?php echo $item['descricao']; ?></td>
								<td>-</td>
								<td>Não</td>
								<td>Não</td>
								<td><?php echo isset($proposta['itens'][$idItem]['valor_unit']) ? $proposta['itens'][$idItem]['valor_unit'] : '-'; ?></td>
								<td><?php echo $situacaoLance; ?></td>
								<td><?php echo isset($lances[$idItem]['melhor']) ? $lances[$idItem]['melhor'] : '-'; ?></td>
							</tr>
							
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="row text-center">
		<!--<p>Próxima alteração às: <?php //echo $mudaSituacaoLance; ?></p>-->
		<a href="<?php echo BASE_URL ?>/lances/" class="btn btn-primary">Voltar</a>
	</div>
</section>

<script type="text/javascript">

$(function(){

	//REFRESH NA PÁGINA EM 15 SEGUNDOS
	setTimeout(function(){ 
		window.location.href = window.location.href; 
	}, 15000);
	
});
  
</script>