<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
        $this->load->helper('text');
		$this->load->model('Admin_model');
		$this->load->model('Paket_model');
		$this->load->model('Petugas_model');
		$this->load->model('Pelanggan_model');
		$this->load->model('Reservasi_model');
		$this->load->model('Post_model');
		$this->load->model('Pemesanan');
	}




// -------------------------------------------fungsi session----------------------------------------------
	function auth(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => $password
            );
        $hsl = $this->Admin_model->login_inf("admins",$where);
        if($hsl->num_rows() > 0){
 			$res=$hsl->result()[0];
            $data = array(
            	's_id' => $res->id,
                's_username' => $res->username,
                's_level' => $res->level,
                's_status' => "login"
                );
 
            $this->session->set_userdata($data);
 
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
 // -------------------------------------------END fungsi session----------------------------------------------





// -------------------------------------------login admin----------------------------------------------
	public function login()
	{
		$this->load->view('admin/login');
	}
// -------------------------------------------END login admin----------------------------------------------





	public function index()
	{
		if($this->session->userdata('s_status') != "login"){
            redirect(base_url("admin/login"));
        }
		$this->load->view('admin/template/head');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/template/foot');
	}





// -------------------------------------------Pemesanan----------------------------------------------
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
		$kodereservasi = $this->input->post('kodereservasi');
		$this->load->view('admin/template/head');
		$this->load->view('admin/template/sidebar');
        $this->load->view('admin/pemesanan_opsi', $data);
		$this->load->view('admin/template/foot');
	}
	public function ubah_status(){
		$kodereservasi = $this->input->post('kodereservasi');
		$prop = $this->input->post('prop');
		$this->Pemesanan->update_status($prop,$kodereservasi);
	}
	public function ubah_status_batal($kodereservasi){
		$this->Pemesanan->update_status_batal($kodereservasi);
		redirect(base_url("admin/pemesanan"));
	}
	public function send_to_proses(){
		$kodereservasi = $this->input->post('kodereservasi');
		$this->Pemesanan->update_status_lunas($kodereservasi);
		$datein = $this->input->post('datein');
		$dateout = $this->input->post('dateout');
		$reservasiid = $this->input->post('reservasiid');
		$programid = $this->input->post('programid');
		$pelangganid = $this->input->post('pelangganid');
		$this->Pemesanan->sent_to_proses($datein,$dateout,$reservasiid,$programid,$pelangganid);
		redirect(base_url("admin/pemesanan"));
	}
// -------------------------------------------END pemesanan----------------------------------------------





// -------------------------------------------Data reservasi----------------------------------------------
	public function reservasi()
	{
		$data=array('res'=>$this->Reservasi_model->get_reservasi_proses());
		$this->load->view('admin/template/head');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/reservasi', $data);
		$this->load->view('admin/template/foot');
	}
	public function waiting_list()
	{
		$data=array('res'=>$this->Reservasi_model->get_reservasi_waiting());
		$this->load->view('admin/template/head');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/reservasi', $data);
		$this->load->view('admin/template/foot');
	}
// -------------------------------------------END Data reservasi----------------------------------------------





// -------------------------------------------Data Paket----------------------------------------------
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
		$this->load->view('admin/paket_add');
		$this->load->view('admin/template/foot');
	}
	public function ubah_paket($id="")
	{
		$data=array('res'=>$this->Paket_model->get_paket_byid($id));
		$this->load->view('admin/template/head');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/paket_opsi', $data);
		$this->load->view('admin/template/foot');
	}
	public function laporan_paket()
	{
		$data=array('res'=>$this->Paket_model->get_paket());
		$this->load->view('admin/template/head');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/paket_laporan', $data);
		$this->load->view('admin/template/foot');
	}
	public function set_paket(){
		$id = $this->input->post('id');
		$namapaket = $this->input->post('namapaket');
		$deskripsi = $this->input->post('deskripsi');
		$this->Paket_model->set_paket($namapaket, $deskripsi);
		redirect(base_url("admin/data_paket"));
	}
	public function update_paket(){
		$id = $this->input->post('id');
		$namapaket = $this->input->post('namapaket');
		$deskripsi = $this->input->post('deskripsi');
		$this->Paket_model->update_paket($id, $namapaket, $deskripsi);
		redirect(base_url("admin/data_paket"));
	}
	public function delete_paket($id){
		$this->Paket_model->delete_paket($id);
		redirect(base_url("admin/data_paket"));
	}
// -------------------------------------------END Data Paket----------------------------------------------





