<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Compras extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
		$this->load->model('MCompras','',TRUE);
		
	}
	public function index()
	{
		$data = '';
		$this->template->set('title', 'Compras');
		$this->template->load('default_layout', 'compras/compras', $data);
	}
	public function add()
	{
		$this->load->library('user_agent');
		$this->load->library('form_validation');
		//DB
		$data['load_fornecedores'] = $this->MCompras->showFornecedores()->result();
		
		if ($this->input->post('fornecedor')) 
		{
			$data['load_fornecedor'] = $this->MCompras->showFornecedor($this->input->post('fornecedor'));
		}
		//JS
		$data['load_js'] = array('cadastros', 'pages/compras', 'animation/animation-active','bootstrap-select/bootstrap-select','maskmoney','chosen/chosen.jquery');
		$data['load_js_ext'] = array('https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js','https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js');
		//TEMPLATE
		$this->template->set('title', 'Compras - Adicionar Solicitação');
		$this->template->load('default_layout', 'compras/add', $data);
	}
}