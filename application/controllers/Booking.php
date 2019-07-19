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
        $idpaket = $this->input->get('idpaket');
		$namapaket = $this->input->get('namapaket');
        $data=array('res'=>$this->Paket_model->get_paket());
		$this->load->view('pages/book', $data);
	}

	public function src_by_paket(){
		$idpaket = $this->input->get('idpaket');
		$namapaket = $this->input->get('namapaket');
		$data=array('res'=>$this->Paket_model->get_program_by_paket($idpaket));
		$this->load->view('pages/paket_list', $data);
	}

	public function paket_detail($id)
	{	
		if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
		// $datein = $this->input->post('datein');
		// $dateout = $this->input->post('dateout');
		$idpaket = $this->input->get('idpaket');
		$namapaket = $this->input->get('namapaket');
		$jmlorang = $this->input->get('jmlorang');
		$hargasatuan = $this->input->get('hargasatuan');
		$total = $jmlorang*$hargasatuan;
		$data=array('res'=>$this->Paket_model->get_program_byid($id));
		$this->load->view('pages/paketpilihan', $data);
	}

	public function cek_pemesanan()
	{
		if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
		$datein = $this->input->get('datein');
		$dateout = $this->input->get('dateout');
		$durasi = $this->input->get('durasi');
		$jmlorang = $this->input->get('jmlorang');
		$idprogram = $this->input->get('idprogram');
		$userid = $this->session->userdata('id');
		$usernama = $this->session->userdata('nama_depan');
		$kodereservasi = $this->Pemesanan->kode_otomatis();

		$data=$this->Reservasi_model->src_paket_by_date_and_id($idprogram, $datein, $dateout);

		// echo $data->num_rows();

		if ($data->num_rows() == 0) {
			// echo "silahkan pilih tanggal lain";
			$this->session->set_flashdata('message', 'Tanggal tidak tersedia. Silahkan pilih tanggal lain.');
			redirect($_SERVER['HTTP_REFERER']);
		}
		else{
			// echo "berhasil";
			$data=array(
				'program'=>$this->Paket_model->get_program_byid($idprogram)
			);
			$this->load->view('pages/konfirmasi',$data);
		}


		
	}

	public function set_pemesanan(){
		$datein = $this->input->post('datein');
		$dateout = $this->input->post('dateout');
		$durasi = $this->input->post('durasi');
		$jmlorang = $this->input->post('jmlorang');
		$idprogram = $this->input->post('idprogram');
		$tagihan = $this->input->post('tagihan');
		$userid = $this->session->userdata('id');
		$usernama = $this->session->userdata('nama_depan');
		$kodereservasi = $this->Pemesanan->kode_otomatis();
		$this->Pemesanan->set_pemesanan($kodereservasi, $datein, $dateout, $idprogram, $jmlorang, $tagihan, $userid);
		redirect(base_url("booking/acc_pesanan"));
	}

	public function konfirmasi(){
		$this->load->view('pages/konfirmasi');
	}


	public function acc_pesanan(){
		$this->load->view('pages/acc_pesanan');
	}
	
}
