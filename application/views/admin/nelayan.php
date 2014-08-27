<?php if(isset($msg)){ echo "<div class='alert'>".$msg. "</div>"; } ?>
<div class="panel" data-role="panel">
    <div class="panel-header">
        <center>
            <?php echo $caption;?>
        </center>
    </div>
    <div class="panel-content">
        <?php echo form_open_multipart( 'nelayan/simpan');?>
        <table>
            <tr>
                <td>Nama Nelayan</td>
                <td>:</td>
                <td>
                    <input name="nama_nelayan" id="target_nelayan">
                </td>
                <td></td>
                <td>
                    Upload Fhoto
                    <td colspan="2" rowspan="6">
                        : :
                        <td>
                            <div class="input-control file" data-role="input-control">
                                <input type="file" name="foto" value="">
                                <button class="btn-file"></button>
                            </div>
                        </td>
            </tr>
            <tr>
                <td>Perairan</td>
                <td>&nbsp;</td>
                <td>
                    <select name="id_perairan" id="target_perairan">
                        <?php foreach($perairan->result() as $data){ ?>
                        <?php $nama_perairan=$data->nama_perairan; $id=$data->id_perairan; ?>
                        <option value="<?php echo $id;?>">
                            <?php echo $id;?>-
                            <?php echo $nama_perairan;?>
                        </option>
                        <?php }?>
                    </select>
                </td>
                <td></td>
                <td rowspan="5">
                    Gambar Preview
                    <td rowspan="5">
                        <img src="<?php  echo base_url();?>images/x.jpg" id="target_gambar" width="240" height="219" />
                    </td>
            </tr>
            <tr>
                <td>Kabupaten</td>
                <td>&nbsp;</td>
                <td>
                    <select name="id_kabupaten" id="target_kabupaten">
                        <?php foreach($kabupaten->result() as $data){ ?>
                        <?php $nama_daerah=$data->nama_daerah; $id=$data->id_daerah; ?>
                        <option value="<?php echo $id;?>">
                            <?php echo $id;?>-
                            <?php echo $nama_daerah;?>
                        </option>
                        <?php }?>
                    </select>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>Kelompok Nelayan</td>
                <td>&nbsp;</td>
                <td>
                    <select name="jenis_nelayan" id="target_jenis_nelayan">
                        <option value="Nelayan penuh">Nelayan Penuh</option>
                        <option value="Nelayan sambilan utama">Nelayan Sambilan Utama</option>
                        <option value="Nelayan sambilan tambahan">Nelayan Sambilan Tambahan</option>
                    </select>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>Alat Tangkap</td>
                <td>&nbsp;</td>
                <td>
                    <select name="id_tangkap" id="target_tangkap">
                        <?php foreach($tangkap->result() as $data){ ?>
                        <?php $nama_tangkap=$data->alat_tangkap; $id=$data->kode_tangkap; ?>
                        <option value="<?php echo $id;?>">
                            <?php echo $id;?>-
                            <?php echo $nama_tangkap;?>
                        </option>
                        <?php }?>
                    </select>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>Catatan:</td>
                <td colspan="3">
                    <textarea name="note" id="note" cols="45" rows="5" id="target_note">
                    </textarea>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>Unit Kendaraan</td>
                <td>:</td>
                <td>
                    <input name="nama_unit" id="target_nama_unit">
                </td>
            </tr>
            <tr>
                <td>Jenis Ikan</td>
                <td>:</td>
                <td>
                    <select name="id_ikan" id="target_ikan">
                        <?php foreach($ikan->result() as $data){ ?>
                        <?php $nama_ikan=$data->jenis_ikan; $id=$data->id_ikan; ?>
                        <option value="<?php echo $id;?>">
                            <?php echo $id;?>-
                            <?php echo $nama_ikan;?>
                        </option>
                        <?php }?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jenis Kapal</td>
                <td>:</td>
                <td>
                    <select name="id_kapal" id="target_kapal">
                        <?php foreach($kapal->result() as $data){ ?>
                        <?php $nama_kapal=$data->jenis_kapal; $id=$data->kode_kapal; ?>
                        <option value="<?php echo $id;?>">
                            <?php echo $nama_kapal;?>-
                            <?php echo $id;?>
                        </option>
                        <?php }?>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" value="Simpan">
                    <input type="reset" value="Reset">
                </td>
            </tr>
            </form>
        </table>
        <div class="span4">
        </div>
    </div>
</div>
<div class="panel">
    <div class="panel-header bg-lightRed fg-brown">
        <center>List Data Nelayan</center>
    </div>
    <div class="panel-content">

        <font color="black">
