<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Model {

	function get_pemesanan(){
		$result=$this->db->query("SELECT reservasi.kode_reservasi, pelanggan.nama_depan, reservasi.bukti, paket_program.nama_program, reservasi.pembayaran FROM (reservasi INNER JOIN pelanggan ON reservasi.id_pelanggan=pelanggan.id) INNER JOIN paket_program ON reservasi.paket_program_id=paket_program.id;");
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


    function set_pemesanan($kodereservasi,$datein,$dateout,$idprogram,$id){
    	$result=$this->db->query("INSERT INTO reservasi (kode_reservasi,tgl_masuk,tgl_keluar,paket_program_id,id_pelanggan) VALUES('$kodereservasi','$datein','$dateout','$idprogram','$id')");
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