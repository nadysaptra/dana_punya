<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengunjung extends CI_Controller {
function __construct()
	{
		parent::__construct();
		$this->load->model(array('content_model','adminweb_model'));
	}
	public function index()
	{
	if($this->session->userdata('logged_in')){
		$session_data = $this->session->userdata('logged_in');
		$data['userdata']=$session_data['username'];
		$userdata=$data['userdata'];
		$level=$session_data['level'];
		$data['title']='Selamat  Datang Pengunjung';
		$data['caption']="Biodata";
		$data['header_title']='<div align="center"><h>Dinas Perikanan Daerah Istimewa Yogyakarta</h></div>';
		$data['alamat']='<div align="center">&copy;2014 All Reserved  Metro UI STMIK Jenderal Achmad Yani Yogyakarta</div>';
		$data['headline']=$this->content_model->berita_head();
		$data['biodata']=$this->adminweb_model->index($userdata);
		//halaman yang di load
		$this->load->view('includes/header',$data);
		$this->load->view('pengunjung/nav',$data);
		$this->load->view('pengunjung/content_home',$data);
		$this->load->view('includes/footer',$data);
		}
		else{
			redirect('login');
		}
		
	}
	function validasi(){
	$this->form_validation->set_rules('password','<div class="notice marker-on-bottom  bg-white fg-red">  Harus di isi </div>' ,'trim|required|xss_clean','</div>');
	$this->form_validation->set_rules('email','<div class="notice marker-on-bottom  bg-white fg-red">  Harus di isi </div>' ,'trim|required|xss_clean','</div>');
	}
	
	function resetpass(){
	if($this->session->userdata('logged_in')){
	$this->validasi();
	if($this->form_validation->run() == FALSE){
			redirect('staff?act=reset_password&notice=gagal');
			}else{
		$session_data = $this->session->userdata('logged_in');
		$data['userdata']=$session_data['username'];
		$userdata=$data['userdata'];
		$data['id']=$session_data['id'];
		$session_id=$data['id'];
		$this->adminweb_model->reset_pass_staff($session_id);
		redirect('staff?act=reset_password&notice=sukses');
			}
		}
		else{
			redirect('login?notice="harus login  dulu gan"');
		}
		
	}
	
		function get_curl($url){
	 // inisialisasi CURL
      $data = curl_init();
     // setting CURL
     curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($data, CURLOPT_URL, $url);
    // menjalankan CURL untuk membaca isi file
    $hasil = curl_exec($data);
             curl_close($data);
             return $hasil;
 }
	

	
	function keluar(){
	redirect('login/logout');
	}
	
}

/* End of file pengunjung.php */
/* Location: ./application/controllers/pengunjung.php */