<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produksi extends CI_Controller {
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
		$data['ikan']=$this->produksi_model->ambil_jenisikan();
		$data['berat']=$this->produksi_model->ambil_satuanberat();
		
		$table=$this->produksi_model->index($this->uri->segment(3),$this->input->post('cari'));;
		$data['produksi']=$table;
		$data['halaman']=$this->pagination->create_links();
		//halaman yang di load
		$this->load->view('includes/header',$data);
		$this->load->view('admin/dashbord',$data);
		$this->load->view('admin/navi_admin',$data);
		$this->load->view('admin/produksi',$data);
		$this->load->view('includes/footer',$data);
		}
		else{
			redirect('login');
		}
		
	}
	
	function keluar(){
	redirect('login/logout');
	}
	
	function validasi(){
		$this->form_validation->set_rules('nama_produksi', 'nama_produksi', 'required');
		$this->form_validation->set_rules('jenis_produksi', 'jenis_produksi', 'required');
		$this->form_validation->set_rules('jumlah_produksi', 'jumlah_produksi', 'required');
		$this->form_validation->set_rules('tahun_produksi', 'tahun_produksi', 'required');
		$this->form_validation->set_rules('jenis_tangkap', 'jenis_tangkap', 'required');
		$this->form_validation->set_rules('transportasi', 'transportasi', 'required');
		
	}
	
	function hapus($id_produksi){
	$this->produksi_model->hapus_dataproduksi($id_produksi);
	redirect('produksi');
	
	}
	function hapus_ikan($id_ikan){
	$this->produksi_model->hapus_dataikan($id_ikan);
	redirect('produksi');
	}
	function hapus_daerah($id_daerah){
	$this->produksi_model->hapus_datadaerah($id_daerah);
	redirect('produksi');
	
	}
	function hapus_satuan($id_satuan){
	$this->produksi_model->hapus_datasatuan($id_satuan);
	redirect('produksi');
	}

	
	function simpan(){
		$this->validasi();
	if ($this->form_validation->run() == FALSE)
		{
				$link=redirect('produksi?notice=gagal_tersimpan!');
				echo "<script> alert('Data Belum lengkap !!!!!'); windows.location.href='$link' </script>";
		}
		else
		{
				$this->produksi_model->simpan_dataproduksi();
				$link=redirect('produksi?notice=data_telah_tersimpan');
				echo "<script> alert('data telah disimpan'); windows.location.href='$link' </script>";
				
		}
	}
	
	
	function simpan_jenis_ikan(){
	$this->produksi_model->simpan_jenisikan();
	redirect('produksi');
	
	}
	function simpan_kota(){
	$this->produksi_model->simpan_kota();
	redirect('produksi');
	
	}
	function simpan_satuan(){
	$this->produksi_model->simpan_berat();
	redirect('produksi');
	
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/produksi.php */