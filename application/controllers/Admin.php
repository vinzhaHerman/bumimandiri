<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Paket_model');
		$this->load->model('Reservasi_model');
		$this->load->model('Pemesanan');
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

	public function pemesanan()
	{
		$data=array('res'=>$this->Pemesanan->get_pemesanan());
		$this->load->view('admin/template/head');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/pemesanan', $data);
		$this->load->view('admin/template/foot');
	}

	public function reservasi()
	{
		$data=array('res'=>$this->Reservasi_model->get_reservasi_detailed());
		$this->load->view('admin/template/head');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/reservasi', $data);
		$this->load->view('admin/template/foot');
	}

	public function data_paket()
	{
		$data=array('res'=>$this->Paket_model->get_paket_detailed());
		$this->load->view('admin/template/head');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/paket', $data);
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
