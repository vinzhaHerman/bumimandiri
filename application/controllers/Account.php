<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('Pelanggan_model');
		$this->load->model('Reservasi_model');
        $this->load->model('Testimoni_model');
		$this->load->model('Pemesanan');
	}


	public function index()
	{	
		if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
		$data['userdata']=$this->Pelanggan_model->getuser($this->session->userdata('id'));
		$data['userriwayat']=$this->Pelanggan_model->get_reservasi_byuser($this->session->userdata('id'));
        $data['userreview']=$this->Testimoni_model->get_testimoni_by_userid($this->session->userdata('id'));
		// $data=array('res'=>$this->Pelanggan_model->get_user_data());
        // $data['user_res']=$this->Pelanggan_model->get_reservasi_byuser($this->session->userdata('id'));
		$this->load->view('user/user_profile', $data);
	}

	public function update_profile()
	{
		$namadepan = $this->input->post('namadepan');
		$namabelakang = $this->input->post('namabelakang');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$alamat = $this->input->post('alamat');
		$telp = $this->input->post('telp');
		$userid = $this->session->userdata('id');
		$this->Pelanggan_model->update_profile($namadepan,$namabelakang,$email,$username,$alamat,$telp,$userid);
		redirect(base_url("Account"));
	}

    public function set_testimoni()
    {
        $sum = $this->input->post('sum');
        $para = $this->input->post('para');
        $id = $this->input->post('id');
        $this->Testimoni_model->set_testimoni($sum, $para, $id);
        redirect(base_url("Account"));
    }


	public function upload_bukti($id="")
	{
		if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
		$data['userdata']=$this->Pelanggan_model->getuser($this->session->userdata('id'));
		$data['userriwayat']=$this->Reservasi_model->get_reservasi_bykode($id);
		// $data=array('res'=>$this->Pelanggan_model->get_user_data());
        // $data['user_res']=$this->Pelanggan_model->get_reservasi_byuser($this->session->userdata('id'));
        $fileupload = $this->input->post('fileupload');
		$this->load->view('user/upload', $data, array('error' => ' ' ));
	}

	 public function do_upload()
     {
        $config['upload_path']          = './upload/bukti/';
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
            	$bukti = $upload_data['file_name'];

     			$kode = $this->input->post('kode');

                $this->Pemesanan->upload_bukti($bukti,$kode);
                redirect(base_url("Account"));
        }
     }

     public function update_foto()
     {
        $config['upload_path']          = './upload/user/profile_photos/';
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
            	$foto = $upload_data['file_name'];
     			$id = $this->session->userdata('id');

                $this->Pelanggan_model->update_foto($foto,$id);
                redirect(base_url("Account"));
        }
     }





     public function bukti_pemesanan($id)
     {
        $data=array('res'=>$this->Pemesanan->get_pemesanan_byid($id));
        // $data['res']=$this->Pemesanan->get_pemesanan_byid($id);
        $this->load->view('user/bukti_pemesanan', $data);
     }
}