<div class="panel" data-role="panel">
    <div class="panel-content">

	
        <table class=" table striped hovered " id="scrollbox3" data-scroll="both" border="1" >
                <thead>
				<tr bgcolor="gray">
				<th>Photo</th>
                  <th>Nelayan</th>
					<th>Kode Perairan</th>
					<th>Kode Kabupaten</th>
					<th>Kelompok Nelayan</th>
					<th>kode Tangkap</th>
					<th> Unit Kendaraan</th>
					<th> Kode Ikan </th>
					<th>kode kapal</th>
					<th>Catatan</th>
					<th>Aksi </th>
                </tr>
                </thead>

               
				<?php  foreach ($nelayan->result() as $rows){
				$gambar=$rows->gambar;
				$nelayan=$rows->nama_nelayan;
				$sumber=$rows->id_perairan;
				$kabupaten=$rows->id_kabupaten;
				$kelompok=$rows->jenis_nelayan;
				$tangkap=$rows->id_tangkap;
				$unit=$rows->nama_unit;
				$ikan=$rows->id_ikan;
				$kapal=$rows->kode_kapal;
				$id=$rows->id_nelayan;
				$catat=$rows->catatan;
				
				
				?>
				
				<tr >
					<td><?php echo $gambar;?></td>
					<td><?php echo $nelayan;?></td>
					<td><?php echo $sumber;?></td>
					<td><?php echo $kabupaten;?></td>
					<td><?php echo $kelompok;?></td>
					<td><?php echo $tangkap;?></td>
					<td><?php echo $unit;?></td>
					<td><?php echo $ikan;?></td>
					<td><?php echo $kapal;?></td>
					<td><?php echo $catat;?></td>
					<td>
						<a href="javascript:edit('<?php echo $id;?>')"><i class="icon-pencil"></i> </a>
						<br>
						<a href="nelayan/hapus/<?php echo $id;?>"><i class="icon-remove"></i> </a>
						<input type="hidden" id="gambar<?php echo $id;?>" value="<?php echo $gambar;?>">
						<input type="hidden" id="nelayan<?php echo $id;?>" value="<?php echo $nelayan;?>">
						<input type="hidden" id="sumber<?php echo $id;?>" value="<?php echo $sumber;?>">
						<input type="hidden" id="kabupaten<?php echo $id;?>" value="<?php echo $kabupaten;?>">
						<input type="hidden" id="kelompok<?php echo $id;?>" value="<?php echo $kelompok;?>">
						<input type="hidden" id="tangkap<?php echo $id;?>" value="<?php echo $tangkap;?>">
						<input type="hidden" id="unit<?php echo $id;?>" value="<?php echo $unit;?>">
						<input type="hidden" id="ikan<?php echo $id;?>" value="<?php echo $ikan;?>">
						<input type="hidden" id="kapal<?php echo $id;?>" value="<?php echo $kapal;?>">
						<input type="hidden" id="catat<?php echo $id;?>" value="<?php echo $catat;?>">
					</td>
				</tr>

				
				<?php }?>
                <tfoot>
                <tr bgcolor="gray">
                </tr>
                </tfoot>
            </table>
    </div></font>
        <script>
            $(document).ready(function() {
                $('#scrollbox3').dataTable();
            
                $("#scrollbox3").scrollbar({
                    height: 450
                });


            });
            function edit(i){
            	var gambar = $('#gambar'+i).val();
            	var nelayan = $('#nelayan'+i).val();
            	var sumber = $('#sumber'+i).val();
            	var kabupaten = $('#kabupaten'+i).val();            	
            	var kelompok = $('#kelompok'+i).val();
            	var tangkap = $('#tangkap'+i).val();
            	var unit = $('#unit'+i).val();
            	var ikan = $('#ikan'+i).val();
            	var kapal = $('#kapal'+i).val();
            	var catat = $('#catat'+i).val();
            	$('#target_nelayan').val(nelayan)
            	$('#target_perairan').val(sumber)
            	$('#target_kabupaten').val(kabupaten)
            	$('#target_jenis_nelayan').val(kelompok)
            	$('#target_tangkap').val(tangkap)
            	$('#target_nama_unit').val(unit)
            	$('#target_ikan').val(ikan)
            	$('#target_kapal').val(kapal)
            	$('#target_note').val(catat)
            	$('#target_gambar').attr('src' , gambar)
            	var url_form = $('form').attr('action') + '?id=' + i
            	$('form').attr('action' , url_form)
            	$('input[type=submit]').val('Ubah')
            	var cancel_ubah = "<input type=button id='cancel' value='Batal Ubah' onclick='batal_ubah()'>";
            	$('input[type=submit]').next().remove()
            	$('input[type=submit]').parent().append(cancel_ubah)
            }

            function batal_ubah(){
            	var reset_button = "<input type=reset value='Reset'>";
            	$('form')[0].reset();
            	$('#cancel').parent().append(reset_button)	
            	$('#cancel').remove()
            	$('#target_gambar').attr('src' , '<?php  echo base_url();?>images/x.jpg');	
            }
        </script>

    </div>
</div>
</div>