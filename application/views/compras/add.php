<link rel="stylesheet" href="<?PHP echo base_url();?>assets/css/animation/animation-custom.css">
<style>
h1, h2, h3, h4, h5 {
	margin:0;
}

a:hover,a:focus{
	text-decoration: none;
	outline: none;
}
.notika-icon {
 font-size:30px;	
}
.tab .nav-tabs{
	border-bottom: 0 none;
	background: transparent;
}
.tab .nav-tabs li a{
	font-size: 16px;
	color: #333;
	background: transparent;
	border: none;
	padding: 12px 22px;
	border-radius: 30px;
	position: relative;
}
.tab .nav-tabs li.active a{
	border: 0 none;
	background: #00c292;
	color: #fff;
}
.tab .row {
	margin-bottom:40px;
}
.tab .nav-tabs li.active a:after{
	content: "";
	position: absolute;
	left: 45%;
	bottom: -14px;
	border: 7px solid transparent;
	border-top: 7px solid #00c292;
}
.tab .tab-row{
	padding: 20px;
	padding-left:30px;
	
	margin-top: 20px;
	background: #fff;
	border-bottom: 3px solid #00c292;
	border-left: 1px solid #00c292;
}
@media only screen and (max-width: 480px) {
	.tab .nav-tabs li{
		width: 100%;
		margin-bottom: 10px;
	}
	.tab .nav-tabs li a{
		border: 1px solid #d3d3d3;
	}
	.tab .nav-tabs li.active a:after{
		border:none;
	}
}
</style>
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
									<h1>Adicionar Compras</h1>
									<p>Preencha os campos corretamente para adicionar uma nova compra.</p>
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
						<h3>
							<i class="notika-icon notika-finance"></i> Fornecedor
							<button class="btn btn-success notika-btn-success waves-effect" data-toggle="modal" data-target="#myModalone"><?PHP echo !isset($_POST['fornecedor'])?'Escolha o Fornecedor':'Troque o Fornecedor';?></button>
						</h3>
					</div>
					<div class="row">
					<?PHP if (isset($load_fornecedor)) { ?>
						<div class="row animated fadeInDown">
							<div class="form-group ic-cmp-int">
								<div class="form-ic-cmp"></div>
								<!-- Razão Social -->
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="nk-int-mk">
										<h4>Razão Social</h4>
									</div>
									<div class="form-group ic-cmp-int">
										<div class="nk-int-st">
											<span><?PHP echo issetor($load_fornecedor->razao); ?></span>
										</div>
									</div>
								</div>
								<!-- Nome Fantasia -->
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
									<div class="nk-int-mk">
										<h4>Fantasia</h4>
									</div>
									<div class="form-group ic-cmp-int">
										<div class="nk-int-st">
											<span><?PHP echo issetor($load_fornecedor->fantasia);?> </span>
										</div>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
									<div class="nk-int-mk">
										<h4>CNPJ</h4>
									</div>
									<div class="form-group ic-cmp-int">
										<div class="nk-int-st">
											<span><?PHP echo issetor($load_fornecedor->cnpj); ?></span>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
									<div class="nk-int-mk">
										<h4>Pessoa para Contato</h4>
									</div>
									<div class="form-group ic-cmp-int">
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
		</div>
	</div>
</div>
<br/><br/>
<form method="POST" action="<?PHP echo base_url(); ?>compras/save" name="addCompra">
	<div class="form-element-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="tab" role="tabpanel">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#geral" aria-controls="home" role="tab" data-toggle="tab">Geral</a></li>
							<li role="presentation"><a href="#itens" aria-controls="profile" role="tab" data-toggle="tab">Itens</a></li>
							<li role="presentation"><a href="#Section3" aria-controls="settings" role="tab" data-toggle="tab">Section 3</a></li>
						</ul>
						<div class="tab-row col-md-2">
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
								<!-- Forma de Entrega -->
								<div class="cmp-tb-hd cmp-int-hd">
									<h3><i class="notika-icon notika-dollar" style="font-size:30px;"></i>Valores</h3>
								</div>
								<div class="nk-int-mk">
									<h5>PRODUTOS</h5>
								</div>
								<div class="nk-int-st">
									<p>R$ <span> 35,00</span></p>
								</div>
								<div class="nk-int-mk">
									<h5>DESCONTO</h5>
								</div>
								<div class="nk-int-st">
									<p>R$ <span>00,00</span></p>
								</div>
								<div class="nk-int-mk">
									<h5>FRETE</h5>
								</div>
								<div class="nk-int-st">
									<p>R$ <span>00,00</span></p>
								</div>
								<div class="nk-int-mk">
									<h5>TOTAL</h5>
								</div>
								<div class="nk-int-st">
									<p>R$ <span> 00,00</span></p>
								</div>
							</div>
						</div>
						<!-- Tab panes -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="geral">
								<input name="fornecedor" value="<?PHP echo $load_fornecedor->cnpj;?>" hidden>
								<div class="row tab-row col-lg-10 col-md-10 col-sm-10 col-xs-10">
									<div class="cmp-tb-hd cmp-int-hd">
										<h3><i class="notika-icon notika-form"></i>Geral</h3>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
										<!-- Usuário -->
										<div class="nk-int-mk">
											<h4>Usuário</h4>
										</div>
										<div class="nk-int-st">
											<span><?PHP echo $this->session->userdata('username');?></span>
											<input type="text" name="usuario" value="<?PHP ?>" hidden>
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
										<!-- Emissão -->
										<div class="nk-int-mk">
											<h4>Emissão*</h4>
										</div>
										<div class="nk-int-st">
											
											<input type="text" class="form-control" name="emissao" value="<?PHP echo date("d/m/Y"); ?>" data-mask="99/99/9999" placeholder="dd/mm/yyyy" required >
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
										<!-- Prazo de Entrega -->
										<div class="nk-int-mk">
											<h4>Prazo de Entrega</h4>
										</div>
										<div class="nk-int-st">
											<input type="text" class="form-control" name="prazoentrega" data-mask="99/99/9999" placeholder="dd/mm/yyyy">
											
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
										<!-- Forma de Entrega -->
										<div class="nk-int-mk">
											<h4>Forma de Entrega*</h4>
										</div>
										<div class="nk-int-st">
											<input type="text" class="form-control" name="formadeentrega" required>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
										<!-- Forma de Entrega -->
										<div class="nk-int-mk">
											<h4>Condição de Pagamento*</h4>
										</div>
										<div class="chosen-select-act nk-int-st">
											<select name="txtid_Categoria" class="chosen">											
												<option selected disabled>Escolha um método...</option>
												<?PHP foreach ($load_categorias as $categoria) {
													echo '<option value="'.$categoria->id.'"'.set_select('txtid_Categoria', $categoria->id).'>'
														.$categoria->nome.
														'</option>';
												} ?>
											</select>
										</div>
									</div>
								</div>
							</div>
							<!-- ### ITEMS ###-->
							<div role="tabpanel" class="tab-pane fade" id="itens">
								<div class="row tab-row col-lg-10 col-md-10 col-sm-10 col-xs-10">
									<div class="cmp-tb-hd cmp-int-hd">
										<h3><i class="notika-icon  notika-star"></i>Itens</h3>
									</div>
									<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5"></div>
									<!-- Porcentagem Lucro -->
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
										<div class="nk-int-mk">
											<h4>% Lucro</h4>
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
											<h4>$ Lucro</h4>
										</div>
										<div class="form-group ic-cmp-int">
											<div class="form-ic-cmp">
											</div>
											<div class="nk-int-st">
												<input type="text" name="txtPrecoLucro" id="txtLucro" class="form-control money" placeholder="R$ 00,00" value="<?PHP echo set_value('txtPrecoLucro');?>" required>
											</div>
										</div>
									</div>		
									<!-- Código -->
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
										<div class="nk-int-mk">
											<h4>Código</h4>
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
											<h4>Descrição</h4>
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
											<h4>Preço Custo</h4>
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
											<h4>Preço Final</h4>
										</div>
										<div class="form-group ic-cmp-int">
											<div class="form-ic-cmp">
											</div>
											<div class="nk-int-st">
												<span id="txtPrecoFinal">R$ 00,00</span>										
											</div>
										</div>
									</div>
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
							<div role="tabpanel" class="tab-pane fade" id="Section3">
								<h2>Section 3</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium, metus et scelerisque dignissim, ligula est imperdiet nisl, sit amet malesuada nunc felis in nisi. Nullam dapibus ligula dui, in rhoncus purus euismod nec. Duis in lacinia neque. Etiam tellus.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
				<?PHP } else { ?>
				</div><!--Form Element-->
			</div><!--Dimensions-->
		</div><!--Row-->
	</div><!--Container-->
</div><!--Element Area-->
				<?PHP } ?>
<!-- Data Table area End-->
<!-- Fornecedor  -->
<div class="modal fade" id="myModalone" role="dialog" style="display: none;">
	<div class="modal-dialog modal-large">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
			</div>
			<form action="<?PHP echo base_url();?>compras/add" method="post">
				<div class="modal-body">
					<h4>Escolha o Fornecedor</h4>
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
<div ng-app="myapp" ng-controller="usercontroller">
	<label>Enter a country</label>
	<input type="text" name="country" id="country" ng-model="country" ng-keyup="complete(country)" class="form-control"/>
	<ul class="list-group" ng-model="hidethis" ng-hide="hidethis">
		<li class="list-group-item" ng-repeat="countrydata in filterCountry" ng-click="fillTextbox(countrydata)" >{{countrydata}}</li>
	</ul>
</div>