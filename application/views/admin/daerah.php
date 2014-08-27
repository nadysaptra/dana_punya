	<font color="black">
	<div class="panel" data-role="panel">
    <div class="panel-header bg-lightBlue fg-gray">
       Lihat List Data Kota
    </div>
		 <div class="panel-content">
		 <center>
		 <div class="span6">
		 <table class=" table striped hovered " id="scrollbox2" data-scroll="both" style="width: 800px">
		 <thead>
				<tr bgcolor="gray">
                    <th>Nama Daerah</th>
                    <th>Aksi</th>
                    </tr>
					</thead>
					<tbody>
					<?php  foreach ($daerah->result() as $data){
					$no=1;
					$list=$data->nama_daerah;
					$kode_daerah=$data->id_daerah;					
					?>
					<tr>
					<td  bgcolor="white"><?php echo $list;?></td>
					<td><i class="icon-minus"><a href="produksi/hapus_daerah/<?php echo $kode_daerah;?>">HAPUS</a><br><i class="icon-plus"><a href="ubah_data?id=<?php echo $kode_daerah;?>">Ubah</a></td>
					</tr>
					</tbody>
					<?php }?>
		 </table>
		 </div>
		 </div>
		 </center>
		</div>
		</div>
		</font>
