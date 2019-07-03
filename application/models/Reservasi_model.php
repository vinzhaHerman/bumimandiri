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

	function get_reservasi_onproses(){ //butuh data: pelanggan, paket program, check in, check out
		$result=$this->db->query("SELECT pelanggan.nama_depan, paket_riwayat.check_in, paket_riwayat.check_out, paket_program.nama_program FROM (paket_riwayat INNER JOIN pelanggan ON pelanggan.id=paket_riwayat.pelanggan_id) INNER JOIN paket_program ON paket_program.id=paket_riwayat.paket_program_id;");
        return $result;

		// $result=$this->db->query("SELECT pelanggan.nama_depan, paket_program.nama_program, paket_onproses.check_out FROM ((memesan ))");
  //       return $result;
	}

	function get_reservasi_proses(){
		$result=$this->db->query("SELECT reservasi.kode_reservasi, pelanggan.nama_depan, paket_program.nama_program, paket_riwayat.check_in, paket_riwayat.check_out FROM ((reservasi INNER JOIN pelanggan ON reservasi.id_pelanggan=pelanggan.id)INNER JOIN paket_dipesan )");
        return $result;
	}

}