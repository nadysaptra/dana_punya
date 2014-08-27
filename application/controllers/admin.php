<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
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
		$data['title']='Dashbord Admin';
		$data['caption']="<font color='brown'>Biodata</font>";
		$data['header_title']='<div align="center"><h>Dinas Perikanan Daerah Istimewa Yogyakarta</h></div>';
		$data['alamat']='<div align="center">Jl.Sagan No.III/4 Yogkarta</div>';
		$data['biodata']=$this->adminweb_model->index($userdata);
		//halaman yang di load
		$this->load->view('includes/header',$data);
		$this->load->view('admin/dashbord',$data);
		$this->load->view('admin/navi_admin',$data);
		$this->load->view('includes/header_2',$data);
		$this->load->view('admin/profil_biodata',$data);

		$this->load->view('includes/footer',$data);
		}
		else{
			redirect('login?notice="harus login  dulu gan"');
		}
		
	}
	
	
	function keluar(){
	redirect('login/logout');
	}
	
	function validasi(){
	$this->form_validation->set_rules('password','<div class="notice marker-on-bottom  bg-white fg-red">  Harus di isi </div>' ,'trim|required|xss_clean','</div>');
	}
	
	function resetpass(){
	if($this->session->userdata('logged_in')){
	$this->validasi();
	if($this->form_validation->run() == FALSE){
			redirect('admin?act=reset_password&notice=gagal');
			}else{
		$session_data = $this->session->userdata('logged_in');
		$data['userdata']=$session_data['username'];
		$userdata=$data['userdata'];
		$data['id']=$session_data['id'];
		$session_id=$data['id'];
		$this->adminweb_model->reset_pass_admin($session_id);
		redirect('admin?act=reset_password&notice=sukses');
			}
		}
		else{
			redirect('login?notice="harus login  dulu gan"');
		}
		
	}
	
	function new_user(){
	 $this->adminweb_model->new_user();
	 redirect('admin?act=add_user&notice=sukses');
	
	}
	
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */