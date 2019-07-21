<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket_model extends CI_Model {

	// ---------------------------------------------- ambil data ------------------------------------------------------ //
	function get_paket(){
		$result=$this->db->query("SELECT * FROM paket_jenis");
        return $result;
	}

	function get_paket_program(){
		$result=$this->db->query("SELECT * FROM paket_program");
        return $result;
	}

	function get_paket_byid($id){
		$result=$this->db->query("SELECT * FROM paket_jenis WHERE id='$id'");
        return $result;
	}

	function get_paket_by_programid($id){
		$result=$this->db->query("SELECT * FROM paket_program WHERE paket_jenis_id='$id'");
        return $result;
	}

	function get_program_byid($id){
		$result=$this->db->query("SELECT * FROM paket_program WHERE id='$id'");
        return $result;
	}

	function get_program_byidreservasi($id){
		$result=$this->db->query("SELECT * FROM paket_program WHERE id='$id'");
        return $result;
	}

	function get_program_by_paket($id){
		$result=$this->db->query("SELECT * FROM paket_program WHERE paket_jenis_id='$id'");
        return $result;
	}

	function get_paket_detailed(){
		$result=$this->db->query("SELECT paket_durasi.sub_nama_paket, paket_durasi.durasi, paket_jenis.deskripsi, paket_jenis.nama_paket FROM paket_durasi INNER JOIN paket_jenis ON paket_durasi.paket_jenis_id=paket_jenis.id;");
        return $result;
	}
	// ---------------------------------------------- END ambil data ------------------------------------------------------ //





	// ---------------------------------------------- Manipulasi data ------------------------------------------------------ //
	function set_paket($namapaket, $deskripsi){
		$result=$this->db->query("INSERT INTO paket_jenis (nama_paket, deskripsi) VALUES('$namapaket','$deskripsi')");
        return $result;
	}

	function update_paket($id, $namapaket, $deskripsi){
		$result=$this->db->query("UPDATE paket_jenis SET nama_paket='$namapaket', deskripsi='$deskripsi' WHERE id='$id'");
        return $result;
	}

	function delete_paket($id=""){
		$result=$this->db->query("DELETE FROM paket_jenis WHERE id='$id'");
        return $result;
	}
	// ---------------------------------------------- END manipulasi data ------------------------------------------------------ //





	// ---------------------------------------------- riwayat ------------------------------------------------------ //
	// function get_program_riwayat($programid){
	// 	$date = date('Y-m-d');
	// 	$result=$this->db->query("
	// 		SELECT * FROM paket_riwayat 
	// 		WHERE 
	// 		(check_in < '$date' AND check_out < '$date') AND (paket_program_id='$programid');");
 //        return $result;
	// }

	function get_program_riwayat($programid){
		$date = date('Y-m-d');
		$result=$this->db->query("
			SELECT paket_riwayat.check_in, 
			paket_riwayat.check_out, 
			reservasi.kode_reservasi, 
			reservasi.jumlah_org, 
			paket_program.nama_program, 
			pelanggan.nama_depan, 
			paket_riwayat.paket_program_id 
			FROM 
			((paket_riwayat INNER JOIN reservasi ON paket_riwayat.reservasi_id=reservasi.id) 
			INNER JOIN paket_program ON paket_riwayat.paket_program_id=paket_program.id) 
			INNER JOIN pelanggan ON paket_riwayat.pelanggan_id=pelanggan.id 
			WHERE 
			(check_in < '$date' AND check_out < '$date') 
			AND 
			(paket_riwayat.paket_program_id='$programid');");
        return $result;
	}


}