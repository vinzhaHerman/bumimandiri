<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimoni_model extends CI_Model {

	function get_testimoni(){
		$result=$this->db->query("SELECT * FROM testimoni ORDER BY id DESC");
        return $result;
	}

	function get_testimoni_limit(){
		$result=$this->db->query("SELECT * FROM testimoni WHERE isActive='1' ORDER BY id DESC limit 6");
        return $result;
	}

	function get_testimoni_by_userid($userid){
		$result=$this->db->query("SELECT * FROM testimoni WHERE pelanggan_id='$userid'");
        return $result;
	}

	function set_testimoni($sum, $para, $userid){
		$date = date('Y-m-d');
		$result=$this->db->query("INSERT INTO testimoni (summary, paragraph, tgl, id_pelanggan, isActive) VALUES ('$sum', '$para', '$date', '$userid', '0')");
        return $result;
	}

	function publish_testimoni($id){
		$result=$this->db->query("UPDATE testimoni SET isActive='1' WHERE id='$id'");
        return $result;
	}

}
?>