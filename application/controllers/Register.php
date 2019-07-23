<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}


	public function index()
	{	
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
		$this->load->view('auth/register');
	}

	public function daftar()
	{
		$namadepan = $this->input->post('namadepan');
		$namabelakang = $this->input->post('namabelakang');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$confirm_password = $this->input->post('confim_password');
		$telp = $this->input->post('telp');
		if ($password != $confirm_password) {
			echo "password tidak sama";
		}
		else{
	
			echo $namadepan;	
			echo $namabelakang;	
			echo $email;	
			echo $username;	
			echo $password;	
			echo $telp;
		}
	}
}
