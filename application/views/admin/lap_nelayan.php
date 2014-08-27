 <div class="panel-header bg-lightBlue fg-black ">
<div class="panel" data-role="panel">
<div class="navigation-bar dark" >
	<div class="navigation-bar-content container span4">
	<ul class="element-menu">  <li class="place-right"><a href="#" ><i class="icon-file-pdf"></i>PDF</a></li>
		  <li class="place-right"><a href="#"><i class="icon-file-excel"></i>EXCEL</a></li>
		    <li class="place-right"><a href="#"><i class="icon-printer"></i>CETAK</a></li></ul>
			</div>
			</div>
    <div class="panel-content">
        <table class=" table striped hovered " id="scrollbox3" data-scroll="both" border="1" >
                <thead>
				<tr bgcolor="gray">
                  <th>Nelayan</th>
					<th>Kode Perairan</th>
					<th>Kode Kabupaten</th>
					<th>Kelompok Nelayan</th>
					<th>kode Tangkap</th>
					<th> Unit Kendaraan</th>
					<th> Kode Ikan </th>
					<th>kode kapal</th>
					<th>Aksi </th>
                </tr>
                </thead>

               
				<?php  foreach ($nelayan->result() as $rows){
				$nelayan=$rows->nama_nelayan;
				$sumber=$rows->id_perairan;
				$kabupaten=$rows->id_kabupaten;
				$kelompok=$rows->jenis_nelayan;
				$tangkap=$rows->id_tangkap;
				$unit=$rows->nama_unit;
				$ikan=$rows->id_ikan;
				$kapal=$rows->kode_kapal;
				$id=$rows->id_nelayan;
				
				
				?>
				
				
				<tr >
				<td><?php echo $nelayan;?></td>
				<td><?php echo $sumber;?></td>
				<td><?php echo $kabupaten;?></td>
				<td><?php echo $kelompok;?></td>
				<td><?php echo $tangkap;?></td>
				<td><?php echo $unit;?></td>
				<td><?php echo $ikan;?></td>
				<td><?php echo $kapal;?></td>
				<td><a href="edit_nelayan?id=<?php echo $id;?>"><i class="icon-grid"></i>Detail</a></td>
				</tr>
				<?php }?>
                <tfoot>
                <tr bgcolor="gray">
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
                             height: 300
                        });
                    });

                </script>

</div> 
<div class="notice marker-on-top">
 <p>
 * KODE PERAIRAN <BR>
			- 0: UMUM;<BR>
			- 1: lAUT;<BR>
 
 
 
 </p>
</div>
    </div>