<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Reservasi_model');
	}


	public function index()
	{
		
		$this->load->view('pages/book');
	}

	public function search(){
		$datein = $this->input->post('datein');
		$dateout = $this->input->post('dateout');
		$data['res']=$this->Reservasi_model->src_paket_by_date($datein, $dateout);
		$this->load->view('pages/paket_list', $data, false);
	}

	public function paket_detail()
	{
		$this->load->view('pages/paketpilihan');
	}
	
}
