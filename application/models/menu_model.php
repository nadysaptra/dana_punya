<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu_model extends CI_Model { 
function index(){

$sql="SELECT * FROM tbl_data_menu order by `order` ";
return $this->db->query($sql);

}


}