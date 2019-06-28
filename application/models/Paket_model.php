<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket_model extends CI_Model {

	function get_paket(){
		$result=$this->db->query("SELECT * FROM paket");
        return $result;
	}

}