<form method="POST" action="<?PHP echo base_url(); ?>produtos/saveCategoria">	
							<div class="modal fade" id="addCategoria" role="dialog" style="display:none;">
								<div class="modal-dialog modal-sm">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">×</button>
										</div>
										<div class="modal-body">
											<h2>Adicione uma nova Categoria</h2>
											<input type="text" class="form-control" name="novaCategoria" placeholder="Digite aqui..."><br/>
										</div>
										<div class="modal-footer">
											<button type="submit" class="btn btn-success waves-effect">Salvar</button>
											<button type="button" class="btn btn-warning waves-effect" data-dismiss="modal">Fechar</button>
										</div>
									</div>
								</div>
							</div>
						</form>