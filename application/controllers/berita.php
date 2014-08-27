<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Berita extends CI_Controller {
function __construct()
	{
		parent::__construct();
		$this->load->model('adminweb_model');
		
	}
	public function index()
	{
	if($this->session->userdata('logged_in')){
		$session_data = $this->session->userdata('logged_in');
		$data['userdata']=$session_data['username'];
		$userdata=$data['userdata'];
		$level=$session_data['level'];
		$data['title']='Dashbord Admin Berita';
		//halaman yang di load
		$this->load->view('includes/header',$data);
		$this->load->view('admin/dashbord',$data);
		$this->load->view('admin/navi_admin',$data);
		$this->load->view('admin/berita',$data);
		$this->load->view('includes/footer',$data);
		}
		else{
			redirect('login?notice="harus login  dulu gan"');
		}
		
	}
	
	
	function keluar(){
	redirect('login/logout');
	}
	
	
	
	
	
	
}

/* End of file berita.php */
/* Location: ./application/controllers/admin.php */