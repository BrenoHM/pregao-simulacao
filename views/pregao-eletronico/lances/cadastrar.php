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
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($itens as $idItem => $item): ?>
							<tr>
								<td><?php echo $idItem; ?></td>
								<td><?php echo $item['descricao']; ?></td>
								<td><?php echo 'Aberto'; ?></td>
								<td><?php echo 'R$ 1,00'; ?></td>
								<td><?php echo 'R$ 1,00'; ?></td>
								<td><input type="text" name="lance" class="money"></td>
								<td>(R$) <a href="#">Enviar</a></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="row text-center">
		<a href="<?php echo BASE_URL ?>/pregao-eletronico/" class="btn btn-primary">Voltar</a>
	</div>
</section>