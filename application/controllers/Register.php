<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Pelanggan_model');
	}


	public function index()
	{	
		$this->load->view('auth/register');
	}

	public function daftar()
	{
		$this->form_validation->set_rules('namadepan', 'Nama Depan', 'required');
		$this->form_validation->set_rules('namabelakang', 'Nama Belakang', 'required');
		$this->form_validation->set_rules('username', 'User Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
		// if ($password != $confirm_password) {
		// 	echo "password tidak sama";
		// }
		// else{
	
		// 	echo $namadepan;	
		// 	echo $namabelakang;	
		// 	echo $email;	
		// 	echo $username;	
		// 	echo $password;	
		// 	echo $telp;
		// }
		if($this->form_validation->run() == false){
			$this->load->view('auth/register');
		}else{
			$namadepan = $this->input->post('namadepan');
			$namabelakang = $this->input->post('namabelakang');
			$email = $this->input->post('email');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->Pelanggan_model->set_pelanggan($namadepan,$namabelakang,$email,$username,$password);
			$this->load->view('auth/login');
		}
	}
}
