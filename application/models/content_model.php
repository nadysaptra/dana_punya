<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Content_model extends CI_Model { 
function Menu(){
$sql="SELECT * FROM tbl_data_menu order by `order` ";
return $this->db->query($sql);
}
function berita_head(){
$sql="SELECT * FROM  `tbl_data_berita` ";
return $this->db->query($sql);
}

}