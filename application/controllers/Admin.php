<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}


	public function index()
	{
		$this->load->view('admin/template/head');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/template/foot');
	}

	public function login()
	{
		$this->load->view('admin/login');
	}

	public function data_paket()
	{
		$this->load->view('admin/template/head');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/paket');
		$this->load->view('admin/template/foot');
	}

	public function kelola_blog()
	{
		$this->load->view('admin/template/head');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/blog');
		$this->load->view('admin/template/foot');
	}
	public function tambah_blog()
	{
		$this->load->view('admin/template/head');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/tambah-blog');
		$this->load->view('admin/template/foot');
	}
	
}
