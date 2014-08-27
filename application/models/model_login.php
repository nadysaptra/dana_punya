<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_login extends CI_Model{  
 function login($username, $password ) {
   $this -> db -> select('*');
   $this -> db -> from('tbl_data_adminweb');
   $this -> db -> where('username', $username);
   $this -> db -> where('password', md5($password));
   $query = $this -> db -> get();
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }

 }
function register(){
$lev='Pengunjung';
$q=array('username'=>$this->input->post('username'),'password'=>md5($this->input->post('password')),
'email'=>$this->input->post('email'),'decrypt'=>$this->input->post('password'),'level'=>$lev
);
$this->db->insert('tbl_data_adminweb',$q);
}
   }
