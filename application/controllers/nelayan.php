<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nelayan extends CI_controller { 
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
			$content['caption']="form Data Nelayan";
			$content['nelayan']=$this->produksi_model->ambil_data_nelayan();
			$content['perairan']=$this->produksi_model->ambil_data_perairan();
			$content['kapal']=$this->produksi_model->ambil_data_kapal();
			$content['kabupaten']=$this->produksi_model->ambil_daerah();
			$content['tangkap']=$this->produksi_model->ambil_alat_tangkap();
			$content['ikan']=$this->produksi_model->ambil_jenisikan();
			// cek jika terdapat pesan melalui session
			$content['msg'] = $this->session->flashdata('msg');
			
			$this->load->view('includes/header',$content);
			$this->load->view('admin/dashbord',$content);
			$this->load->view('admin/navi_admin',$content);
			$this->load->view('admin/nelayan',$content);
			$this->load->view('includes/footer',$content);
		}else{
			redirect('login');
		}
	}

	function input(){

	}

	function simpan(){
		// untuk upload gambar
		$config['upload_path'] = './doc/foto/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('foto'))
		{
			$this->session->set_flashdata('msg' , $this->upload->display_errors());
			redirect('nelayan');
		}else{
			$data = $this->upload->data();
			// tambahkan ke db
			$this->db->trans_start();
					$this->db
					->set('nama_nelayan' , $this->input->post('nama_nelayan'))
					->set('id_perairan' , $this->input->post('id_perairan'))
					->set('id_kabupaten' , $this->input->post('id_kabupaten'))
					->set('jenis_nelayan' , $this->input->post('jenis_nelayan'))
					->set('id_tangkap' , $this->input->post('id_tangkap'))
					->set('nama_unit' , $this->input->post('nama_unit'))
					->set('id_ikan' , $this->input->post('id_ikan'))
					->set('kode_kapal' , $this->input->post('id_kapal'))
					->set('gambar' , $config['upload_path'] . $data['file_name'])
					->insert('tbl_data_nelayan');
			$this->db->trans_complete();
			if ($this->db->trans_status() === FALSE){

				$this->session->set_flashdata('msg' ,'Data gagal di tambah.');
				redirect('nelayan');
			}else{
				$this->session->set_flashdata('msg' ,'Data berhasil di tambah');
				redirect('nelayan');
			}
		}
		echo "<pre>";
		print_r($_POST);
	}
	


}