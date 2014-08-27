<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PL extends CI_Controller {
function __construct()
	{
		parent::__construct();
		$this->load->model('produksi_model');
		$this->load->library('pagination');
		$this->load->library('form_validation');
		$this->load->library('fpdf');
		
		
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
		$data['alamat']='<div align="center">Jl.Sagan No.III/4 Yogkarta</div>';
		$data['produksi']=$this->produksi_model->ambil_data_berdasarkan_pl();
		$data['nelayan']=$this->produksi_model->ambil_data_join();
		$this->load->view('includes/header',$data);
		$this->load->view('admin/dashbord',$data);
		$this->load->view('admin/navi_admin',$data);
		$this->load->view('admin/laporan_pl',$data);
		$this->load->view('includes/footer',$data);
		}
		else{
			redirect('login');
		}
	}
	function view_pdf(){
	if($this->session->userdata('logged_in')){
	define('FPDF_FONTPATH',$this->config->item('fonts_path'));
	$data['produksi']=$this->produksi_model->ambil_data_berdasarkan_pl();
	$this->eksportPDF($data);
	}
	else{
			redirect('login');
		}
	}
	function eksportPDF($data){
	date_default_timezone_set('Asia/Jakarta');//set zona waktu 
	$this->fpdf->FPDF("L","cm","LEGAL");
	$this->fpdf->SetMargins(3,1,1);
	$this->fpdf->AliasNbPages();
	$this->fpdf->AddPage();
	$this->fpdf->SetFont('Times','B',12);
	$this->fpdf->Cell(30,0.7,'LAPORAN DATA PRODUKSI IKAN TANGKAP',0,0,'C');
	$this->fpdf->Ln();
	$this->fpdf->Ln();
	$this->fpdf->SetFont('helvetica',"",10);
	$this->fpdf->Cell(30,0.5,'DINAS PERIKANAN DAN KELAUTAN DAERAH ISTIMEWA YOGYAKARTA',0,0,'C');
	$this->fpdf->Ln();
	$this->fpdf->Cell(30,0.5,'Jl.Sagan No.III/4 Yogkarta',0,0,'C');

/* Fungsi Line untuk membuat garis */
$this->fpdf->Line(1,3.5,33,3.5);
$this->fpdf->Line(1,3.55,33,3.55);
/* ————– Header Halaman selesai ————————————————*/

$this->fpdf->Ln(1);
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(19,1,'Berdasarkan Sumber Perairan Laut',0,0,'C');//MEMBUAT HEADER
/* setting header table */
$this->fpdf->Ln(1);
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(1, 1, 'ID' , 1, 'LR', 'L');
$this->fpdf->Cell(5 , 1, 'NAMA PRODUKSI' , 1,  'LR', 'L');
$this->fpdf->Cell(5 , 1, 'JENIS PRODUKSI' , 1,  'LR', 'L');
$this->fpdf->Cell(3 , 1, 'KOTA' , 1,  'LR', 'L');
$this->fpdf->Cell(2 , 1, 'TAHUN' , 1,  'LR', 'L');
$this->fpdf->Cell(2 , 1, 'JUMLAH' , 1,  'LR', 'L');
$this->fpdf->Cell(3 , 1, 'TANGKAP' , 1,  'LR', 'L');
$this->fpdf->Cell(4 , 1, 'TRANSPORTASI' , 1,  'LR', 'L');
$this->fpdf->Cell(2 , 1, 'IKAN' , 1,  'LR', 'L');
$this->fpdf->Cell(2 , 1, 'SUMBER' , 1,  'LR', 'L');
/* generate hasil query disini */
foreach($data['produksi']->result() as $rows)
{
$this->fpdf->Ln();
$this->fpdf->SetFont('Times',"",12);
$this->fpdf->Cell(1 , 0.7, $rows->id_produksi, 1, 'LR', 'L');
$this->fpdf->Cell(5 , 0.7, $rows->nama_produksi , 1, 'LR', 'L');
$this->fpdf->Cell(5 , 0.7, $rows->jenis_produksi , 1, 'LR', 'L');
$this->fpdf->Cell(3 , 0.7, $rows->kota, 1, 'LR', 'L');
$this->fpdf->Cell(2 , 0.7, $rows->tahun_produksi, 1, 'LR', 'L');
$this->fpdf->Cell(2 , 0.7, $rows->jumlah_produksi, 1, 'LR', 'L');
$this->fpdf->Cell(3 , 0.7, $rows->jenis_tangkap, 1, 'LR', 'L');
$this->fpdf->Cell(4 , 0.7, $rows->transportasi, 1, 'LR', 'L');
$this->fpdf->Cell(2 , 0.7, $rows->jenis_ikan, 1, 'LR', 'L');
$this->fpdf->Cell(2 , 0.7, $rows->sumber_perairan, 1, 'LR', 'L');
}
/* setting posisi footer 3 cm dari bawah */
$this->fpdf->SetY(-3);
/* setting font untuk footer */
$this->fpdf->SetFont('Times',"",10);
/* setting cell untuk waktu pencetakan */
$this->fpdf->Cell(9.5, 0.5, 'Printed on : '.date('d/m/Y H:i').' | Created by : Mucharom STMIK JENDERAL ACHMAD YANI YOGYAKARTA',0,'LR', 'L');
/* setting cell untuk page number */
$this->fpdf->Cell(9.5, 0.5, 'Page '.$this->fpdf->PageNo().'/{nb}',0,0,'R');
/* generate pdf jika semua konstruktor, data yang akan ditampilkan, dll sudah selesai */
$this->fpdf->Output('laporan_produksi.pdf',"I");
	
	}
	
	
	}