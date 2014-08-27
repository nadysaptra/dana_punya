
<font color="black">
<div class="panel" data-role="panel">
    <div class="panel-header bg-lightBlue fg-black ">
      Laporan Data Produksi Ikan Tangkap 
    </div>
    <div class="panel-content">
	<div class="navigation-bar dark" >
	<div class="navigation-bar-content container span4">
	<ul class="element-menu">  <li class="place-right"><a href="<?php echo base_url();?>lap_produksi/pdfcreator"target="new"><i class="icon-file-pdf"></i>PDF</a></li>
		  <li class="place-right"><a href="#"><i class="icon-file-excel"></i>EXCEL</a></li>
		    <li class="place-right"><a href="#"><i class="icon-printer"></i>CETAK</a></li></ul>
			</div>
			</div>
	
        <table class=" table striped hovered " id="scrollbox3" data-scroll="both" border="1" >
                <thead>
				<tr bgcolor="gray">
                    <th>Nama Produksi</th>
                    <th>Ruang lingkup Produksi</th>
                    <th>Tahun</th>
                    <th>Jumlah</th>
					<th >Sumber Perairan</th>
					<th >Jenis Tangkap</th>
					<th>  transportasi</th>
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
                <tfoot>
                <tr bgcolor="gray">
                    <th class="text-left">Nama Produksi</th>
                    <th class="text-left">Ruang lingkup Produksi</th>
                    <th class="text-left">tahun</th>
                    <th class="text-left">Jumlah</th>
					<th class="text-left">Sumber Perairan</th>
					<th class="text-left">Jenis Tangkap</th>
					<th class="text-left">transportasi</th>
					<th class="text-left">Kota</th>
                    <th class="text-left">Jenis Ikan</th>	
                </tr>
                </tfoot>
            </table>
    </div></font>
	<script>
		$(document).ready(function(){
    $('#scrollbox3').dataTable();
		});
		 $(function(){
                        $("#scrollbox3").scrollbar({
                             height: 450
                        });
                    });

                </script>
				

</div>