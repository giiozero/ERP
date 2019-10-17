<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('MHome','',TRUE);
		$this->load->helper('url');
		$data = array();
    }
	public function index()
	{
		$data['load_count'] = $this->MHome;
		$this->template->set('title', 'Home');
		$this->template->load('default_layout', 'home', $data);
	}
}