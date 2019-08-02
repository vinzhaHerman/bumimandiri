<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Pelanggan_model');
		$this->load->model('Post_model');
		$this->load->model('Testimoni_model');
	}


	public function index()
	{
		$data=array(
            'promosi'=>$this->Post_model->get_post_bytype_limit3(1),
            'artikel'=>$this->Post_model->get_post_bytype_limit3(2),
            'testimoni'=>$this->Testimoni_model->get_testimoni_limit()
        );
		$this->load->view('template/head');
		$this->load->view('pages/home', $data);
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
        $cek = $this->Pelanggan_model->get_login($username,$password);
        if($cek->num_rows() > 0){
 			$res=$cek->result()[0];
            $data_session = array(
            	'id' => $res->id,
                'nama_depan' => $res->nama_depan,
                'email' => $res->email,
                'status' => "login"
                );
 
            $this->session->set_userdata($data_session);
 
            // echo $this->agent->referrer();
            redirect(base_url());
            // echo $data_session['id'];
 
        }else{
        	$this->session->set_flashdata('message', 'Nama pengguna atau kata sandi salah.');
            redirect(base_url('login'));
        }
    }
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }




	public function kegiatan()
	{
		$data=array(
            'list'=>$this->Post_model->get_post()
        );
		$this->load->view('template/head');
		$this->load->view('pages/kegiatan', $data);
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar');
		$this->load->view('template/footer');
	}
	public function fasilitas()
	{
		$this->load->view('template/head');
		$this->load->view('pages/fasilitas');
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar');
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
