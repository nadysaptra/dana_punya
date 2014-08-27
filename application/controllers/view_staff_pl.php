<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class View_staff_PL extends CI_Controller {
function __construct()
	{
		parent::__construct();
		$this->load->model('produksi_model');
		$this->load->library('pagination');
		$this->load->library('form_validation');
		
	}
	public function index()
	{
	if($this->session->userdata('logged_in')){
		$session_data = $this->session->userdata('logged_in');
		$data['userdata']=$session_data['username'];
		$level=$session_data['level'];
		$data['title']='Dashbord  Staff  Admin Laporan PL';
		$data['caption']="<h1>Laporan Berdasarkan Perairan Laut</h1>";
		$data['header_title']='<div align="center"><h>Dinas Perikanan Daerah Istimewa Yogyakarta</h></div>';
		$data['alamat']='<div align="center">Jl.Sagan No.III/4 Yogkarta</div>';
		$data['produksi']=$this->produksi_model->ambil_data_berdasarkan_pl();
		$this->load->view('includes/header',$data);
		$this->load->view('staff/nav_staff_admin',$data);
		$this->load->view('staff/view_staff_pl',$data);
		$this->load->view('includes/footer',$data);
		}
		else{
			redirect('login');
		}
		
	
	
	
	}
	
	}