<div class="tab-control" data-role="tab-control">
<div class="panel-header"><?php echo $caption;?></div>
    <ul class="tabs">
        <li class="active"><a href="#_page_1">Data Produksi </a></li>   
    </ul>
 
    <div class="frames">
        <div class="frame" id="_page_1">
	
		<font color="red">Data Produksi</font>
				<font color="black">
		<table class=" table striped hovered " id="scrollbox3" data-scroll="both" style="width: 1200px">
		<div class="span3">
	<div class="navigation-bar dark " >
	<div class="navigation-bar-content container span4">
	<ul class="element-menu">  <li class="place-right"><a href="<?php echo base_url();?>PL/view_pdf" ><i class="icon-file-pdf"></i>PDF</a></li>
		  <li class="place-right"><a href="#" ><i class="icon-file-excel"></i>EXCEL</a></li>
		    <li class="place-right"><a href="#" onclick="windows.print();"><i class="icon-printer"></i>CETAK</a></li></ul>
			</div>
			</div>
			</div>
                <thead>
				<tr bgcolor="gray">
                    <th>Nama Produksi</th>
                    <th>Ruang lingkup Produksi</th>
                    <th>Tahun</th>
                    <th>Jumlah</th>
					<th >Sumber Perairan</th>
					<th >Jenis Tangkap</th>
					<th > Alat transportasi</th>
					<th >Kota</th>
					<th >Jenis Ikan</th>
                </tr>
                </thead>

               
				<?php  foreach ($produksi->result() as $data){
				$nama=$data->nama_produksi;
				$jenis=$data->jenis_produksi;
				$tahun=$data->tahun_produksi;
				$jumlah=$data->jumlah_produksi;
				$sumber=$data->sumber_perairan;
				$kota=$data->kota;
				$jenis_ikan=$data->jenis_ikan;
				$tangkap=$data->jenis_tangkap;
				$unit=$data->transportasi;
				$kode=$data->id_produksi;
				
				?>	
				<tr ><td bgcolor="white"><?php echo $nama;?></td>
				<td bgcolor="white"><?php echo $jenis;?></td>
				<td bgcolor="white"><?php echo $tahun;?></td>
				<td bgcolor="white"><?php echo $jumlah;?></td>
				<td bgcolor="white"><?php echo $sumber;?></td>
				<td bgcolor="white"><?php echo $tangkap;?></td>
				<td bgcolor="white"><?php echo $unit;?></td>
				<td bgcolor="white"><?php echo $kota;?></td>
				<td bgcolor="white"><?php echo $jenis_ikan;?></td>		
				</tr>
				<?php }?>
              
				</font>
                <tfoot>
                <tr bgcolor="gray">
                    <th class="text-left">Nama Produksi</th>
                    <th class="text-left">Jenis</th>
                    <th class="text-left">tahun</th>
                    <th class="text-left">Jumlah</th>
					<th class="text-left">Sumber Perairan</th>
					<th class="text-left">Jenis Tangkap</th>
					<th class="text-left">transportasi</th>
					<th class="text-left">Kota</th>
                    <th class="text-left">Jenis Ikan</th>	
                </tr>
                </tfoot>
				<script>
                    $(function(){
                        $("#scrollbox3").scrollbar({
                             height: 450
                        });
                    });
					$(document).ready(function(){
    $('#scrollbox3').dataTable();
});
                </script>
            </table>	
		</div>
    </div>
</div>
</div>