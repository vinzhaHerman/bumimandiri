<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimoni_model extends CI_Model {

	function get_testimoni(){
		$result=$this->db->query("SELECT * FROM testimoni ORDER BY id_testimoni DESC");
        return $result;
	}

	function get_testimoni_detailed(){
		$result=$this->db->query("SELECT testimoni.id_testimoni, testimoni.summary, testimoni.paragraph, testimoni.tgl, testimoni.isActive, pelanggan.nama_depan, pelanggan.foto_profil FROM testimoni INNER JOIN pelanggan ON testimoni.id_pelanggan=pelanggan.id WHERE isActive='0' ORDER BY testimoni.id_testimoni DESC");
        return $result;
	}

	function get_testimoni_limit(){
		$result=$this->db->query("SELECT * FROM testimoni WHERE isActive='1' ORDER BY id_testimoni DESC limit 6");
        return $result;
	}

	function get_testimoni_by_userid($userid){
		$result=$this->db->query("SELECT * FROM testimoni WHERE id_pelanggan='$userid'");
        return $result;
	}

	function set_testimoni($sum, $para, $userid){
		$date = date('Y-m-d');
		$result=$this->db->query("INSERT INTO testimoni (summary, paragraph, tgl, id_pelanggan, isActive) VALUES ('$sum', '$para', '$date', '$userid', '0')");
        return $result;
	}

	function update_testimoni($sum, $para, $id){
		$result=$this->db->query("UPDATE testimoni SET summary='$sum', paragraph='$para' WHERE id_testimoni='$id'");
        return $result;
	}

	function publish_testimoni($id){
		$result=$this->db->query("UPDATE testimoni SET isActive='1' WHERE id_testimoni='$id'");
        return $result;
	}

	function delete_testimoni($id){
		$result=$this->db->query("DELETE testimoni WHERE id_testimoni='$id'");
        return $result;
	}

}
?>