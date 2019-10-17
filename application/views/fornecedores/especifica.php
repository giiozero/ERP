<?PHP 
	$fornecedor = $load_fornecedor->showFornecedor($cnpj);
?>
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
									<h2><u><?PHP echo $fornecedor->razao; ?></u></h2>
									<p>CNPJ: <?PHP echo $fornecedor->cnpj; ?></p>
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
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-element-list">
					<div class="row">
						<div class="cmp-tb-hd cmp-int-hd">
							<h2><i class="notika-icon notika-support"></i> Informações Principais  </h2>
						</div>
						<!-- Razão Social -->
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="nk-int-mk">
								<h2><u>Razão Social</u></h2>
							</div>
							<div class="form-group ic-cmp-int">
								<div class="form-ic-cmp"></div>
								<div class="nk-int-st">
									<span><?PHP echo $fornecedor->razao; ?></span>
								</div>
							</div>
						</div>
						<!-- Nome Fantasia -->
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<div class="nk-int-mk">
								<h2><u>Fantasia</u></h2>
							</div>
							<div class="form-group ic-cmp-int">
								<div class="form-ic-cmp"></div>
								<div class="nk-int-st">
									<span><?PHP echo $fornecedor->fantasia; ?></span>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
							<div class="nk-int-mk">
								<h2><u>Pessoa para Contato</u></h2>
							</div>
							<div class="form-group ic-cmp-int">
								<div class="form-ic-cmp"></div>
								<div class="nk-int-st">
									<span><?PHP echo $fornecedor->contato; ?></span>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<!-- CPF/ CNPJ -->
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
							<div class="nk-int-mk">
								<h2><u>CPF/ CNPJ</u></h2>
							</div>
							<div class="form-group ic-cmp-int">
								<div class="form-ic-cmp"></div>
								<div class="nk-int-st">
									<span><?PHP echo $fornecedor->cnpj; ?></span>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
							<div class="nk-int-mk">
								<h2><u>I.E./ RG</u></h2>
							</div>
							<div class="form-group ic-cmp-int">
								<div class="form-ic-cmp"></div>
								<div class="nk-int-st">
									<span><?PHP echo $fornecedor->cnpj; ?></span>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="cmp-tb-hd cmp-int-hd">
							<h2><i class="notika-icon notika-phone"></i> Contato</h2>
						</div>
						<!-- E-mail  -->
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
							<div class="nk-int-mk">
								<h2><u>E-mail</u></h2>
							</div>
							<div class="form-group ic-cmp-int">
								<div class="form-ic-cmp"></div>
								<div class="nk-int-st">
									<span><?PHP echo $fornecedor->email; ?></span>
								</div>
							</div>
						</div>
						<!-- Telefone  -->
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
							<div class="nk-int-mk">
								<h2><u>Telefone</u></h2>
							</div>
							<div class="form-group ic-cmp-int">
								<div class="form-ic-cmp"></div>
								<div class="nk-int-st">
									<span><?PHP echo $fornecedor->telefone; ?></span>
								</div>
							</div>
						</div>
						<!-- Celular  -->
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
							<div class="nk-int-mk">
								<h2><u>Celular</u></h2>
							</div>
							<div class="form-group ic-cmp-int">
								<div class="form-ic-cmp"></div>
								<div class="nk-int-st">
									<span><?PHP echo $fornecedor->celular; ?></span>
								</div>
							</div>
						</div>
						<!-- Celular  -->
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
							<div class="nk-int-mk">
								<h2><u>Site</u></h2>
							</div>
							<div class="form-group ic-cmp-int">
								<div class="form-ic-cmp"></div>
								<div class="nk-int-st">
									<span><?PHP echo $fornecedor->site; ?></span>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="cmp-tb-hd cmp-int-hd">
							<h2><i class="notika-icon notika-house"></i> Endereço</h2>
						</div>
						<!-- CEP -->
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
							<div class="nk-int-mk">
								<h2><u>CEP</u></h2>
							</div>
							<div class="form-group ic-cmp-int">
								<div class="form-ic-cmp">
									<span><?PHP echo $fornecedor->cep;?></span>
								</div>
								<div class="nk-int-st">
								</div>
							</div>
						</div>
					</div>
					<div class="row"> 
						<!-- Logradouro -->
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
							<div class="nk-int-mk">
								<h2><u>Logradouro</u></h2>
							</div>
							<div class="form-group ic-cmp-int">
								<div class="form-ic-cmp"></div>
								<div class="nk-int-st">
									<span><?PHP echo $fornecedor->logradouro; ?>,</span>
								</div>
							</div>
						</div>
						<!-- Número -->
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
							<div class="nk-int-mk">
								<h2><u>Nº</u></h2>
							</div>
							<div class="form-group ic-cmp-int">
								<div class="form-ic-cmp"></div>
								<div class="nk-int-st">
									<span><?PHP echo $fornecedor->numero; ?></span>
								</div>
							</div>
						</div>
						<!-- Complemento -->
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
							<div class="nk-int-mk">
								<h2><u>Complemento</u></h2>
							</div>
							<div class="form-group ic-cmp-int">
								<div class="form-ic-cmp"></div>
								<div class="nk-int-st">
									<span><?PHP echo $fornecedor->complemento; ?></span>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<!-- Bairro -->
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
							<div class="nk-int-mk">
								<h2><u>Bairro</u></h2>
							</div>
							<div class="form-group ic-cmp-int">
								<div class="form-ic-cmp"></div>
								<div class="nk-int-st">
									<span><?PHP echo $fornecedor->bairro; ?></span>
								</div>
							</div>
						</div>
						<!-- Cidade -->
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
							<div class="nk-int-mk">
								<h2><u>Cidade</u></h2>
							</div>
							<div class="form-group ic-cmp-int">
								<div class="form-ic-cmp"></div>
								<div class="nk-int-st">
									<span><?PHP echo $fornecedor->cidade; ?></span>
								</div>
							</div>
						</div>
						<!-- Estado -->
						<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
							<div class="nk-int-mk">
								<h2><u>Estado</u></h2>
							</div>
							<div class="form-group ic-cmp-int">
								<div class="form-ic-cmp"></div>
								<div class="nk-int-st">
									<span><?PHP echo $fornecedor->estado; ?></span>
								</div>
							</div>
						</div>
					</div>
					<a href="<?PHP echo base_url(); ?>fornecedores"><button class="btn btn-primary notika-btn-success waves-effect">Voltar</button></a>
					<a href="<?PHP echo base_url().'fornecedores/editar/'.$fornecedor->cnpj; ?>"><button class="btn btn-warning notika-btn-success waves-effect">Editar</button></a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Data Table area End-->