<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class lap_jenis_ikan extends CI_Controller {
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
		$data['title']='Dashbord Admin Laporan PL';
		$data['caption']="<h1>Laporan Berdasarkan Perairan Laut</h1>";
		$data['header_title']='<div align="center"><h>Dinas Perikanan Daerah Istimewa Yogyakarta</h></div>';
		$data['ikan']=$this->produksi_model->ambil_jenisikan();
		$data['alamat']='<div align="center">Jl.Sagan No.III/4 Yogkarta</div>';
		$this->load->view('includes/header',$data);
		$this->load->view('admin/dashbord',$data);
		$this->load->view('admin/navi_admin',$data);
		$this->load->view('admin/laporan_jenis_ikan',$data);
		$this->load->view('includes/footer',$data);
		}
		else{
			redirect('login');
		}
		
	
	
	
	}
	
	}