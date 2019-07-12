<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket_model extends CI_Model {

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

	function get_program_byid($id){
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

}