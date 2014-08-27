<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Statistik extends CI_Controller {
function __construct()
	{
		parent::__construct();
		
	}
	
	function index(){
	if($this->session->userdata('logged_in')){
		$session_data = $this->session->userdata('logged_in');
		$data['userdata']=$session_data['username'];
		$userdata=$data['userdata'];
		$level=$session_data['level'];
		$data['title']='Dashbord Admin Statistik';
		$data['caption']="<h1>Statistik</h1>";
		//halaman yang di load
		$this->load->view('includes/header',$data);
		$this->load->view('admin/navi_admin',$data);
		$this->load->view('admin/content_chart',$data);
		}
		else{
			redirect('login');
		}
		
	
	
	}
	
	}