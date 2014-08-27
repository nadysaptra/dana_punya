<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {
function __construct()
	{
		parent::__construct();
		
	}
	public function index()
	{
	if($this->session->userdata('logged_in')){
		$session_data = $this->session->userdata('logged_in');
		$data['userdata']=$session_data['username'];
		$level=$session_data['level'];
		$data['title']='Dashbord Admin';
		$data['header_title']='<div align="center"><h>Dinas Perikanan Daerah Istimewa Yogyakarta</h></div>';
		$data['alamat']='<div align="center">Jl.Sagan No.III/4 Yogkarta</div>';
		
		//halaman yang di load
		$this->load->view('includes/meta_header',$data);
		$this->load->view('admin/start_sreen',$data);
		}
		else{
			$this->notice_gagal();
		}
		
	}
	
	function staff(){
		if($this->session->userdata('logged_in')){
		$session_data = $this->session->userdata('logged_in');
		$data['userdata']=$session_data['username'];
		$level=$session_data['level'];
		$data['title']='Dashbord Admin';
		$data['header_title']='<div align="center"><h>Dinas Perikanan Daerah Istimewa Yogyakarta</h></div>';
		$data['alamat']='<div align="center">Jl.Sagan No.III/4 Yogkarta</div>';
		
		//halaman yang di load
		$this->load->view('includes/meta_header',$data);
		$this->load->view('staff/start_sreen2',$data);
		}
		else{
			$this->notice_gagal();
		}
	
	
	}
	
	function keluar(){
	redirect('login/logout');
	}
	
	function notice_gagal(){
	echo "<script language='javascript'> alert('Tidak Punya Hak Akses halaman ini , Harap Hubungi administrator!!!'); document.location='login'</script>";
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/home.php */