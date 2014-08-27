<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ubah_produksi extends CI_controller {
function __construct()
	{
		parent::__construct();
		$this->load->model('produksi_model');
		$this->load->library('pagination');	
	}
function index(){
if($this->session->userdata('logged_in')){
	$session_data = $this->session->userdata('logged_in');
	$detail=$this->produksi_model->get_idproduksi();
	$content['base_url']=base_url().'produksi';
	$content['title']='Dashbord Admin';
	$content['header_title']='<div align="center"><h>Dinas Perikanan Daerah Istimewa Yogyakarta</h></div>';
	$content['alamat']='<div align="center">Jl.Sagan No.III/4 Yogkarta</div>';
	$content['caption']="form Ubah Data Produksi";
	$content['daerah']=$this->produksi_model->ambil_daerah();
	$content['ikan']=$this->produksi_model->ambil_jenisikan();
	$content['berat']=$this->produksi_model->ambil_satuanberat();
	foreach($detail->result() as $data){
				$content['nama']=$data->nama_produksi;
				$content['jenis_produksi']=$data->jenis_produksi;
				$content['tahun']=$data->tahun_produksi;
				$content['jumlah']=$data->jumlah_produksi;
				$content['sumber']=$data->sumber_perairan;
				$content['kota']=$data->kota;
				$content['jenis_ikan']=$data->jenis_ikan;
				$content['tangkap']=$data->jenis_tangkap;
				$content['unit']=$data->transportasi;
				$content['kode']=$data->id_produksi;
	}
		$content['userdata']=$session_data['username'];
		$level=$session_data['level'];
		$table=$this->produksi_model->ambil_data_produksi();
		$content['produksi']=$table;
		$this->load->view('includes/header',$content);
		$this->load->view('admin/dashbord',$content);
		$this->load->view('admin/navi_admin',$content);
		$this->load->view('admin/ubah_produksi',$content);
		$this->load->view('includes/footer',$content);
		
	}
		else{
			redirect('login');
		}
}
	function update(){
	$this->produksi_model->update_dataproduksi();
	redirect('produksi');
	}


}
