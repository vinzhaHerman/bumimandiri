<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservasi_model extends CI_Model {

	function get_reservasi(){
		$result=$this->db->query("SELECT * FROM reservasi");
        return $result;
	}
	function get_reservasi_bykode($kode){
		$result=$this->db->query("SELECT * FROM reservasi WHERE kode_reservasi='$kode'");
        return $result;
	}
	function get_reservasi_detailed(){
		$result=$this->db->query("SELECT pelanggan.nama_depan, reservasi.tgl_masuk, reservasi.tgl_keluar, reservasi.metode, reservasi.pembayaran, paket_jenis.nama_paket FROM ((paket_dipesan INNER JOIN paket_jenis ON paket_dipesan.paket_jenis_id=paket_jenis.id) INNER JOIN reservasi ON reservasi.id=paket_dipesan.reservasi_id) INNER JOIN pelanggan ON reservasi.id_pelanggan=pelanggan.id;");
        return $result;
	}

	function get_reservasi_onproses(){ //butuh data: pelanggan, paket program, check in, check out
		$result=$this->db->query("SELECT pelanggan.nama_depan, paket_riwayat.check_in, paket_riwayat.check_out, paket_program.nama_program FROM (paket_riwayat INNER JOIN pelanggan ON pelanggan.id=paket_riwayat.pelanggan_id) INNER JOIN paket_program ON paket_program.id=paket_riwayat.paket_program_id;");
        return $result;
	}

	// function get_reservasi_proses(){
	// 	$result=$this->db->query("SELECT * FROM paket_riwayat WHERE
 //        (check_in <= '2019-07-29' AND check_out >= '2019-07-29') OR
 //        (check_in <= '2019-07-29' AND check_out >= '2019-07-29') OR
 //        (check_in >= '2019-07-29' AND check_out <= '2019-07-29')");
 //        return $result;
	// }

	function get_reservasi_waiting(){
		$date = date('Y-m-d');
		$result=$this->db->query("SELECT paket_riwayat.check_in, paket_riwayat.check_out, reservasi.kode_reservasi, reservasi.jumlah_org, paket_program.nama_program, pelanggan.nama_depan, pelanggan.email FROM ((paket_riwayat INNER JOIN reservasi ON paket_riwayat.reservasi_id=reservasi.id) INNER JOIN paket_program ON paket_riwayat.paket_program_id=paket_program.id) INNER JOIN pelanggan ON paket_riwayat.pelanggan_id=pelanggan.id WHERE
        (check_in >= '$date' AND check_out >= '$date') AND reservasi.pembayaran='LUNAS'");
        return $result;
	}

	function get_reservasi_proses(){
		$date = date('Y-m-d');
		$result=$this->db->query("SELECT paket_riwayat.check_in, paket_riwayat.check_out, reservasi.kode_reservasi, reservasi.jumlah_org, paket_program.nama_program, pelanggan.nama_depan, pelanggan.email FROM ((paket_riwayat INNER JOIN reservasi ON paket_riwayat.reservasi_id=reservasi.id) INNER JOIN paket_program ON paket_riwayat.paket_program_id=paket_program.id) INNER JOIN pelanggan ON paket_riwayat.pelanggan_id=pelanggan.id WHERE
        (check_in <= '$date' AND check_out >= '$date') OR
        (check_in <= '$date' AND check_out >= '$date') OR
        (check_in >= '$date' AND check_out <= '$date') AND reservasi.pembayaran='LUNAS'");
        return $result;
	}

	function src_paket_by_date($datein, $dateout){
		$result=$this->db->query("SELECT * FROM paket_program WHERE id NOT IN (SELECT paket_program_id FROM reservasi WHERE
   		(tgl_masuk <= '$datein' AND tgl_keluar >= '$datein') OR
   		(tgl_masuk <= '$dateout' AND tgl_keluar >= '$dateout') OR
   		(tgl_masuk >= '$datein' AND tgl_keluar <= '$dateout'));");
        return $result;
	}

	function src_reservasi_detail_filterDate($datein,$dateout){
		$result=$this->db->query("SELECT reservasi.id, reservasi.kode_reservasi, reservasi.tgl_masuk, reservasi.tgl_keluar, paket_jenis.nama_paket, paket_program.nama_program, reservasi.jumlah_org, pelanggan.nama_depan FROM reservasi INNER JOIN paket_program on reservasi.paket_program_id=paket_program.id INNER JOIN paket_jenis on paket_program.paket_jenis_id=paket_jenis.id INNER JOIN pelanggan on reservasi.id_pelanggan=pelanggan.id WHERE (tgl_keluar>='$datein' and tgl_keluar<='$dateout') AND reservasi.pembayaran='LUNAS' " );
        return $result;

	}

	// function src_paket_by_date_and_id($idprogram, $datein, $dateout){
	// 	$result=$this->db->query("SELECT * FROM paket_program WHERE id='$idprogram' NOT IN (SELECT paket_program_id FROM reservasi WHERE
 //   		(tgl_masuk <= '$datein' AND tgl_keluar >= '$datein') OR
 //   		(tgl_masuk <= '$dateout' AND tgl_keluar >= '$dateout') OR
 //   		(tgl_masuk >= '$datein' AND tgl_keluar <= '$dateout'));");
 //        return $result;
	// }

	// function src_paket_by_date_and_id($idprogram, $datein, $dateout){
	// 	$result=$this->db->query("SELECT * FROM paket_program WHERE id='$idprogram' NOT IN (SELECT paket_program_id FROM paket_riwayat WHERE
 //   		(check_in <= '$datein' AND check_out >= '$datein') OR
 //   		(check_in <= '$dateout' AND check_out >= '$dateout') OR
 //   		(check_in >= '$datein' AND check_out <= '$dateout'));");
 //        return $result;
	// }

	function src_paket_by_date_and_id($idprogram, $datein, $dateout){
		$result=$this->db->query("SELECT * FROM paket_program WHERE id='$idprogram' NOT IN (SELECT paket_program_id FROM reservasi WHERE
        (tgl_masuk <= '$datein' AND tgl_keluar >= '$datein') OR
        (tgl_masuk <= '$dateout' AND tgl_keluar >= '$dateout') OR
        (tgl_masuk >= '$datein' AND tgl_keluar <= '$dateout'))");
        return $result;
	}

	function count_date(){
		$tgl1 = "2013-01-23";// pendefinisian tanggal awal
		$add = "";
		$tgl2 = date('Y-m-d', strtotime('+'.$add.'days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
		echo $tgl2; //print tanggal
	}

	

}