<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}


	public function index()
	{
		$this->load->view('template/head_bootstrap');
		$this->load->view('auth/login');
		$this->load->view('template/foot_bootstrap');
	}
}
