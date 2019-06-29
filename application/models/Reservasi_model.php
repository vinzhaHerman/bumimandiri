<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservasi_model extends CI_Model {

	function get_paket(){
		$result=$this->db->query("SELECT * FROM reservasi");
        return $result;
	}
	function get_reservasi_detailed(){
		$result=$this->db->query("SELECT pelanggan.nama_depan, reservasi.tgl_masuk, reservasi.tgl_keluar, reservasi.metode, reservasi.pembayaran, paket_jenis.nama_paket FROM ((paket_dipesan INNER JOIN paket_jenis ON paket_dipesan.paket_jenis_id=paket_jenis.id) INNER JOIN reservasi ON reservasi.id=paket_dipesan.reservasi_id) INNER JOIN pelanggan ON reservasi.id_pelanggan=pelanggan.id;");
        return $result;
	}

}