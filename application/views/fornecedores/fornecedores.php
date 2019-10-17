<!-- Breadcomb area Start-->
<div class="breadcomb-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<?PHP print_r($this->session->flashdata('dbResult')); ?>				
				<div class="breadcomb-list">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="breadcomb-wp">
								<div class="breadcomb-icon">
									<i class="notika-icon notika-finance"></i>
								</div>
								<div class="breadcomb-ctn">
									<h2>Fornecedores</h2>
									<p><a  class="breadcomb-report" href="<?PHP echo base_url();?>fornecedores/add"><button data-toggle="tooltip" data-placement="bottom" title="Adicionar Fornecedor" class="btn"><i class="fa fa-plus"> Novo</i></button></a></p>
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
									<th>CNPJ/ CPF</th>
									<th>Razão Social</th>
									<th>Nome Fantasia</th>
									<th>Contato</th>
									<th>#</th>
								</tr>
							</thead>
							<tbody>
								<?PHP foreach($load_fornecedores as $row) { ?>
								<tr>
									<td><a href="<?PHP echo base_url().'fornecedores/visualizar/'.$row->cnpj; ?>"><?PHP echo $row->cnpj; ?></a></td>
									<td><?PHP echo $row->razao; ?></td>
									<td><?PHP echo $row->fantasia; ?></td>
									<td><?PHP echo $row->contato; ?></td>		
									<td>
										<a href="<?PHP echo base_url().'fornecedores/editar/'.$row->cnpj; ?>"><button data-toggle="tooltip" data-placement="bottom" title="" class="btn waves-effect btn-warning" data-original-title="Editar"><i class="fa fa-pencil"></i></button></a>
										<button data-toggle="tooltip" data-placement="bottom" title="" class="btn waves-effect btn-danger" data-original-title="Remover"><i class="fa fa-times"></i></button>
									</td>
								</tr>
								<?PHP } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Data Table area End-->