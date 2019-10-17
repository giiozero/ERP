<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Fornecedores extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
		$this->load->model('MFornecedores','',TRUE);
		$this->load->library('session');
	}
	public function index()
	{
		//DB
		$data['load_fornecedores'] = $this->MFornecedores->showFornecedores()->result();
		//Template
		$this->template->set('title', 'Fornecedores');
		$this->template->load('default_layout', 'fornecedores/fornecedores', $data);
	}
	
	public function add()
	{
		$this->load->library('form_validation');
		//JS
		$data['load_js'] = array('cadastros','pages/fornecedores');		
		$data['load_js_ext'] = array('https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js');
		//Template
		$this->template->set('title', 'Fornecedores - Adicionar Cadastro');		
		$this->template->load('default_layout', 'fornecedores/add', $data);
	}
	public function visualizar($cnpj)
	{
		$data['cnpj'] = $cnpj;
		//JS 
		$data['load_js_ext'] = array('https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js');
		//DB
		$data['load_fornecedor']=$this->MFornecedores;
		//Template
		$this->template->set('title', 'Fornecedores - Visão Específica');
		$this->template->load('default_layout', 'fornecedores/especifica', $data);
	}
	public function editar($cnpj)
	{
		$data['cnpj'] = $cnpj;
		//JS 
		$data['load_js_ext'] = array('https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js');
		//DB
		$data['load_fornecedor']=$this->MFornecedores;
		//Template
		$this->template->set('title', 'Fornecedores - Visão Específica');
		$this->template->load('default_layout', 'fornecedores/edit', $data);
	}
	
	public function save(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('txtCnpj', 'Cnpj', 'required|min_length[15]', array('min_length' => 'A quantidade de dígitos do %s é insuficiente.'));
		if ($this->form_validation->run() == FALSE)
		{
			$this->template->load('default_layout', 'fornecedores/add'); 
			return true;
		}
		else
		{
			$this->index();
		} 

		//Other
		foreach ($_POST as $key => $value) {
			if ($key != 'acao') {
				$_data[substr($key,3)]=$value;
			}
		}
		//DB
		if($this->input->post('acao') == 'add') {			
			$this->MFornecedores->addFornecedor($_data);
			
		} else if ($this->input->post('acao') == 'edit') {
			$this->MFornecedores->editFornecedor($_data);
		}
		//Template
		$this->index();
	}	
}