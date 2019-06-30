<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket_model extends CI_Model {

	function get_paket(){
		$result=$this->db->query("SELECT * FROM paket");
        return $result;
	}

	function get_paket_detailed(){
		$result=$this->db->query("SELECT paket_durasi.sub_nama_paket, paket_durasi.durasi, paket_jenis.deskripsi, paket_jenis.nama_paket FROM paket_durasi INNER JOIN paket_jenis ON paket_durasi.paket_jenis_id=paket_jenis.id;");
        return $result;
	}

	function get_paket_program(){
		$result=$this->db->query("SELECT * FROM paket_program");
        return $result;
	}

}