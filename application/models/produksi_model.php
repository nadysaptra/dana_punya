<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produksi_model extends CI_Model {
function index($uri='',$filter='') { //to get all data in table users
$sql="SELECT * 
FROM  `tbl_data_produksi` 
ORDER BY  `id_produksi` DESC ";  
return $this->db->query($sql);

}
function ambil_data_produksi(){
$sql="SELECT * FROM  `tbl_data_produksi` ";  
return $this->db->query($sql);
}
function ambil_data_join(){
$sql = "select * from tbl_data_nelayan join tbl_data_ikan 
on tbl_data_nelayan.id_ikan=tbl_data_ikan.id_ikan join
tbl_data_daerah on tbl_data_daerah.id_daerah=tbl_data_nelayan.id_kabupaten 
 ";
 return $this->db->query($sql);
}

function ambil_data_alattangkap(){

$sql="SELECT * FROM tbl_tangkap";
return $this->db->query($sql);
}
function simpan_alat_tangkap(){
$e=array('alat_tangkap'=>$this->input->post('alat_tangkap'));
$this->db->insert('tbl_tangkap',$e);

}
function ambil_data_perairan(){
$sql="SELECT * FROM tbl_data_perairan";
return $this->db->query($sql);
}

function ambil_data_berdasarkan_pl(){
$sql = "SELECT * FROM `tbl_data_produksi` WHERE `sumber_perairan`='laut'";
return $this->db->query($sql);

}
function ambil_data_berdasarkan_pu(){
$sql = "SELECT * FROM `tbl_data_produksi` WHERE `sumber_perairan`='umum'";
return $this->db->query($sql);

}

function hapus_data_alattangkap($kode_tangkap){
$this->db->where('kode_tangkap', $kode_tangkap);
$this->db->delete('tbl_tangkap'); 
}

function ambil_alat_tangkap(){
$sql="SELECT * FROM tbl_tangkap";
return $this->db->query($sql);
}
function ambil_daerah(){
$sql="SELECT * FROM tbl_data_daerah  order by `id_daerah` DESC";
return $this->db->query($sql);
}
function ambil_jenisikan(){
$sql="SELECT * FROM tbl_data_ikan  order by `id_ikan` DESC";
return $this->db->query($sql);

}
function ambil_data_kapal(){
$sql="SELECT * FROM tbl_data_kapal";
return $this->db->query($sql);

}

function ambil_satuanberat(){
$sql="SELECT * FROM tbl_data_satuanberat";
return $this->db->query($sql);

}
function update_dataproduksi(){
$q=array(
'nama_produksi'=>$this->input->post('nama_produksi'),
'jenis_produksi'=>$this->input->post('jenis_produksi'),
'jumlah_produksi'=>$this->input->post('jumlah_produksi'),
'tahun_produksi'=>$this->input->post('tahun_produksi'),
'jenis_ikan'=>$this->input->post('jenis_ikan'),
'sumber_perairan'=>$this->input->post('sumber_perairan'),
'kota'=>$this->input->post('kota'),
'transportasi'=>$this->input->post('transportasi'),
'jenis_tangkap'=>$this->input->post('jenis_tangkap')
);
 $this->db->where('id_produksi', $this->input->post('id_produksi')); 
 $this->db->update('tbl_data_produksi', $q); 
 return null;
}
function hapus_dataproduksi($id_produksi){
$this->db->where('id_produksi', $id_produksi);
$this->db->delete('tbl_data_produksi'); 
}
function hapus_dataikan($id_ikan){
$this->db->where('id_ikan', $id_ikan);
$this->db->delete('tbl_data_ikan'); 
}
function hapus_datadaerah($id_daerah){
$this->db->where('id_daerah', $id_daerah);
$this->db->delete('tbl_data_daerah'); 
}
function hapus_datasatuan($id_satuan){
$this->db->where('id_satuan', $id_satuan);
$this->db->delete('tbl_data_satuanberat'); 
}
function simpan_dataproduksi(){
$q=array(
'nama_produksi'=>$this->input->post('nama_produksi'),
'jenis_produksi'=>$this->input->post('jenis_produksi'),
'jumlah_produksi'=>$this->input->post('jumlah_produksi'),
'tahun_produksi'=>$this->input->post('tahun_produksi'),
'jenis_ikan'=>$this->input->post('jenis_ikan'),
'sumber_perairan'=>$this->input->post('sumber_perairan'),
'kota'=>$this->input->post('kota'),
'transportasi'=>$this->input->post('transportasi'),
'jenis_tangkap'=>$this->input->post('jenis_tangkap')
);
return $this->db->insert('tbl_data_produksi',$q);
}
function get_idproduksi(){
	$kode=$this->input->get('id_produksi');
	$sql="SELECT * FROM tbl_data_produksi where id_produksi='$kode'";
	return $this->db->query($sql);
}
function simpan_jenisikan(){

$q=array('jenis_ikan'=>$this->input->post('jenis_ikan'));
return $this->db->insert('tbl_data_ikan',$q);

}
function simpan_kota(){
$q=array('nama_daerah'=>$this->input->post('nama_daerah'));
return $this->db->insert('tbl_data_daerah',$q);


}
function simpan_berat(){
$q=array('jenis_satuan'=>$this->input->post('jenis_satuan'));
return $this->db->insert('tbl_data_satuanberat',$q);

}
function ambil_data_nelayan(){
$a="SELECT * FROM tbl_data_nelayan";
return $this->db->query($a);
}
}
