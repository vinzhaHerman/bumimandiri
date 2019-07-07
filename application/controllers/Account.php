<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Pelanggan_model');
		$this->load->model('Pemesanan');
	}


	public function index()
	{	
		if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
		$data['userdata']=$this->Pelanggan_model->getuser($this->session->userdata('id'));
		$data['userriwayat']=$this->Pelanggan_model->get_reservasi_byuser($this->session->userdata('id'));
		// $data=array('res'=>$this->Pelanggan_model->get_user_data());
        // $data['user_res']=$this->Pelanggan_model->get_reservasi_byuser($this->session->userdata('id'));
		$this->load->view('user/user_profile', $data);
	}


	public function upload_bukti($id="")
	{
		if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
		$data['userdata']=$this->Pelanggan_model->getuser($this->session->userdata('id'));
		$data['userriwayat']=$this->Pelanggan_model->get_reservasi_byuser_empty($this->session->userdata('id'));
		// $data=array('res'=>$this->Pelanggan_model->get_user_data());
        // $data['user_res']=$this->Pelanggan_model->get_reservasi_byuser($this->session->userdata('id'));
        $fileupload = $this->input->post('fileupload');
		$this->load->view('user/upload', $data);
	}
	
	public function upload_file()
	{
		$fileupload = $this->input->post('fileupload');
		$kode = $this->input->post('kode_reservasi');
		$this->Pemesanan->upload_file($fileupload, $kode);
		echo "success";
	}
}
