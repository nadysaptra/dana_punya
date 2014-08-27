

<font color="brown">
<div class="panel " data-role="panel">
    <div class="panel-header bg-lightwhite fg-blue">

    </div>
    <div class="panel-content span4">
	<?php echo validation_errors();?>
	<?php echo form_open('alat_tangkap/validasi');?>
	<fieldset>
                    <legend>Masukan Data Alat Tangkap</legend>
                    <label>Alat Tangkap</label>
                    <div class="input-control text"  data-role="input-control"  data-hint="  masukan alat tangkap tidak boleh kosong " data-hint-position="right">
                        <input type="text"  placeholder="Alat tangkap" name="alat_tangkap">
                        <button class="btn-clear" tabindex="-1"></button>
                    </div>
					<input type="submit" value="Simpan">
                    <input type="reset" value="Reset">
					</fieldset>
	
	</form>
	
	
	
	</div>
	</div>

<div class="panel">
    <div class="panel-header">
        <?php echo $caption;?>
    </div>
    <div class="panel-content">
       <table class=" table striped hovered " id="scrollbox3"  border="1" >
                <thead>
				<tr bgcolor="gray">
					<th>Alat Tangkap</th>
					<th>Aksi</th>
                </tr>
                </thead>

               
				<?php  foreach ($list->result() as $rows){
				$kode=$rows->kode_tangkap;
				$alat=$rows->alat_tangkap;
				?>
				
				
				<tr >
				<td><?php echo $alat;?></td>
				<td><a href="alat_tangkap/edit?kode=<?php echo $kode;?>">Edit</a> <br><a href="alat_tangkap/hapus/<?php echo $kode;?>">hapus</a></td>
				
				</tr>
				<?php  }?>
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
                </script>

    </div>
</div>