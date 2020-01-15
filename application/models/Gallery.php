<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galery extends CI_Model{

    function get_all(){
        $result=$this->db->query("SELECT photo_id,GROUP_CONCAT(tag_id) FROM photos_with_tags 
                                        INNER JOIN photos ON photo_id=photos.id 
                                        INNER JOIN tags ON tag_id=tags.id 
                                        GROUP BY photo_id");
        return $result;
    }

    function get_one($id){
        $result=$this->db->query("SELECT photo_id,GROUP_CONCAT(tag_id) FROM photos_with_tags 
                                        INNER JOIN photos ON photo_id=photos.id 
                                        INNER JOIN tags ON tag_id=tags.id 
                                        WHERE photo_id='$id'");
        return $result;
    }

    function get_photo_only(){
        $result=$this->db->query("SELECT * FROM photos_with_tags 
                                        INNER JOIN photos ON photo_id=photos.id 
                                        INNER JOIN tags ON tag_id=tags.id")
    }
    
}
?>