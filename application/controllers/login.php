<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		session_start();
		$this->load->model('model_login','',TRUE);
	}
	public function index()
	{
		$data['title']='LOGIN ';
		$this->load->view('includes/header',$data);
		$this->load->view('access/login');
	}
	function proses_login(){
		$this->validasi();
		if($this->form_validation->run() == FALSE){
			$this->index();
			}
			else{
		$cek=$this-> veryfikasi();
		if($cek){ 
		$this->setsession_plugin();
		//redirect berdasarkan level 
		$session_data = $this->session->userdata('logged_in');
		$userdata=$session_data['username'];
		$level=$session_data['level'];
		$cek_akses=$session_data['access'];
		if($level=='Administrator' ){
		if($cek_akses==1){ 
		$this->home_beranda();
		} else{
			echo "<script language='javascript'> alert('Tidak Punya Hak Akses halaman ini , Harap Hubungi administrator!!!'); document.location='../login'</script>";
		}
		}
		if($cek_akses==0){
		if($level=='Staff' ){
		$this->staff_beranda();
		}
		if($level=='Pengunjung' ){
		$this->pengunjung_beranda();
		}
		}
		else { 
			echo " MAAF USERNAME DAN EMAIL ANDA BELUM TERDAFTAR";
		}
		}
	}
	}
	function validasi(){
	$this->form_validation->set_rules('username','<div class="notice marker-on-bottom  bg-red fg-white">Nama Akun/username </div>' ,'trim|required|xss_clean','</div>');
	$this->form_validation->set_rules('password','<div class="notice marker-on-bottom  bg-red fg-white">Kata Kunci/password</div>',  'trim|required|xss_clean|callback_veryfikasi','</div');
	$this->form_validation->set_error_delimiters('<div class="error">', '</div>');	
	}
	
	function setsession_plugin(){
			$_SESSION['ses_kcfinder']=array();
			$_SESSION['ses_kcfinder']['disabled'] = false;
			$_SESSION['ses_kcfinder']['uploadURL'] = "./content_upload";
	}
	
	function home_beranda(){
	   if($this->session->userdata('logged_in')){
		$session_data = $this->session->userdata('logged_in');
		$userdata=$session_data['username'];
		$level=$session_data['level'];
		$access=$session_data['access'];
		redirect('home?user='.$userdata.'&notice=logintrue?level='.$level);}
		else{
			$this->index();
		}
	}
	
	function staff_beranda(){
	if($this->session->userdata('logged_in')){
		$session_data = $this->session->userdata('logged_in');
		$userdata=$session_data['username'];
		$level=$session_data['level'];
		$access=$session_data['access'];
		redirect('home/staff?user='.$userdata.'&notice=login?level='.$level);}
		else{
			$this->index();
		}
	}
	
	function pengunjung_beranda(){
	if($this->session->userdata('logged_in')){
		$session_data = $this->session->userdata('logged_in');
		$userdata=$session_data['username'];
		$level=$session_data['level'];
		redirect('pengunjung?user='.$userdata.'&notice=logintrue?level='.$level.'');}
		else{
			$this->index();
		}
	}
	function veryfikasi(){
	 //validasi field terhadap database
   $username = $this->input->post('username');
   $password=	$this->input->post('password');
   $result = $this->model_login->login($username, $password);//test data base
   if($result){
     foreach($result as $rows){
		$sess_array = array(

         'id' => $rows->id,
         'username' => $rows->username, 
		 'level'=>$rows->level,
		 'access'=>$rows->access
       );
       $this->session->set_userdata('logged_in', $sess_array);
			}
     return  true;
		}else{
		$this->form_validation->set_message('veryfikasi', ' <div class="notice marker-on-bottom  bg-white fg-red">password Salah  !!!!! , PASTIKAN USERNAME DAN EMAIL TERDAFTAR</div>');
     return false;
		} 

 }
    function reset_pass(){
	
	
	
	}
 
	function forget_password(){
	$this->load->view('header');
	$this->load->view('portal_metro');
	$this->load->view('adminweb/modul_logins/reset_pass');
	$this->load->view('adminweb/moduls_header/footer');
	}
	function daftar(){
	$this->model_login->register();
	$this->notice_daftar_sukses();
	}
	function logout(){
		session_destroy();
		$this->session->unset_userdata('logged_in');
	$this->notice_keluar();
	}
	function notice_keluar(){
	echo "<script language='javascript'> alert('Terima Kasih Anda Telah Berkunjung !!!'); document.location='../'</script>";
	}
	function notice_daftar_sukses(){
		echo "<script language='javascript'> alert('Pendaftaran Akun Baru Telah Berhasil, Silahkan login kembali !!!'); document.location='login'</script>";

	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */