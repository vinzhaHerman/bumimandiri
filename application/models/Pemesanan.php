<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Model {

	function get_pemesanan(){
		$result=$this->db->query("SELECT reservasi.kode_reservasi, pelanggan.nama_depan, paket_dipesan.jumlah, reservasi.bukti, reservasi.pembayaran FROM(reservasi INNER JOIN paket_dipesan ON reservasi.id=paket_dipesan.reservasi_id) INNER JOIN pelanggan ON reservasi.id_pelanggan=pelanggan.id;");
        return $result;
	}

}