		<div class="panel" data-role="panel">
    <div class="panel-header bg-lightBlue fg-white ">
       Lihat List Data Satuan berat
    </div>
		 <div class="panel-content">
		   <center>
		  <div class="span6">
		
		  <table class=" table " id="scrollbox5" data-scroll="both" style="width: 500px">
		 <thead>
				<tr bgcolor="gray">
                    <th>Nama Satuan Berat</th>
                    <th>Aksi</th>
                    </tr>
					</thead>
					<tbody>
					<?php  foreach ($berat->result() as $data){
					$no=1;
					$list=$data->jenis_satuan;
					$kode_satuan=$data->id_satuan;
					
					?>

					<tr >
					<td  bgcolor="white"><?php echo $list;?></td>
					<td><i class="icon-minus"><a href="produksi/hapus_satuan/<?php echo $kode_satuan;?>">HAPUS</a></td>
					</tr>
					</tbody>
					<?php }?>
		 </table>

		 </div>
		 		 </center>
		</div>
		</div>
       
</div>