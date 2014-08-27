<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Staff extends CI_Controller {
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
		$data['title']='Dashbord Staff';
		$data['caption']="Biodata";
		$data['header_title']='<div align="center"><h>Dinas Perikanan Daerah Istimewa Yogyakarta</h></div>';
		$data['alamat']='<div align="center">Jl.Sagan No.III/4 Yogkarta</div>';
		$data['biodata']=$this->adminweb_model->index($userdata);
		//halaman yang di load
		$this->load->view('includes/header',$data);
		$this->load->view('staff/nav_staff_admin',$data);
		$this->load->view('includes/header_2',$data);
		$this->load->view('staff/profil_biodata_staff',$data);

		$this->load->view('includes/footer',$data);
		}
		else{
			redirect('login');
		}
		
	}
	function validasi(){
	$this->form_validation->set_rules('password','<div class="notice marker-on-bottom  bg-white fg-red">  Harus di isi </div>' ,'trim|required|xss_clean','</div>');
	$this->form_validation->set_rules('email','<div class="notice marker-on-bottom  bg-white fg-red">  Harus di isi </div>' ,'trim|required|xss_clean','</div>');
	}
	
	function resetpass(){
	if($this->session->userdata('logged_in')){
	$this->validasi();
	if($this->form_validation->run() == FALSE){
			redirect('staff?act=reset_password&notice=gagal');
			}else{
		$session_data = $this->session->userdata('logged_in');
		$data['userdata']=$session_data['username'];
		$userdata=$data['userdata'];
		$data['id']=$session_data['id'];
		$session_id=$data['id'];
		$this->adminweb_model->reset_pass_staff($session_id);
		redirect('staff?act=reset_password&notice=sukses');
			}
		}
		else{
			redirect('login?notice="harus login  dulu gan"');
		}
		
	}
	
	
	
	function keluar(){
	redirect('login/logout');
	}
	
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */