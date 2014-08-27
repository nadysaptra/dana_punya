<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Lap_daerah extends CI_Controller {
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
		$data['title']='Dashbord Admin';
		$data['caption']="form Entri Data Produksi";
		$data['header_title']='<div align="center"><h>Dinas Perikanan Daerah Istimewa Yogyakarta</h></div>';
		$data['alamat']='<div align="center">Jl.Sagan No.III/4 Yogkarta</div>';
		$data['daerah']=$this->produksi_model->ambil_daerah();
		//halaman yang di load
		$this->load->view('includes/header',$data);
		$this->load->view('admin/dashbord',$data);
		$this->load->view('admin/navi_admin',$data);
		$this->load->view('admin/daerah',$data);
		$this->load->view('includes/footer',$data);
		}
		else{
			redirect('login');
		}	
	}
}

/* Location: ./application/controllers/produksi.php */