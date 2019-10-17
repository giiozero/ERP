<!-- Breadcomb area Start-->
<div class="breadcomb-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="breadcomb-list">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="breadcomb-wp">
								<div class="breadcomb-icon">
									<i class="fa fa-shopping-basket"></i>
								</div>
								<div class="breadcomb-ctn">
									<h2>Produtos</h2>
									<p><a href="<?PHP echo base_url(); ?>produtos/add" class="breadcomb-report"><button data-toggle="tooltip" data-placement="left" title="Adicionar Pedido" class="btn waves-effect"><i class="fa fa-plus"> Novo</i></button></a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> 
<!-- Breadcomb area End-->
<!-- Data Table area Start-->
<div class="data-table-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="data-table-list">
					<div class="table-responsive">
						<table id="data-table-basic" class="table table-striped">
							<thead>
								<tr>
									<th>CÓDIGO</th>
									<th>DESCRIÇÃO</th>
									<th>ESTOQUE</th>
									<th>PREÇO</th>
									<th>CATEGORIA</th>
								</tr>
							</thead>
							<tbody>
							<?PHP foreach ($load_produtos as $pp) {
								$valor= verificaPreco($pp->precocusto, $pp->precolucro, $pp->porcentagemlucro);?> 
								<tr>
									<td><?PHP echo $pp->cod; ?></td>
									<td><?PHP echo $pp->descricao; ?></td>
									<td><?PHP echo $pp->estoque; ?></td>
									<td>R$ <?PHP echo str_replace('.',',',$valor); ?></td>
									<td><?PHP echo $pp->nome;  ?></td>
								</tr>
							<?PHP } ?>
							</tbody>
							<tfoot>
								<tr>
									<th>CÓDIGO</th>
									<th>DESCRIÇÃO</th>
									<th>ESTOQUE</th>
									<th>PREÇO</th>
									<th>CATEGORIA</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Data Table area End-->