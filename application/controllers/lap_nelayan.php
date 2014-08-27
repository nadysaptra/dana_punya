<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lap_nelayan extends CI_controller { 
function __construct()
	{
		parent::__construct();
		$this->load->library('pagination');	
		$this->load->model('produksi_model');
	}
	
	function index(){
		if($this->session->userdata('logged_in')){
		$session_data = $this->session->userdata('logged_in');
		$content['userdata']=$session_data['username'];
		$content['base_url']=base_url().'nelayan';
		$content['title']='Dashbord Admin';
		$content['header_title']='<div align="center"><h>Dinas Perikanan Daerah Istimewa Yogyakarta</h></div>';
		$content['alamat']='<div align="center">Jl.Sagan No.III/4 Yogkarta</div>';
		$content['caption']="Laporan Data Nelayan";
		$content['nelayan']=$this->produksi_model->ambil_data_nelayan();
		$this->load->view('includes/header',$content);
		$this->load->view('admin/dashbord',$content);
		$this->load->view('admin/navi_admin',$content);
		$this->load->view('admin/lap_nelayan',$content);
		$this->load->view('includes/footer',$content);
		}
				else{
			redirect('login');
		}
		}
	


}