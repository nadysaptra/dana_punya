
<font color="black">
<div id="_page_2"><font color="red">Data Nelayan</font>
		<table class=" table striped hovered " id="scrollbox3" data-scroll="both">
			<div class="span3">
	<div class="navigation-bar dark " >
	<div class="navigation-bar-content container span4">
	<ul class="element-menu">  <li class="place-right"><a href="#" ><i class="icon-file-pdf"></i>PDF</a></li>
		  <li class="place-right"><a href="#" ><i class="icon-file-excel"></i>EXCEL</a></li>
		    <li class="place-right"><a href="#" onclick="windows.print();"><i class="icon-printer"></i>CETAK</a></li></ul>
			</div>
			</div>
			</div>
			<thead>
				<tr bgcolor="gray">
                    <th>Nama Nelayan</th>
                    <th>Jenis Nelayan</th>
                    <th>Kota </th>
                    <th>Detail</th>
                </tr>
                </thead>
				<?php  foreach ($nelayan->result() as $data){
				$nama_nelayan=$data->nama_nelayan;
				$jenis=$data->jenis_nelayan;
				$daerah=$data->nama_daerah;
				?>	
				<tr bgcolor="black">
				<td><?php echo $nama_nelayan;?></td>
				<td><?php echo $jenis;?></td>
				<td><?php echo $daerah;?></td>
				<td><a href="<?php echo base_url();?>detail?id="><i><button class="button" id="show">Show</button></i></a></td>
				
				</tr>
				<?php }?>
		</table>
		</div>
		</font>
		<script>
		$(document).ready(function(){
    $('#scrollbox3').dataTable();
		});	
         </script>
