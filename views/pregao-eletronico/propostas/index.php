<section class="content-header">
    <h1>Propostas</h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo BASE_URL ?>/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Propostas</li>
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
							<th>Proposta</th>
							<th>N° do pregão</th>
							<th>Cod. da UASG (Unid. de Compra)</th>
							<th>Órgão</th>
							<th>Data/Hora abertura das Propostas</th>
							<th>SRP</th>
							<th>ICMS</th>
						</tr>
					</thead>
					<tbody>
						<?php //foreach($propostas as $idProposta => $proposta): ?>
							<tr>
								<td><a href="<?php echo BASE_URL ?>/propostas/cadastrar/<?php echo $pregao['num_pregao']; ?>">Incluir Proposta</a></td>
								<td><?php echo $pregao['num_pregao']; ?></td>
								<td><?php echo $pregao['cod_uasg']; ?></td>
								<td><?php echo $pregao['orgao']; ?></td>
								<td><?php echo $pregao['data_abertura']; ?></td>
								<td><?php echo $pregao['srp']; ?></td>
								<td><?php echo $pregao['icms']; ?></td>
							</tr>
						<?php //endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="row text-center">
		<a href="<?php echo BASE_URL ?>/propostas" class="btn btn-primary">Voltar</a>
	</div>
</section>