<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alat_tangkap extends CI_controller { 
function __construct()
	{
		parent::__construct();
		$this->load->library('pagination');	
		$this->load->model('produksi_model');
	}
	function index(){
		if($this->session->userdata('logged_in')){
		$data['title']='dashbord admin alat tangkap';
		$data['caption']='list data alat tangkap';
		$data['list']=$this->produksi_model->ambil_data_alattangkap();
		$this->load->view('includes/header',$data);
		$this->load->view('admin/navi_admin',$data);
		$this->load->view('admin/tangkap',$data);
		$this->load->view('includes/footer',$data);
		}
				else{
			redirect('login');
		}
		}
		
	function simpan(){
	$this->produksi_model->simpan_alat_tangkap();
	redirect('alat_tangkap');
	}
	
	function hapus($kode_tangkap){
	$this->produksi_model->hapus_data_alattangkap($kode_tangkap);
	redirect('alat_tangkap?act=hapus_data&notice=sukses');
	}
	
	function validasi(){
	$this->form_validation->set_rules('alat_tangkap','alat tangkap tidak boleh kosong','trim|required|xss_clean');
	if($this->form_validation->run() == FALSE){
			redirect('alat_tangkap?act=form_isi&notice=gagal');
			}else{
			$this->simpan();
			}
	}
	}