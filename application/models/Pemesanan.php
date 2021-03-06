<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Model {

	function get_pemesanan(){
		$result=$this->db->query("SELECT reservasi.id, reservasi.kode_reservasi, reservasi.id_pelanggan, reservasi.paket_program_id, pelanggan.nama_depan, reservasi.bukti, paket_program.nama_program, reservasi.pembayaran FROM (reservasi INNER JOIN pelanggan ON reservasi.id_pelanggan=pelanggan.id) INNER JOIN paket_program ON reservasi.paket_program_id=paket_program.id ORDER BY reservasi.id DESC;");
        return $result;
	}

	function get_pemesanan_byid($id){
		$result=$this->db->query("SELECT reservasi.id, reservasi.kode_reservasi, reservasi.id_pelanggan, reservasi.paket_program_id, reservasi.tagihan, reservasi.jumlah_org, reservasi.tgl_masuk, reservasi.tgl_keluar, pelanggan.nama_depan, pelanggan.nama_belakang, reservasi.bukti, paket_program.nama_program, reservasi.pembayaran FROM (reservasi INNER JOIN pelanggan ON reservasi.id_pelanggan=pelanggan.id) INNER JOIN paket_program ON reservasi.paket_program_id=paket_program.id WHERE kode_reservasi='$id'");
        return $result;
	}

	function get_pemesanan_row(){
		$result=$this->db->query("SELECT COUNT(*) FROM reservasi;");
        return $result;
    }

	function get_pemesanan_pending(){
		$result=$this->db->query("SELECT COUNT(*) FROM reservasi WHERE pembayaran='';");
        return $result;
    }

    function get_pembatalan(){
        $result=$this->db->query("SELECT pembatalan.id, pembatalan.alasan, pembatalan.norek, pembatalan.an, reservasi.id, reservasi.kode_reservasi, pelanggan.nama_depan FROM pembatalan INNER JOIN reservasi ON pembatalan.reservasi_id=reservasi.id INNER JOIN pelanggan ON pembatalan.pelanggan_id=pelanggan.id");
        return $result;
    }


    function set_pemesanan($kodereservasi, $datein, $dateout, $idprogram, $jmlorang, $tagihan, $userid){
    	$result=$this->db->query("INSERT INTO reservasi (
            kode_reservasi,
            tgl_masuk,
            tgl_keluar,
            paket_program_id,
            jumlah_org,
            tagihan,
            pembayaran,
            id_pelanggan) VALUES('$kodereservasi', '$datein', '$dateout', '$idprogram', '$jmlorang', '$tagihan', 'MENUNGGU PEMBAYARAN', '$userid')");
        return $result;
    }

    function update_status($prop,$kodereservasi){
    	$result=$this->db->query("UPDATE reservasi SET pembayaran='$prop' WHERE kode_reservasi='$kodereservasi'");
        return $result;
    }

    function update_status_lunas($kodereservasi){
    	$result=$this->db->query("UPDATE reservasi SET pembayaran='LUNAS' WHERE kode_reservasi='$kodereservasi'");
        return $result;
    }
    function sent_to_proses($datein,$dateout,$reservasiid,$programid,$pelangganid){
        $result=$this->db->query("INSERT INTO paket_riwayat (
            check_in,
            check_out,
            reservasi_id,
            paket_program_id,
            pelanggan_id) VALUES('$datein', '$dateout', '$reservasiid', '$programid', '$pelangganid')");
        return $result;
    }

    function update_status_batal($kodereservasi){
    	$result=$this->db->query("UPDATE reservasi SET pembayaran='DIBATALKAN' WHERE kode_reservasi='$kodereservasi'");
        return $result;
    }

    function update_status_reqbatal($kodereservasi){
        $result=$this->db->query("UPDATE reservasi SET pembayaran='PERMINTAAN BATAL' WHERE kode_reservasi='$kodereservasi'");
        return $result;
    }





    function upload_bukti($bukti,$kode){
    	$result=$this->db->query("UPDATE reservasi SET bukti='$bukti' WHERE kode_reservasi='$kode'");
        return $result;
    }





    function set_pembatalan($alasan, $norek, $an, $rid, $userid){
        $result=$this->db->query("INSERT INTO pembatalan (alasan, norek, an, reservasi_id, pelanggan_id) VALUES ('$alasan', '$norek', '$an', '$rid', '$userid')");
        return $result;
    }





    public function kode_otomatis(){
		$this->db->select('right(kode_reservasi,3) as kode', false);
		$this->db->order_by('kode_reservasi','desc');
		$this->db->limit(1);
		$query=$this->db->get('reservasi');
		if($query->num_rows()<>0){
			$data=$query->row();
			$kode=intval($data->kode)+1;
		}else{
			$kode=1;
		}
		$today = date("dm");
		$kodemax=str_pad($kode,7,"0", STR_PAD_LEFT);
		$kodejadi='RS'.$today.$kodemax;

		return $kodejadi;
	}

}