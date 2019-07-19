<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Reservasi_model');
		$this->load->model('Paket_model');
		$this->load->model('Pemesanan');
	}


	public function index()
	{
		if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
        $data=array('res'=>$this->Paket_model->get_paket());
		$this->load->view('pages/book', $data);
	}

	public function src_by_paket(){
		$id = $this->input->get('id');
		$data=array('res'=>$this->Paket_model->get_program_by_paket($id));
		$this->load->view('pages/paket_list', $data);
	}





	public function search(){
		if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
		$datein = $this->input->get('datein');
		$dateout = $this->input->get('dateout');
		$data['res']=$this->Reservasi_model->src_paket_by_date($datein, $dateout);
		$this->load->view('pages/paket_list', $data, false);
	}

	public function paket_detail($id)
	{	
		if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
		// $datein = $this->input->post('datein');
		// $dateout = $this->input->post('dateout');
		$data=array('res'=>$this->Paket_model->get_program_byid($id));
		$this->load->view('pages/paketpilihan', $data);
	}

	public function paket_list()
	{
		if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
		$data=array('res'=>$this->Paket_model->get_paket_program());
		$this->load->view('pages/paket_list', $data);
	}





	public function set_pemesanan()
	{
		if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
		$datein = $this->input->post('datein');
		$dateout = $this->input->post('dateout');
		$idprogram = $this->input->post('idprogram');
		$id = $this->session->userdata('id');
		$kodereservasi = $this->Pemesanan->kode_otomatis();

		$data=$this->Reservasi_model->src_paket_by_date_and_id($idprogram, $datein, $dateout);

		echo $data->num_rows();

		// if ($data->num_rows() == 0) {
		// 	echo "silahkan pilih tanggal lain";
		// }
		// else{
		// 	echo "berhasil";
		// }


		// $this->Pemesanan->set_pemesanan($kodereservasi,$datein,$dateout,$idprogram,$id);
		// echo "berhasil";
	}

	public function konfirmasi(){
		$this->load->view('pages/konfirmasi');
	}
	
}
