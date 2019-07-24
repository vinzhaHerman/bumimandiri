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





	function set_petugas($username, $password, $nama, $email, $telp, $alamat, $level){
		$result=$this->db->query("INSERT INTO admins (username, password, nama, email, telp, alamat, foto, level) VALUES ('$username', '$password', '$nama', '$email', '$telp', '$alamat', 'default.jpg', '$level')");
        return $result;
	}

	function update_petugas($username, $nama, $email, $telp, $alamat, $level){
		$result=$this->db->query("UPDATE petugas SET username='$username', nama='$nama', email='$email', telp='$telp', alamat='$alamat', level='$level' WHERE id='$id'");
        return $result;
	}

}
?>