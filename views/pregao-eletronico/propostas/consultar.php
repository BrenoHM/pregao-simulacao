<section class="content-header">
    <h1>Consulta de Proposta</h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo BASE_URL ?>/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Consulta de Proposta</li>
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
							<th></th>
							<th>N° do pregão</th>
							<th>Cod. da UASG (Unid. de Compra)</th>
							<th>Órgão</th>
							<th>Data/Hora abertura das Propostas</th>
							<th>SRP</th>
							<th>ICMS</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($propostas as $idProposta => $proposta): ?>
							<tr>
								<td><a href="<?php echo BASE_URL ?>/propostas/show/<?php echo $idProposta; ?>">Consultar<br>Proposta</a></td>
								<td><?php echo '662014'; ?></td>
								<td><?php echo '200999'; ?></td>
								<td><?php echo 'MIN. DO PLANEJAMENTO ORCAMENTO E GESTAO/DF'; ?></td>
								<td><?php echo '22/04/2019 19:08'; ?></td>
								<td><?php echo 'Não'; ?></td>
								<td><?php echo 'Sim'; ?></td>
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