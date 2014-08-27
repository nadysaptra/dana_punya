<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome extends CI_Controller {
function __construct()
	{
		parent::__construct();
		$this->load->model(array('content_model'));
		
	}
	public function index(){
		$data['title']='Sistem Informasi Pengelolaan Produksi Perikanan';
		$data['headline']=$this->content_model->berita_head();
		$data['link_terkait']=$this->get_curl('http://statistik.kkp.go.id/');
		$data['link_terkait2']=$this->get_curl('http://statistik.kkp.go.id/index.php/cari/');
		$this->load->view('includes/header',$data);
		$this->load->view('content_home',$data);
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
	}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */