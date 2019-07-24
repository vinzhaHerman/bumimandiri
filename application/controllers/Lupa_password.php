<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lupa_password extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Pass_model');
	}


	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');   
         
         if($this->form_validation->run() == FALSE) {  
             $data['title'] = 'Halaman Reset Password | BUMI MANDIRI';  
             $this->load->view('user/lupa_password',$data);  
         }else{  
             $email = $this->input->post('email');   
             $clean = $this->security->xss_clean($email);  
             $userInfo = $this->Pass_model->getUserInfoByEmail($clean);  
               
             if(!$userInfo){  
               $this->session->set_flashdata('sukses', 'email address salah, silakan coba lagi.');  
               redirect(site_url('login'),'refresh');   
             }    
               
             //build token   
                       
             $token = $this->Pass_model->insertToken($userInfo->id);              
             $qstring = $this->base64url_encode($token);           
             $url = site_url() . 'lupa_password/reset_password/token/' . $qstring;  
             $link = '<a href="' . $url . '">' . $url . '</a>';   
               
             $message = '';             
             $message .= 'Hai, anda menerima email ini karena ada permintaan untuk memperbaharui  
                 password anda.<br>';  
             $message .= 'Silakan klik link ini: ' . $link;         
   
             echo $message; //send this through mail  

             
   //           $config = Array(
   //  			'protocol' => 'smtp',
   //  			'smtp_host' => 'ssl://smtp.googlemail.com',
   //  			'smtp_port' => 465,
   //  			'smtp_user' => 'xxx',
   //  			'smtp_pass' => 'xxx',
   //  			'mailtype'  => 'html', 
   //  			'charset'   => 'iso-8859-1'
			// );			 
             $this->load->library('email');
			 $this->email->set_newline("\r\n");	

				$this->email->from('xxxx@gmail.com', 'BUMI MANDIRI');
				$this->email->to('vinzhaherman@gmail.com');

				$this->email->subject('Email Test');
				$this->email->message($message);

				$this->email->send();
             exit;  
           
         }  
	}

	public function reset_password()  
     {  
       $token = $this->base64url_decode($this->uri->segment(4));           
       $cleanToken = $this->security->xss_clean($token);  
         
       $user_info = $this->Pass_model->isTokenValid($cleanToken); //either false or array();          
         
       if(!$user_info){  
         $this->session->set_flashdata('sukses', 'Token tidak valid atau kadaluarsa');  
         redirect(site_url('login'),'refresh');   
       }    
   
       $data = array(  
         'title'=> 'Halaman Reset Password | BUMI MANDIRI',  
         'nama_depan'=> $user_info->nama_depan,   
         'email'=>$user_info->email,   
         'token'=>$this->base64url_encode($token)  
       );  
         
       $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');  
       $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');         
         
       if ($this->form_validation->run() == FALSE) {    
         $this->load->view('user/reset_password', $data);  
       }else{  
                           
         $post = $this->input->post(NULL, TRUE);          
         $cleanPost = $this->security->xss_clean($post);          
         $pass = $cleanPost['password'];          
         $cleanPost['password'] = $pass;  
         $cleanPost['id'] = $user_info->id;  
         unset($cleanPost['passconf']);          
         if(!$this->Pass_model->updatePassword($cleanPost)){  
           $this->session->set_flashdata('sukses', 'Update password gagal.');  
         }else{  
           $this->session->set_flashdata('sukses', 'Password anda sudah  
             diperbaharui. Silakan login.');  
         }  
         redirect(site_url('login'),'refresh');         
       }  
     }  
       
   public function base64url_encode($data) {   
    return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');   
   }   
   
   public function base64url_decode($data) {   
    return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));   
   }    
 
}
