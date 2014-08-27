
<div class="panel">
    <div class="panel-header bg-lightBlue fg-white">
        <center><?php echo $caption;?></center>
    </div>
    <div class="panel-content">
        <?php echo form_open('ubah_produksi/update');?>

		<table class="table span6" >
			<input type="hidden" name="id_produksi" value="<?php echo $kode;?>">
			<tr bgcolor="gray">
			<td>Nama Produksi</td>
			<td><div class="input-control text" data-role="input-control" >
                        <input type="text" name="nama_produksi" value="<?php echo $nama;?>">
                        <button class="btn-clear" tabindex="-1"></button>
                    </div></td>
		  </tr>
		  <tr bgcolor="gray">
			<td>Ruang lingkup Produksi</td>
			<td><div class="input-control text" data-role="input-control" >
                        <select name="jenis_produksi" >
						<option value="Termasuk produksi" >Termasuk produksi</option>
						<option value="Tidak termasuk produksi" >Tidak termasuk produksi</option>
						</select>
                    </div></td>
		  </tr>
		  <tr bgcolor="gray">
			<td>Jumlah Produksi</td>
			<td><div class="input-control text" data-role="input-control" >
                        <input type="text"  name="jumlah_produksi" value="<?php echo $jumlah;?>">
                        <button class="btn-clear" tabindex="-1"></button>
                    </div></td>
		  </tr>
		  <tr bgcolor="gray">
			<td>Tahun Produksi</td>
			<td><div class="input-control text" data-role="input-control" >
                        <input type="text" name="tahun_produksi"  value="<?php echo $tahun;?>">
                        <button class="btn-clear" tabindex="-1"></button>
                    </div></td>
		  </tr>
		  
		  <tr bgcolor="gray">
			<td>Sumber Perairan</td>
			<td><div class="input-control text" data-role="input-control" >
                        <select name="sumber_perairan" >
						<option value="<?php echo $sumber;?>" > <?php echo $sumber;?></option>
						<option >===pilihan====</option>
						<option value="Perairan Laut" >Perairan Laut</option>
						<option value="Perairan Umum" >Perairan Umum</option>
						</select>
                    </div></td>
		  </tr>
		  <tr bgcolor="gray">
			<td>Jenis Tangkap</td>
			<td><div class="input-control text" data-role="input-control" >
                        <input type="text"  name="jenis_tangkap"  value="<?php echo $tangkap;?>">
                        <button class="btn-clear" tabindex="-1"></button>
                    </div></td>
		  </tr>
		  <tr bgcolor="gray">
			<td>Jenis Ikan</td>
			<td> <select name="jenis_ikan" >
						<option value="<?php echo $jenis_ikan;?>" > <?php echo $jenis_ikan;?></option>
						<option >===pilihan====</option>
						<?php  foreach ($ikan->result() as $data){$list=$data->jenis_ikan;?>
						
						<option value="<?php echo $list;?>" > <?php echo $list;?></option>
						<?php }?>
						</select> </td>
						
		  </tr>
		  <tr bgcolor="gray">
			<td>Alat transportasi</td>
			<td><div class="input-control text" data-role="input-control">
                        <input type="text"  name="transportasi"  value="<?php echo $unit;?>">
                        <button class="btn-clear" tabindex="-1"></button>
                    </div></td>
		  </tr>
		  <tr bgcolor="gray">
			<td>Kota </td>
			<td>
						
						<select name="kota" >
						<option value="<?php echo $kota;?>" > <?php echo $kota;?></option>
						<option >===pilihan====</option>
						<?php  foreach ($daerah->result() as $data){$list=$data->nama_daerah;?>
						<option value="<?php echo $list;?>" > <?php echo $list;?></option>
						<?php }?>
						</select>
						</td>

		  </tr>
		  <tr >
		  <td> <input type="submit" name="Simpan" value="Simpan"></td>
		  <td> <input type="reset" name="Hapus" value="reset"></td>
		  </tr>
		</table>

    </div>
