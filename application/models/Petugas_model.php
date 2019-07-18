<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas_model extends CI_Model {

	function get_petugas(){
		$result=$this->db->query("SELECT * FROM admins");
        return $result;
	}

	function get_petugas_byid($id){
		$result=$this->db->query("SELECT * FROM admins WHERE id='$id'");
        return $result;
	}

}