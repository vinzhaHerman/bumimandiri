<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan_model extends CI_Model {

	function login_inf($table,$where){
		return $this->db->get_where($table,$where);
	}

	function get_user_data(){
		$result=$this->db->query("SELECT * FROM pelanggan");
        return $result;
	}

	function get_user_id_byid(){
		$result=$this->db->query("SELECT id FROM pelanggan");
        return $result;
	}

	function getuser($id){
		$result=$this->db->query("SELECT * FROM pelanggan WHERE id='$id'");
        return $result;
	}

	function get_reservasi_byuser($id){
		$query = $this->db->query('');
		return $query->result();
	}

}