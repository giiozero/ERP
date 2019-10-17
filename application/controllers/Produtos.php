<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Produtos extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
		$this->load->model('MProdutos','',TRUE);
	}
	public function index()
	{
		$data['load_produtos'] = $this->MProdutos->listProdutos();
		$this->load->helper('preco_helper');
		$this->template->set('title', 'Produtos');
		$this->template->load('default_layout', 'produtos/produtos', $data);
	}
	public function add()
	{
		$this->load->library('user_agent');
		$this->load->library('form_validation');
		$data['load_categorias'] = $this->MProdutos->listCategorias()->result();
		$data['load_fornecedores'] = $this->MProdutos->showFornecedores()->result();
		if ($this->input->post('fornecedor')) 
		{
			$data['load_fornecedor'] = $this->MProdutos->showFornecedor($this->input->post('fornecedor'));
		}
		//JS
		$data['load_js'] = array('bootstrap-select/bootstrap-select','maskmoney','chosen/chosen.jquery', 'pages/produtos');
		//TEMPLATE & LIBRARYS

		$this->template->set('title', 'Produtos - Adicionar');
		$this->template->load('default_layout', 'produtos/add', $data);
	}
	
	public function saveCategoria() {
		//TEMPLATE & LIBRARYS
		$this->load->library('form_validation');
		//NOVA CATEGORIA
		$this->form_validation->set_rules('novaCategoria', 'Nova Categoria', 'required|min_length[2]|is_unique[categorias.nome]', 
			array(
				'min_length' => 'A quantidade de dígitos do %s é insuficiente.', 
				'is_unique' => 'Essa categoria já existe.'
			)
		);
		if ($this->form_validation->run() == TRUE)
		{
			$this->MProdutos->addCategoria($this->input->post('novaCategoria'));
			$this->add();
		}
		else
		{$this->add();}
	}
	public function save()
	{
		//TEMPLATE & LIBRARYS
		$this->load->library('form_validation');
		
		// FormValidation
		//NOVO PRODUTO
		$configProdutos = array(
			array(
				'field' => 'txtPorcentagemLucro',
				'label' => 'Porcentagem de Lucro',
				'rules' => 'required',
				'errors' => array(
						'required' => 'O campo %s deve ser preenchido.',
				)
			),
			array(
				'field' => 'txtPrecoLucro',
				'label' => 'Lucro',
				'rules' => 'required',
				'errors' => array(
						'required' => 'O campo %s deve ser preenchido.',
				)
			),
			array(
				'field' => 'txtid_Categoria',
				'label' => 'Categoria',
				'rules' => 'required',
				'errors' => array(
						'required' => 'O campo %s deve ser preenchido.',
				)
			), 
			array(
				'field' => 'txtCod',
				'label' => 'Código',
				'rules' => 'required',
				'errors' => array(
						'required' => 'O campo %s deve ser preenchido.',
				)
			),
			array(
				'field' => 'txtDescricao',
				'label' => 'Descrição',
				'rules' => 'required',
				'errors' => array(
						'required' => 'O campo %s deve ser preenchido.',
				)
			),
			array(
				'field' => 'txtPrecoCusto',
				'label' => 'Preço de Custo',
				'rules' => 'required',
				'errors' => array(
						'required' => 'O campo %s deve ser preenchido.',
				)
			)
		);
		foreach ($_POST as $key => $value) {
			$_data[substr($key,3)]=str_replace(',','.',$value);
		}
	
		$this->form_validation->set_rules($configProdutos);
		if ($this->form_validation->run() == TRUE)
		{
			if ($this->MProdutos->addProduto($_data)) {
				$this->index();
			} else {
				$this->add();
			}
		}
		else
		{
			$this->add();
		}
	}
}