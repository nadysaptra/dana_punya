<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_controller { 
function __construct()
	{
		parent::__construct();
		$this->load->model('menu_model');
		$this->load->library('pagination');	
	}
	
	function index(){
	
	$list['menu']=$this->get_menu();
	$this->load->view('menu',$list);
	}
	
	function get_menu(){
	
	$exe=$this->menu_model->index();
	foreach($exe->result()as $rows ){
	$list['parent_id']=$rows->parent_id;
	}
	
	}
}