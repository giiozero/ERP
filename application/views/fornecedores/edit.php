<?PHP $fornecedor = $load_fornecedor->showFornecedor($cnpj); //O problema é o Array com os dados do Fornecedor ?>
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
									<i class="fa fa-pencil"></i>
								</div>
								<div class="breadcomb-ctn">
									<h2>Editar Fornecedor</h2>
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
					<form method="POST" action="<?PHP echo base_url();?>fornecedores/save" name="editar"> 
						<div class="row">
							<div class="cmp-tb-hd cmp-int-hd">
								<h2><i class="notika-icon notika-support"></i> Informações Principais</h2>
							</div>
							<!-- Razão Social -->
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<div class="nk-int-mk">
									<h2>Razão Social</h2>
								</div>
								<div class="form-group ic-cmp-int">
									<div class="form-ic-cmp">
									</div>
									<div class="nk-int-st">
										<input type="text" name="txtRazao" class="form-control" placeholder="Nome Completo" value="<?PHP echo $fornecedor->razao;?>" required>
									</div>
								</div>
							</div>
							<!-- Nome Fantasia -->
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
								<div class="nk-int-mk">
									<h2>Fantasia</h2>
								</div>
								<div class="form-group ic-cmp-int">
									<div class="form-ic-cmp">
									</div>
									<div class="nk-int-st">
										<input type="text" name="txtFantasia" class="form-control" placeholder="Nome Fantasia" value="<?PHP echo $fornecedor->fantasia;?>" required>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
								<div class="nk-int-mk">
									<h2>Pessoa para Contato</h2>
								</div>
								<div class="form-group ic-cmp-int">
									<div class="form-ic-cmp">
									</div>
									<div class="nk-int-st">
										<input type="text" name="txtContato" class="form-control" value="<?PHP echo $fornecedor->contato;?>" placeholder="Pessoa para contato" required>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<!-- CPF/ CNPJ -->
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
								<div class="nk-int-mk">
									<h2>CPF/ CNPJ</h2>
								</div>
								<div class="form-group ic-cmp-int">
									<div class="form-ic-cmp">
									</div>
									<div class="nk-int-st">
										<input type="text" class="form-control" value="<?PHP echo $fornecedor->cnpj;?>" data-mask="99.999.999/9999-99" disabled>
										<input type="text"  name="txtCnpj" class="form-control" value="<?PHP echo $fornecedor->cnpj;?>" hidden>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
								<div class="nk-int-mk">
									<h2>I.E./ RG</h2>
								</div>
								<div class="form-group ic-cmp-int">
									<div class="form-ic-cmp">
									</div>
									<div class="nk-int-st">
										<input type="number" name="txtIe" class="form-control" placeholder="Inscrição Estadual/ RG" value="<?PHP echo $fornecedor->ie;?>">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="cmp-tb-hd cmp-int-hd">
								<h2><i class="notika-icon notika-phone"></i> Contato</h2>
							</div>
							<!-- E-mail-->
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
								<div class="nk-int-mk">
									<h2>E-mail</h2>
								</div>
								<div class="form-group ic-cmp-int">
									<div class="form-ic-cmp">
										
									</div>
									<div class="nk-int-st">
										<input id="txtEMail" name="txtEMail" type="email" placeholder="email@algo.com.br" class="form-control" value="<?PHP echo $fornecedor->email;?>">
									</div>
								</div>
							</div>
							<!-- Telefone-->
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
								<div class="nk-int-mk">
									<h2>Telefone</h2>
								</div>
								<div class="form-group ic-cmp-int">
									<div class="form-ic-cmp">
										
									</div>
									<div class="nk-int-st">
										<input name="txtTelefone" type="text" placeholder="(00) 0000-0000" class="form-control txtTelefone" value="<?PHP echo $fornecedor->telefone;?>">
									</div>
								</div>
							</div>
							<!-- Celular-->
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
								<div class="nk-int-mk">
									<h2>Celular</h2>
								</div>
								<div class="form-group ic-cmp-int">
									<div class="form-ic-cmp">
										
									</div>
									<div class="nk-int-st">
										<input name="txtCelular" type="text" placeholder="(00) 0 0000-0000" class="form-control txtTelefone" value="<?PHP echo $fornecedor->celular;?>">
									</div>
								</div>
							</div>
							<!-- Celular-->
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
								<div class="nk-int-mk">
									<h2>Site</h2>
								</div>
								<div class="form-group ic-cmp-int">
									<div class="form-ic-cmp">
										
									</div>
									<div class="nk-int-st">
										<input id="txtSite" name="txtSite" type="text" placeholder="www.site.com.br" class="form-control" value="<?PHP echo $fornecedor->site;?>">
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
									<h2>CEP</h2>
								</div>
								<div class="form-group ic-cmp-int">
									<div class="form-ic-cmp">
										
									</div>
									<div class="nk-int-st">
										<input id="txtCep" name="txtCep" type="text" maxlength="8" required="" placeholder="Sem traço" class="form-control" value="<?PHP echo $fornecedor->cep;?>">
									</div>
								</div>
							</div>
						</div>
						<div class="row"> 
							<!-- Logradouro -->
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<div class="nk-int-mk">
									<h2>Logradouro</h2>
								</div>
								<div class="form-group ic-cmp-int">
									<div class="form-ic-cmp">
										
									</div>
									<div class="nk-int-st">
										<input id="txtLogradouro" name="txtLogradouro" type="text"maxlength="8" requiredplaceholder="Rua, avenida, etc" class="form-control" required value="<?PHP echo $fornecedor->logradouro;?>">
									</div>
								</div>
							</div>
							<!-- Número -->
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
								<div class="nk-int-mk">
									<h2>Nº</h2>
								</div>
								<div class="form-group ic-cmp-int">
									<div class="form-ic-cmp">
										
									</div>
									<div class="nk-int-st">
										<input id="txtNumero" name="txtNumero" type="text"placeholder="Nº" class="form-control"required value="<?PHP echo $fornecedor->numero;?>">
									</div>
								</div>
							</div>
							<!-- Complemento -->
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
								<div class="nk-int-mk">
									<h2>Complemento</h2>
								</div>
								<div class="form-group ic-cmp-int">
									<div class="form-ic-cmp">
										
									</div>
									<div class="nk-int-st">
										<input id="txtComplemento" name="txtComplemento" type="text" maxlength="50" placeholder="Apto, Bloco, etc" class="form-control" value="<?PHP echo $fornecedor->complemento;?>">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<!-- Bairro -->
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
								<div class="nk-int-mk">
									<h2>Bairro</h2>
								</div>
								<div class="form-group ic-cmp-int">
									<div class="form-ic-cmp">
										
									</div>
									<div class="nk-int-st">
										<input id="txtBairro" name="txtBairro" type="text"placeholder="Vila, Vale, Jardim, etc" class="form-control" required value="<?PHP echo $fornecedor->bairro;?>">
									</div>
								</div>
							</div>
							<!-- Cidade -->
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
								<div class="nk-int-mk">
									<h2>Cidade</h2>
								</div>
								<div class="form-group ic-cmp-int">
									<div class="form-ic-cmp">
										
									</div>
									<div class="nk-int-st">
										<input id="txtCidade" name="txtCidade" type="text"placeholder="São Paulo, Minas Gerais, etc" class="form-control" required value="<?PHP echo $fornecedor->cidade;?>">
									</div>
								</div>
							</div>
							<!-- Estado -->
							<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
								<div class="nk-int-mk">
									<h2>Estado</h2>
								</div>
								<div class="form-group ic-cmp-int">
									<div class="form-ic-cmp">
										
									</div>
									<div class="nk-int-st">
										<input id="txtEstado" name="txtEstado" type="text"placeholder="SP" class="form-control" maxlength=2 required value="<?PHP echo $fornecedor->estado;?>">
									</div>
								</div>
							</div>
						</div>
						<button class="btn btn-success notika-btn-success waves-effect" name="acao" value="edit">Salvar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Data Table area End-->