<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model {

	function get_post(){
		$result=$this->db->query("SELECT * FROM post");
        return $result;
	}

	function get_post_paginate($limit, $start){
		$result = $this->db->get('post', $limit, $start);
        return $result;
	}

	function get_post_limit3(){
		$result=$this->db->query("SELECT * FROM post ORDER BY id DESC limit 3");
        return $result;
	}

	function get_post_byid($id){
		$result=$this->db->query("SELECT * FROM post WHERE id='$id'");
        return $result;
	}

	function get_post_bytype($pt){
		$result=$this->db->query("SELECT * FROM post WHERE post_type='$pt'");
        return $result;
	}

	function get_post_bytype_limit3($pt){
		$result=$this->db->query("SELECT * FROM post WHERE post_type='$pt' ORDER BY id DESC limit 3");
        return $result;
	}





	function set_promosi($judul, $para, $img){
		$date = date('Y-m-d');
		$result=$this->db->query("INSERT INTO post (judul_post, isi_post, gambar_post, date_created, post_type) VALUES ('$judul', '$para', '$img', '$date', '1')");
        return $result;
	}
	function update_post($id, $judul, $para, $img){
		$date = date('Y-m-d');
		$result=$this->db->query("UPDATE post SET judul_post='$judul', isi_post='$para', gambar_post='$img' WHERE id='$id'");
        return $result;
	}
	function set_artikel($judul, $para, $img){
		$date = date('Y-m-d');
		$result=$this->db->query("INSERT INTO post (judul_post, isi_post, gambar_post, date_created, post_type) VALUES ('$judul', '$para','$img', '$date', '2')");
        return $result;
	}
	function set_event($judul, $para, $img){
		$date = date('Y-m-d');
		$result=$this->db->query("INSERT INTO post (judul_post, isi_post, gambar_post, date_created, post_type) VALUES ('$judul', '$para','$img', '$date', '3')");
        return $result;
	}

}
?>