<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cari_users extends CI_Controller {
function __construct()
	{
		parent::__construct();
		$this->load->model('adminweb_model');	
	}

function index(){
			if($this->session->userdata('logged_in')){
		$session_data = $this->session->userdata('logged_in');
		$data['userdata']=$session_data['username'];
		$level=$session_data['level'];
		$data['title']='Dashbord Admin data Pengguna ';
		$data['caption']='Dashbord Admin data Pengguna';
		$data['header_title']='<div align="center"><h>Dinas Perikanan Daerah Istimewa Yogyakarta</h></div>';
		$data['alamat']='<div align="center">Jl.Sagan No.III/4 Yogkarta</div>';
		$data['pengguna']=$this->adminweb_model->search_user($this->input->post('cari'));
		$this->load->view('includes/meta_header',$data);
		$this->load->view('admin/navi_admin',$data);
		$this->load->view('admin/datapengguna',$data);
		$this->load->view('includes/footer',$data);
		}
		else{
			redirect('login');
		}
		}
		}