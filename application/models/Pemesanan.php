<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Model {

	function get_pemesanan(){
		$result=$this->db->query("SELECT reservasi.kode_reservasi, pelanggan.nama_depan, reservasi.bukti, paket_program.nama_program, reservasi.pembayaran FROM (reservasi INNER JOIN pelanggan ON reservasi.id_pelanggan=pelanggan.id) INNER JOIN paket_program ON reservasi.paket_program_id=paket_program.id;");
        return $result;
	}

}