// -------------------------------------------Data Program----------------------------------------------
	public function data_program()
	{
		$data=array('res'=>$this->Paket_model->get_paket_program());
		$this->load->view('admin/template/head');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/program', $data);
		$this->load->view('admin/template/foot');
	}
	public function tambah_program()
	{
		$this->load->view('admin/template/head');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/program_add');
		$this->load->view('admin/template/foot');
	}
	public function ubah_program($id)
	{
		$data=array(
			'res'=>$this->Paket_model->get_program_byid($id),
			'respaket'=>$this->Paket_model->get_paket()
		);
		$this->load->view('admin/template/head');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/program_opsi', $data);
		$this->load->view('admin/template/foot');
	}
	public function laporan_program()
	{
		$data=array('res'=>$this->Paket_model->get_paket());
		$this->load->view('admin/template/head');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/laporan_paket', $data);
		$this->load->view('admin/template/foot');
	}
	public function set_program(){
		$id = $this->input->post('id');
		$namapaket = $this->input->post('namapaket');
		$deskripsi = $this->input->post('deskripsi');
		$this->Paket_model->set_paket($namapaket, $deskripsi);
		redirect(base_url("admin/data_paket"));
	}
	public function update_program(){
		$id = $this->input->post('id');
		$namapaket = $this->input->post('namapaket');
		$deskripsi = $this->input->post('deskripsi');
		$this->Paket_model->update_paket($id, $namapaket, $deskripsi);
		redirect(base_url("admin/data_paket"));
	}
	public function delete_program($id){
		$this->Paket_model->delete_paket($id);
		redirect(base_url("admin/data_paket"));
	}

	public function riwayat_program($programid){
		$data=array('res'=>$this->Paket_model->get_program_riwayat($programid));
		$this->load->view('admin/template/head');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/program_riwayat', $data);
		$this->load->view('admin/template/foot');
	}
// -------------------------------------------END Data Program----------------------------------------------





// -------------------------------------------Data Petugas----------------------------------------------
	public function data_petugas()
	{
		$data=array('res'=>$this->Petugas_model->get_petugas());
		$this->load->view('admin/template/head');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/petugas_master', $data);
		$this->load->view('admin/template/foot');
	}
	public function ubah_petugas($id="")
	{
		$data=array(
			'res'=>$this->Petugas_model->get_petugas_byid($id)
		);
		$this->load->view('admin/template/head');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/petugas_opsi', $data);
		$this->load->view('admin/template/foot');
	}
// -------------------------------------------END Data Petugas----------------------------------------------





// -------------------------------------------Data Pelanggan----------------------------------------------
	public function data_pelanggan()
	{
		$data=array('res'=>$this->Pelanggan_model->get_user_data());
		$this->load->view('admin/template/head');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/pelanggan_master', $data);
		$this->load->view('admin/template/foot');
	}
	public function detail_pelanggan($id="")
	{
		$data=array(
			'res'=>$this->Pelanggan_model->get_pelanggan_byid($id)
		);
		$this->load->view('admin/template/head');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/pelanggan_opsi', $data);
		$this->load->view('admin/template/foot');
	}
	public function riwayat_pelanggan($pelangganid){
		$data=array('res'=>$this->Pelanggan_model->get_riwayat_byuser($pelangganid));
		$this->load->view('admin/template/head');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/pelanggan_riwayat', $data);
		$this->load->view('admin/template/foot');
	}
// -------------------------------------------END Data Pelanggan----------------------------------------------





// -------------------------------------------Data blog----------------------------------------------
	public function kelola_blog()
	{
		$data=array(
			'promosi'=>$this->Post_model->get_post_bytype(1),
			'artikel'=>$this->Post_model->get_post_bytype(2),
			'event'=>$this->Post_model->get_post_bytype(3)
		);
		$this->load->view('admin/template/head');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/blog', $data);
		$this->load->view('admin/template/foot');
	}
	public function tambah_promosi()
	{
		$this->load->view('admin/template/head');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/tambah_promosi');
		$this->load->view('admin/template/foot');
	}
	public function set_promosi()
     {
        $config['upload_path']          = './upload/promosi/';
        $config['allowed_types']        = 'jpg|png';
        $config['maintain_ratio'] 		= TRUE;
        $config['encrypt_name'] 		= TRUE;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('fileupload'))
        {
                $error = array('error' => $this->upload->display_errors());

                redirect($_SERVER['HTTP_REFERER'], $error);
        }
        else
        {
        		$upload_data = $this->upload->data();
            	$data = array('upload_data' => $upload_data);
            	$img = $upload_data['file_name'];

     			$judul = $this->input->post('judul');
     			$para = $this->input->post('para');

                $this->Post_model->set_promosi($judul, $para, $img);
                redirect(base_url("Admin/kelola_blog"));
        }
     }
     public function tambah_artikel()
	{
		$this->load->view('admin/template/head');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/tambah_artikel');
		$this->load->view('admin/template/foot');
	}
     public function set_artikel()
     {
        $config['upload_path']          = './upload/artikel/';
        $config['allowed_types']        = 'jpg|png';
        $config['maintain_ratio'] 		= TRUE;
        $config['encrypt_name'] 		= TRUE;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('fileupload'))
        {
                $error = array('error' => $this->upload->display_errors());

                redirect($_SERVER['HTTP_REFERER'], $error);
        }
        else
        {
        		$upload_data = $this->upload->data();
            	$data = array('upload_data' => $upload_data);
            	$img = $upload_data['file_name'];

     			$judul = $this->input->post('judul');
     			$para = $this->input->post('para');

                $this->Post_model->set_artikel($judul, $para, $img);
                redirect(base_url("Admin/kelola_blog"));
        }
     }
// -------------------------------------------END Data blog----------------------------------------------
	
}
