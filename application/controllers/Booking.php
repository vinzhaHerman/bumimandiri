<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Paket_model');
	}


	public function index()
	{
		$data=array(
			'res'=>$this->Paket_model->get_paket_program()
		);
		$this->load->view('pages/book', $data);
	}

	public function paket_detail()
	{
		$this->load->view('pages/paketpilihan');
	}
	
}
