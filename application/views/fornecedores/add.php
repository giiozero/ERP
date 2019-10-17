<?PHP 
	if (!empty ($_FILES)){
		$xml = (object)cxml($_FILES['xml']['tmp_name']);
	}
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
									<i class="notika-icon notika-plus-symbol"></i>
								</div>
								<div class="breadcomb-ctn">
									<h2>Adicionar Fornecedores</h2>
									<p>
										<form action="<?PHP echo base_url(); ?>fornecedores/add" method="post" name="salvar" enctype="multipart/form-data">
											<input type="file" name="xml" id="xml_upload" accept=".xml" data-toggle="modal" data-target="#exampleModal" style="display: none; visibility: hidden;">
											<label for="xml_upload" class="btn btn-success notika-btn-success waves-effect">Adicione por XML</label>
											<div class="modal" id="exampleModal" tabindex="-1" role="dialog">
											  <div class="modal-dialog" role="document">
												<div class="modal-content">
												  <div class="modal-header">
													<h5 class="modal-title">ANEXAR  DOCUMENTOS</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													  <span aria-hidden="true">×</span>
													</button>
												  </div>
												  <div class="modal-body">
													<div class="preview">
													  <p>Nenhum documento selecionado ainda</p>
													</div>
												  </div>
												  <div class="modal-footer">
													<button id="addPend" class="btn btn-simple btn-success right" rel="tooltip" type="submit" title="Confirmar Cadastro">
														<i class="fa fa-check">Enviar</i>
													</button>
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
												  </div>
												</div>
											  </div>
											</div>
										</form>
									</p>
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
					<form method="POST" action="save"> 
						<div class="row">
							<div class="cmp-tb-hd cmp-int-hd">
								<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
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
										<input type="text" name="txtRazao" class="form-control" placeholder="Nome Completo" value="<?PHP echo issetor($xml->RZ_EMITENTE);echo set_value('txtRazao'); ?>" required>
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
										<input type="text" name="txtFantasia" class="form-control" placeholder="Nome Fantasia" value="<?PHP  echo set_value('txtFantasia');?>" required>
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
										<input type="text" name="txtContato" class="form-control" placeholder="Pessoa para contato" value="<?PHP echo set_value('txtContato'); ?>" >
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
										<input type="text" name="txtCnpj" class="form-control" data-mask="99.999.999/9999-99" placeholder="CPF/ CNPJ" value="<?PHP echo issetor($xml->CNPJ_EMIT);echo set_value('txtCnpj'); ?>">
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
										<input type="number" name="txtIe" class="form-control" placeholder="Inscrição Estadual/ RG" value="<?PHP echo issetor($xml->IE_EMIT);echo set_value('txtIe'); ?>">
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
										<input id="txtEMail" name="txtEMail" type="email" placeholder="email@algo.com.br" class="form-control" value="<?PHP echo set_value('txtEmail');?>">
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
										<input name="txtTelefone" type="text" placeholder="(00) 0000-0000" class="form-control txtTelefone" value="<?PHP echo set_value('txtTelefone'); ?>">
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
										<input name="txtCelular" type="text" placeholder="(00) 0 0000-0000" class="form-control txtTelefone" value="<?PHP echo set_value('txtCelular'); ?>">
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
										<input id="txtSite" name="txtSite" type="text" placeholder="www.site.com.br" class="form-control" value="<?PHP echo set_value('txtSite'); ?>">
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
										<input id="txtCep" name="txtCep" type="text" maxlength="8" required="" placeholder="Sem traço" class="form-control" value="<?PHP echo issetor($xml->CEP_EMIT, '');echo set_value('txtCep');?>">
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
										<input id="txtLogradouro" name="txtLogradouro" type="text"maxlength="8" requiredplaceholder="Rua, avenida, etc" class="form-control" value="<?PHP echo set_value('txtLogradouro');?>" >
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
										<input id="txtNumero" name="txtNumero" type="text"placeholder="Nº" class="form-control" required value="<?PHP echo set_value('txtNumero');?>">
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
										<input id="txtComplemento" name="txtComplemento" type="text" maxlength="50" placeholder="Apto, Bloco, etc" class="form-control" value="<?PHP echo set_value('txtComplemento');?>">
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
										<input id="txtBairro" name="txtBairro" type="text"placeholder="Vila, Vale, Jardim, etc" class="form-control" required value="<?PHP echo set_value('txtBairro');?>">
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
										<input id="txtCidade" name="txtCidade" type="text"placeholder="São Paulo, Minas Gerais, etc" class="form-control" required value="<?PHP echo set_value('txtCidade');?>">
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
										<input id="txtEstado" name="txtEstado" type="text"placeholder="SP" class="form-control" maxlength=2 required value="<?PHP echo set_value('txtEstado');?>">
									</div>
								</div>
							</div>
						</div>
						<button class="btn btn-success notika-btn-success waves-effect" name="acao" value="add">Cadastrar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Data Table area End-->