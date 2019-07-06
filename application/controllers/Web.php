<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Pelanggan_model');
	}


	public function index()
	{
		$this->load->view('template/head');
		$this->load->view('pages/home');
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar');
		$this->load->view('template/footer');
	}





	function auth(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => $password
            );
        $cek = $this->Pelanggan_model->get_login($username,$password)->num_rows();
        if($cek > 0){
 			$res=$cek->result()[0];
            $data_session = array(
            	'id' => $res->$id,
                'nama' => $res->nama_depan,
                'status' => "login"
                );
 
            $this->session->set_userdata($data_session);
 
            // echo $this->agent->referrer();
            // redirect(base_url());
            print_r($this->session->set_userdata());
 
        }else{
        	$this->session->set_flashdata('message', 'Masukan Username dan Password yang benar');
            redirect(base_url('login'));
        }
    }
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
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
	public function about_us()
	{
		$this->load->view('template/head');
		$this->load->view('pages/about_us');
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar');
		$this->load->view('template/footer');
	}
	public function bantuan()
	{
		$this->load->view('pages/bantuan');
	}
	public function galery()
	{
		$this->load->view('template/head');
		$this->load->view('pages/galery');
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar');
		$this->load->view('template/footer');
	}

	public function booking()
	{
		if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
		$this->load->view('pages/booking');
	}





	public function cari_paket(){
		$eventdate=$this->input->post('eventdate');
        $eventtitle=$this->input->post('eventtitle');
 
        $this->Reservasi_model->src_paket_by_date();
        redirect('pages/paket_list');
	}
	
}
