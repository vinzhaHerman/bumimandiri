<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	function login_inf($table,$where){
		return $this->db->get_where($table,$where);
	}

}