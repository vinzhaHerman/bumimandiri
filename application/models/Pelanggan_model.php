<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan_model extends CI_Model {

	function login_inf($table,$where){
		return $this->db->get_where($table,$where);
	}

	function get_login($username,$password){
    	$result=$this->db->query("SELECT * FROM pelanggan WHERE username='$username' && password='$password' ");
        return $result;	
    }

	function get_user_data(){
		$result=$this->db->query("SELECT * FROM pelanggan");
        return $result;
	}

	function get_pelanggan_byid($id){
		$result=$this->db->query("SELECT * FROM pelanggan WHERE id='$id'");
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
		$result = $this->db->query("SELECT * FROM reservasi INNER JOIN paket_program ON reservasi.paket_program_id=paket_program.id WHERE id_pelanggan='$id'");
		return $result;
	}

	function get_reservasi_byuser_empty($id){
		$result = $this->db->query("SELECT * FROM reservasi INNER JOIN paket_program ON reservasi.paket_program_id=paket_program.id WHERE id_pelanggan='$id' AND bukti=''");
		return $result;
	}

	function get_reservasi_bykode($kode){
		$result = $this->db->query("SELECT * FROM reservasi WHERE kode_reservasi='$kode'");
		return $result;
	}


	function get_pelanggan_riwayat($userid){
		$date = date('Y-m-d');
		$result=$this->db->query("SELECT * FROM paket_riwayat WHERE (check_in < '$date' AND check_out < '$date') AND pelanggan_id='$userid');");
        return $result;
	}

	function get_riwayat_byuser($pelangganid){
		$date = date('Y-m-d');
		$result=$this->db->query("
			SELECT paket_riwayat.check_in, 
			paket_riwayat.check_out, 
			reservasi.kode_reservasi, 
			reservasi.jumlah_org, 
			paket_program.nama_program, 
			paket_riwayat.paket_program_id 
			FROM 
			(paket_riwayat INNER JOIN reservasi ON paket_riwayat.reservasi_id=reservasi.id) 
			INNER JOIN paket_program ON paket_riwayat.paket_program_id=paket_program.id 
			WHERE 
			(check_in < '$date' AND check_out < '$date') 
			AND 
			(paket_riwayat.pelanggan_id='$pelangganid');");
        return $result;
	}




	function update_profile($namadepan,$namabelakang,$email,$username,$alamat,$telp,$userid){
    	$result=$this->db->query("UPDATE pelanggan SET nama_depan='$namadepan', nama_belakang='$namabelakang', email='$email', username='$username', alamat='$alamat', telp='$telp' WHERE id='$userid'");
        return $result;
    }


	function update_foto($foto,$id){
		$result=$this->db->query("UPDATE pelanggan SET foto_profil='$foto' WHERE id='$id'");
        return $result;
	}


}