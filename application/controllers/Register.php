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
		$this->load->view('template/head_bootstrap');
		$this->load->view('auth/register');
		$this->load->view('template/foot_bootstrap');
	}

	public function daftar()
	{
		// $this->form_validation->set_rules('namadepan', 'Nama Depan', 'required');
		// $this->form_validation->set_rules('namabelakang', 'Nama Belakang', 'required');
		// $this->form_validation->set_rules('username', 'User Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

		if($this->form_validation->run() == false){
			// redirect(base_url('Register'));
			$this->load->view('template/head_bootstrap');
			$this->load->view('auth/register');
			$this->load->view('template/foot_bootstrap');
		}else{
			$email = $this->input->post('email');
			$cek = $this->Pelanggan_model->check_email_dup($email);
			if ($cek->num_rows() > 0) {
				$this->load->view('template/head_bootstrap');
				$this->load->view('auth/register');
				$this->load->view('template/foot_bootstrap');
				echo "email sudah terdaftar";
			}
			else{
				$namadepan = $this->input->post('namadepan');
				$namabelakang = $this->input->post('namabelakang');
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$pwhashed = password_hash($password, PASSWORD_BCRYPT);
				$this->Pelanggan_model->set_pelanggan($namadepan,$namabelakang,$email,$username,$pwhashed);
				$this->load->view('template/head_bootstrap');
				$this->load->view('auth/login');
				$this->load->view('template/foot_bootstrap');
			}
		}
	}
}
