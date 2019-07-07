<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Admin_model');
		$this->load->model('Paket_model');
		$this->load->model('Reservasi_model');
		$this->load->model('Pemesanan');
	}





	function auth(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => $password
            );
        $cek = $this->Admin_model->login_inf("admins",$where)->num_rows();
        if($cek > 0){
 
            $data_session = array(
                'nama' => $username,
                'status' => "login"
                );
 
            $this->session->set_userdata($data_session);
 
            redirect(base_url("admin"));
 
        }else{
        	$this->session->set_flashdata('message', 'Masukan Username dan Password yang benar');
            redirect(base_url('admin/login'));
        }
    }
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('admin/login'));
    }

	public function login()
	{
		$this->load->view('admin/login');
	}


	public function index()
	{
		if($this->session->userdata('status') != "login"){
            redirect(base_url("admin/login"));
        }
		$this->load->view('admin/template/head');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/template/foot');
	}






	public function pemesanan()
	{
		$data=array('res'=>$this->Pemesanan->get_pemesanan());
		$this->load->view('admin/template/head');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/pemesanan', $data);
		$this->load->view('admin/template/foot');
	}
	public function opsi_pemesanan($id=""){
		$data=array(
            'res'=>$this->Pemesanan->get_pemesanan_byid($id)
        );
		$this->load->view('admin/template/head');
		$this->load->view('admin/template/sidebar');
        $this->load->view('admin/opsi_pemesanan', $data);
		$this->load->view('admin/template/foot');
	}
	public function ubah_status(){
		$kodereservasi = $this->input->post('kodereservasi');
		$prop = $this->input->post('prop');
		$this->Pemesanan->update_status($prop,$kodereservasi);
	}





	public function reservasi()
	{
		$data=array('res'=>$this->Reservasi_model->get_reservasi_proses());
		$this->load->view('admin/template/head');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/reservasi', $data);
		$this->load->view('admin/template/foot');
	}






	public function data_paket()
	{
		$data=array('res'=>$this->Paket_model->get_paket());
		$this->load->view('admin/template/head');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/paket', $data);
		$this->load->view('admin/template/foot');
	}
	public function tambah_paket()
	{
		$this->load->view('admin/template/head');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/add_paket');
		$this->load->view('admin/template/foot');
	}
	public function ubah_paket($id="")
	{
		$data=array('res'=>$this->Paket_model->get_paket_byid($id));
		$this->load->view('admin/template/head');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/opsi_paket', $data);
		$this->load->view('admin/template/foot');
	}
	public function update_paket(){
		// $kodereservasi = $this->input->post('kodereservasi');
		// $prop = $this->input->post('prop');
		// $this->Pemesanan->update_status($prop,$kodereservasi);
	}






	public function data_program()
	{
		$data=array('res'=>$this->Paket_model->get_paket_program());
		$this->load->view('admin/template/head');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/paket_program', $data);
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
