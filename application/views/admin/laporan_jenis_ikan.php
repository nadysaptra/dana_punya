
        <div class="frame" id="_page_1"><font color="red">Laporan Data  Jenis Ikan </font></div>
		 <div class="panel-content">
		   <center>
		  <div class="span12">
		<font color="black">
		  <table class=" table striped hovered " id="scrollbox3" data-scroll="both">
		 <thead>
				<tr bgcolor="gray">
                    <th>Jenis Ikan</th>
					 <th>Nama Ikan</th>
					  <th>Nama Indonesia</th>
					   <th>Nama Inggris</th>
					    <th>Nama Ilmiah/Latin</th>
						 <th> Nama Group </th>
                    </tr>
					</thead>
					<tbody>
					<?php  foreach ($ikan->result() as $data){
					$no=1;
					$id=$data->id_ikan;
					$list=$data->jenis_ikan;
					$nama_ikan=$data->nama_ikan;
					$indonesia=$data->nama_indonesia;
					$inggris=$data->nama_inggris;
					$ilmiah=$data->nama_latin_ilmiah;
					$group=$data->nama_group;
					
					?>

					<tr bgcolor="black">
					<td  bgcolor="white"><?php echo $list;?></td>
					<td  bgcolor="white"><?php echo $nama_ikan;?></td>
					<td  bgcolor="white"><?php echo $indonesia;?></td>
					<td  bgcolor="white"><?php echo $inggris;?></td>
					<td  bgcolor="white"><?php echo $ilmiah;?></td>
					<td  bgcolor="white"><?php echo $group;?></td>
					</tr>
					</tbody>
					<?php }?>
		 </table>
</font>
		 </div>
		 		 </center>
</div>
<script>
                    $(function(){
                        $("#scrollbox3").scrollbar({
                             height: 500
                        });
                    });
                </script>
	