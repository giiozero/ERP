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
									<i class="notika-icon  notika-plus-symbol"></i>
								</div>
								<div class="breadcomb-ctn">
									<h2>Adicione Produtos</h2>
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
<div class="form-element-area">
	<div class="container">
		<?PHP echo validation_errors('<div class="alert alert-danger">', '</div>');?>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-element-list">
					<div class="cmp-tb-hd cmp-int-hd">
						<h2>
							<i class="notika-icon notika-finance"></i> Fornecedor
							<button class="btn btn-success notika-btn-success waves-effect" data-toggle="modal" data-target="#myModalone"><?PHP echo !isset($_POST['fornecedor'])?'Escolha o Fornecedor':'Troque o Fornecedor';?></button>
						</h2>
					</div>
				<?PHP if (isset($load_fornecedor)) { ?>
					<div class="row animated fadeInDown">
						<div class="form-group ic-cmp-int">
							<div class="form-ic-cmp"></div>
							<!-- Razão Social -->
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<div class="nk-int-mk">
									<h2><u>Razão Social</u></h2>
								</div>
								<div class="form-group ic-cmp-int">
									<div class="form-ic-cmp"></div>
									<div class="nk-int-st">
										<span><?PHP echo issetor($load_fornecedor->razao); ?></span>
									</div>
								</div>
							</div>
							<!-- Nome Fantasia -->
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
								<div class="nk-int-mk">
									<h2><u>Fantasia</u></h2>
								</div>
								<div class="form-group ic-cmp-int">
									<div class="form-ic-cmp"></div>
									<div class="nk-int-st">
										<span><?PHP echo issetor($load_fornecedor->fantasia);?> </span>
									</div>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
								<div class="nk-int-mk">
									<h2><u>CNPJ</u></h2>
								</div>
								<div class="form-group ic-cmp-int">
									<div class="form-ic-cmp"></div>
									<div class="nk-int-st">
										<span><?PHP echo issetor($load_fornecedor->cnpj); ?></span>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
								<div class="nk-int-mk">
									<h2><u>Pessoa para Contato</u></h2>
								</div>
								<div class="form-group ic-cmp-int">
									<div class="form-ic-cmp"></div>
									<div class="nk-int-st">
										<span><?PHP echo issetor($load_fornecedor->contato); ?></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
		<div class="row animated fadeInDown">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-element-list mg-t-30">
					<div class="row">
						<div class="cmp-tb-hd cmp-int-hd">
							<h2>
								<i class="notika-icon notika-form"></i> Detalhes
							</h2>
						</div>
						<form method="POST" action="<?PHP echo base_url(); ?>produtos/save" name="addProduto">
							<input name="fornecedor" value="<?PHP echo $load_fornecedor->cnpj;?>" hidden>
						
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
								<!-- Categoria -->
								<div class="nk-int-mk">
									<h2>Categoria</h2>
								</div>
								<div class="chosen-select-act nk-int-st">
									<select name="txtid_Categoria" class="chosen">											
										<option selected disabled>Escolha uma categoria...</option>
										<?PHP foreach ($load_categorias as $categoria) {
											echo '<option value="'.$categoria->id.'"'.set_select('txtid_Categoria', $categoria->id).'>'
												.$categoria->nome.
												'</option>';
										} ?>
									</select>
								</div>
							</div>
							<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5"></div>
							<!-- Porcentagem Lucro -->
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
								<div class="nk-int-mk">
									<h2>% Lucro</h2>
								</div>
								<div class="form-group ic-cmp-int">
									<div class="form-ic-cmp">
									</div>
									<div class="nk-int-st">
										<input type="number" name="txtPorcentagemLucro" step="0.01" id="txtPLucro" class="form-control" placeholder="00,00%" value="<?PHP echo set_value('txtPorcentagemLucro');?>" required>
									</div>
								</div>
							</div>
							<!-- Valor Lucro -->
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
								<div class="nk-int-mk">
									<h2>$ Lucro</h2>
								</div>
								<div class="form-group ic-cmp-int">
									<div class="form-ic-cmp">
									</div>
									<div class="nk-int-st">
										<input type="text" name="txtPrecoLucro" id="txtLucro" class="form-control money" placeholder="R$ 00,00" value="<?PHP echo set_value('txtPrecoLucro');?>" required>
									</div>
								</div>
							</div>	
						</form>
					</div>
					<div class="row">
						<!-- Código -->
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
							<div class="nk-int-mk">
								<h2>Código</h2>
							</div>
							<div class="form-group ic-cmp-int">
								<div class="form-ic-cmp"></div>
								<div class="nk-int-st">
									<input type="number" name="txtCod" class="form-control" placeholder="09999" maxlength="4" value="<?PHP echo set_value('txtCod');?>" required>
								</div>
							</div>
						</div>
						<!-- Descrição -->
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
							<div class="nk-int-mk">
								<h2>Descrição</h2>
							</div>
							<div class="form-group ic-cmp-int">
								<div class="form-ic-cmp"></div>
								<div class="nk-int-st">
									<input type="text" name="txtDescricao" class="form-control" placeholder="Digite a descrição do Produto" value="<?PHP echo set_value('txtDescricao');?>" required>
								</div>
							</div>
						</div>
						<!-- Preço Custo -->
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
							<div class="nk-int-mk">
								<h2>Preço Custo</h2>
							</div>
							<div class="form-group ic-cmp-int">
								<div class="form-ic-cmp">
								</div>
								<div class="nk-int-st">
									<input type="text" name="txtPrecoCusto" id="txtPrecoCusto" class="form-control money" placeholder="R$ 00,00" value="<?PHP echo set_value('txtPrecoCusto');?>" required>
								</div>
							</div>
						</div>
						<!-- Preço Final -->
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
							<div class="nk-int-mk">
								<h2>Preço Final</h2>
							</div>
							<div class="form-group ic-cmp-int">
								<div class="form-ic-cmp">
								</div>
								<div class="nk-int-st">
									<span id="txtPrecoFinal">R$ 00,00</span>										
								</div>
							</div>
						</div>
					</div>
					<div class="row"> 
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="form-group ic-cmp-int">
								<div class="form-ic-cmp">
								</div>
								<div class="nk-int-st">
									<button class="btn btn-success pull-right">Cadastrar</button>								
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--Animated-->
		<?PHP } ?>
	</div><!--Container-->
</div><!--Element Area-->
<!-- Data Table area End-->
<!-- Fornecedor  -->
<div class="modal fade" id="myModalone" role="dialog" style="display: none;">
	<div class="modal-dialog modal-large">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
			</div>
			<form action="<?PHP echo base_url();?>produtos/add" method="post">
				<div class="modal-body">
					<h2>Escolha o Fornecedor</h2>
					<table id="data-table-basic" class="table table-striped"> 
						<thead> 
							<th>#</th>
							<th>Razão</th>
							<th>Fantasia</th>
							<th>CNPJ</th>
						</thead>
						<tbody>
							<?PHP foreach ($load_fornecedores as $r){ ?>
								<tr>
									<td><input type="radio" name="fornecedor" value="<?PHP echo $r->cnpj;?>"></td>
									<td><?PHP echo $r->razao;?></td>
									<td><?PHP echo $r->fantasia;?></td>
									<td><?PHP echo $r->cnpj;?></td>																
								</tr>
							<?PHP } ?>
						</tbody>
					</table>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-default waves-effect " >Escolher esse</button>
					<button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Fechar</button>
				</div>
			</form>
		</div>
	</div>
</div>