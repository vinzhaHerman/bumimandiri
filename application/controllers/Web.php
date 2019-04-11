<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}


	public function index()
	{
		$this->load->view('template/head');
		$this->load->view('pages/home');
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar');
		$this->load->view('template/footer');
	}

	public function kegiatan()
	{
		$this->load->view('template/head');
		$this->load->view('pages/kegiatan');
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar');
		$this->load->view('template/footer');
	}
	public function fasilitas()
	{
		$this->load->view('template/head');
		$this->load->view('template/navbar');
		$this->load->view('fasilitas/fasilitaskegiatan');
		$this->load->view('template/footer');
	}
	public function daftarpaket()
	{
		$this->load->view('template/head');
		$this->load->view('template/navbar');
		$this->load->view('daftarpaket/daftarpaket');
		$this->load->view('template/footer');
	}
	public function bantuan()
	{
		$this->load->view('bantuan/head');
		$this->load->view('template/navbar');
		$this->load->view('bantuan/bantuan');
		$this->load->view('template/footer');
	}
	
}
