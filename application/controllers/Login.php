<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller 
{
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('MLogin','',TRUE);
		$this->load->library('form_validation');
		$this->load->helper('url');
		define('avisoLogado', '<div class="alert alert-danger" align="center">Você já está logado.</div>');

	}
	public function index(){
		if (empty($this->session->userdata('username'))) {
			$this->template->load('login_layout', 'login');
		} else {
			$this->session->set_flashdata('avisoLogado', avisoLogado);
			redirect(base_url());
		}
		
	}

	public function logar(){
		if (empty($this->session->userdata('username'))) {
			$data['acao'] = 'logar';
			$this->form_validation->set_rules('username', 'Usuario', 'required', array('required'=>'O campo usuário não pode estar em branco.'));
			$this->form_validation->set_rules('password', 'Senha', 'required', array('required'=>'O campo de senha não pode estar em branco.'));
			if ($this->form_validation->run() == FALSE)
			{
			  $this->template->load('login_layout', 'login',$data);
			}
			else
			{
				$query = $this->MLogin->login_user($_POST);
				if($query->num_rows() == 1){
					$this->session->set_userdata('username', $this->input->post('username'));
					redirect(base_url());
				}else{
					$data['error'] = '<div class="alert alert-warning">Usuário ou Senha não encontrados.</div>';
					$this->template->load('login_layout', 'login',$data);
				}
			}
		} else {
			$this->session->set_flashdata('avisoLogado', avisoLogado);
			redirect(base_url());
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}

	//INATIVO
	public function cadastrar(){ 
		$this->form_validation->set_rules('username', 'Usuario', 'required', array('required'=>'O campo %s não pode estar em branco.'));
		$this->form_validation->set_rules('email', 'Email', 'required', array('required'=>'O campo %s não pode estar em branco.'));
		$this->form_validation->set_rules('password', 'Senha', 'required', array('required'=>'O campo %s não pode estar em branco.'));
		$this->form_validation->set_rules('confpassword', 'Confirme a Senha', 'required|matches[password]', array('matches'=>'A %s não confere.','required'=>'O campo %s não pode estar em branco.'));

		if ($this->form_validation->run() == FALSE)
		{
			$data['acao'] = 'cadastrar';
			$this->template->load('login_layout', 'login',$data);
		}
		else
		{	
			$this->auth->insert_user($_POST);
			$this->session->set_flashdata('register_info', 'Usuário Registrado com Sucesso');
			redirect('login');
		}
	}
}