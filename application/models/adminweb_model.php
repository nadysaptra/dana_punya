<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Adminweb_Model extends CI_Model{
function index($userdata){
$sql = "SELECT * FROM tbl_data_adminweb WHERE username='$userdata'";
return $this->db->query($sql);
}
function view_users(){
$sql="SELECT * FROM tbl_data_adminweb";
return $this->db->query($sql);
}
function reset_pass_admin($session_id){
$q=array('password'=>md5($this->input->post('password')),'decrypt'=>$this->input->post('password'));
$this->db->where('id',$session_id);
$this->db->update('tbl_data_adminweb',$q);
}
function reset_pass_staff($session_id){
$q=array('password'=>md5($this->input->post('password')),'decrypt'=>$this->input->post('password'),'email'=>$this->input->post('email'));
$this->db->where('id',$session_id);
$this->db->update('tbl_data_adminweb',$q);
}
function new_user(){
$e=array('username'=>$this->input->post('username'),'password'=>md5($this->input->post('password')),'level'=>$this->input->post('level'),'decrypt'=>$this->input->post('password'),'Nama'=>$this->input->post('username'));
$this->db->insert('tbl_data_adminweb',$e);
}
function search_user($q=''){
$sql="SELECT * FROM tbl_data_adminweb where username LIKE '%$q%'";
return $this->db->query($sql);
}
function hapus_adminweb($id){
$this->db->where('id', $id);
$this->db->delete('tbl_data_adminweb'); 
}
}