</div>
<div class="tab-control" data-role="tab-control">
    <ul class="tabs">
        <li class="active"><a href="#_page_1">Data Produksi</a></li>
        <li><a href="#_page_2">Data Kota</a></li>
        <li><a href="#_page_3">Data Satuan Berat</a></li>
		<li><a href="#_page_4">Pencarian </a></li>
		<li><a href="#_page_5">Data  Jenis Ikan  </a></li>
    </ul>
 
    <div class="frames">
        <div class="frame" id="_page_1">
		
<div class="panel" data-role="panel">
    <div class="panel-header bg-lightBlue fg-white ">
       Lihat List Data Produksi
    </div>
    <div class="panel-content">
       <table class=" table striped hovered " id="scrollbox3" data-scroll="both" style="width: 1200px">
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
					<th >Aksi pilihan</th>
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
				
				
				<tr ><td bgcolor="blue"><?php echo $nama;?></td>
				<td bgcolor="blue"><?php echo $jenis;?></td>
				<td bgcolor="blue"><?php echo $tahun;?></td>
				<td bgcolor="blue"><?php echo $jumlah;?></td>
				<td bgcolor="blue"><?php echo $sumber;?></td>
				<td bgcolor="blue"><?php echo $tangkap;?></td>
				<td bgcolor="blue"><?php echo $unit;?></td>
				<td bgcolor="blue"><?php echo $kota;?></td>
				<td bgcolor="blue"><?php echo $jenis_ikan;?></td>
				<td bgcolor="blue"><i class="icon-plus"><a href="ubah_produksi?id_produksi=<?php echo $kode;?>">ubah</a></i>||<i class="icon-minus"><a href="produksi/hapus/<?php echo $kode;?>">hapus</a></i>  </td>
				
				
				
				
				
				</tr>
				<?php }?>
              

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
					<th class="text-left">Aksi Pilihan</th>
					
                </tr>
                </tfoot>
				<script>
                    $(function(){
                        $("#scrollbox3").scrollbar({
                            height: 355
                        });
                    });
                </script>
            </table>
    </div>
	<script>
	$("#newjenis_ikan").on('click', function(){
                            $.Dialog({
                                overlay: true,
                                shadow: true,
                                flat: true,
                                draggable: true,
                                title: 'Flat window',
                                content: '',
                                padding: 10,
                                onShow: function(_dialog){
                                    var content = '<?php echo form_open('produksi/simpan_jenis_ikan');?>' +
                                            '<div class="input-control text"data-hint="data harus diIsi" data-hint-position="right" >'+'<input type="text" name="jenis_ikan" placeholder="masukan jenis ikan " ><button class="btn-clear"></button></div>' +
                                            '<div class="form-actions" >' +
                                            '<button class="button primary">Simpan</button>&nbsp;'+
                                            '<button class="button" type="button" onclick="$.Dialog.close()">batal</button> '+
                                            '</div>'+
                                            '</form>';

                                    $.Dialog.title("<font color='red'>Tambah Jenis Ikan</font> ");
                                    $.Dialog.content(content);
                                }
                            });
                        });
	$("#new_kota").on('click', function(){
                            $.Dialog({
                                overlay: true,
                                shadow: true,
                                flat: true,
                                draggable: true,
                                title: 'Flat window',
                                content: '',
                                padding: 10,
                                onShow: function(_dialog){
                                    var content = '<?php echo form_open('produksi/simpan_kota');?>' +
                                            '<div class="input-control text"><input type="text" name="nama_daerah" placeholder="masukan kota baru "><button class="btn-clear"></button></div>' +
                                            '<div class="form-actions" >' +
                                            '<button class="button primary">Simpan</button>&nbsp;'+
                                            '<button class="button" type="button" onclick="$.Dialog.close()">batal</button> '+
                                            '</div>'+
                                            '</form>';

                                    $.Dialog.title("<font color='red'>Tambah Kota Baru</font> ");
                                    $.Dialog.content(content);
                                }
                            });
                        });
	
	$("#new_satuan").on('click', function(){
                            $.Dialog({
                                overlay: true,
                                shadow: true,
                                flat: true,
                                draggable: true,
                                title: 'Flat window',
                                content: '',
                                padding: 10,
                                onShow: function(_dialog){
                                    var content = '<?php echo form_open('produksi/simpan_satuan');?>' +
                                            '<div class="input-control text"><input type="text" name="jenis_satuan" placeholder="masukan satuan berat "><button class="btn-clear"></button></div>' +
                                            '<div class="form-actions" >' +
                                            '<button class="button primary">Simpan</button>&nbsp;'+
                                            '<button class="button" type="button" onclick="$.Dialog.close()">batal</button> '+
                                            '</div>'+
                                            '</form>';

                                    $.Dialog.title("<font color='red'>Tambah Satuan Berat Baru</font> ");
                                    $.Dialog.content(content);
                                }
                            });
                        });
						
				

	
	</script>
	</div>
		
		
		</div>
        <div class="frame" id="_page_2">
		<div class="panel" data-role="panel">
    <div class="panel-header bg-lightBlue fg-white ">
       Lihat List Data Kota
    </div>
		 <div class="panel-content">
		 <center>
		 <div class="span6">
		 <div data-role="scrollbox" data-scroll=" both">
		 <table class="table striped hovered"  width="100%"">
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
					<td  bgcolor="blue"><?php echo $list;?></td>
					<td><i class="icon-minus"><a href="produksi/hapus_daerah/<?php echo $kode_daerah;?>">HAPUS</a></td>
					</tr>
					</tbody>
					<?php }?>
		 </table>
		 </div>
		 </div>
		 </center>
		 </div>
		</div>
		</div>
		<div class="frame" id="_page_3">
		<div class="panel" data-role="panel">
    <div class="panel-header bg-lightBlue fg-white ">
       Lihat List Data Satuan berat
    </div>
		 <div class="panel-content">
		   <center>
		  <div class="span6">
		
		 <table class="table striped hovered "  width="100%"">
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
					<td  bgcolor="blue"><?php echo $list;?></td>
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
<div class="frames">
        <div class="frame" id="_page_5">
		    <div class="panel-header bg-lightBlue fg-white ">
       Lihat List Data Jenis Ikan
    </div>
		 <div class="panel-content">
		   <center>
		  <div class="span12">
		 <table class=" table striped hovered " id="scrollbox3" data-scroll="both" style="width: 1000px">
		 <thead>
				<tr bgcolor="gray">
					 <th>Id Ikan</th>
                    <th>Jenis Ikan</th>
					 <th>Nama Ikan</th>
					  <th>Nama Indonesia</th>
					   <th>Nama Inggris</th>
					    <th>Nama Ilmiah/Latin</th>
						 <th> Nama Group </th>
                    <th>Hapus Data</th>
					<th>Ubah Data </th>
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

					<tr >
					<td  bgcolor="blue"><?php echo $id;?></td>
					<td  bgcolor="blue"><?php echo $list;?></td>
					<td  bgcolor="blue"><?php echo $nama_ikan;?></td>
					<td  bgcolor="blue"><?php echo $indonesia;?></td>
					<td  bgcolor="blue"><?php echo $inggris;?></td>
					<td  bgcolor="blue"><?php echo $ilmiah;?></td>
					<td  bgcolor="blue"><?php echo $group;?></td>
					<td bgcolor="black"><i class="icon-minus"><a href="produksi/hapus_ikan/<?php echo $id;?>">HAPUS</a>
					</td>
					<td bgcolor="black"><i class="icon-plus"><a href="produksi/edit_ikan?id_ikan<?php echo $id;?>">Edit</a></td>
					</tr>
					</tbody>
					<?php }?>
		 </table>
		 </div>
		 		 </center>
		</div>
		</div>
		</div></div>
<div class="frames">
        <div class="frame" id="_page_4">
		Pencarian :<div class="input-control text" data-role="input-control" name="cari">
                        <input type="text">
                        <button class="btn-search"></button>
                    </div>
		</div></div>
</div>