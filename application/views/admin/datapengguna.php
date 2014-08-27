<div class="panel">
    <div class="panel-header bg-lightRed fg-brown">
      <center>  DAFTAR PENGGUNA</center>
    </div>
    <div class="panel-content">
       <?php echo form_open('cari_users');?>
			<div class="input-control text" data-role="input-control">
                        <input type="text" name="cari" placeholder="Pencarian Berdasarkan Username">
                        <button class="btn-search"></button>
                    </div>
					</form>
<font color="black">
<div class="panel" data-role="panel">
    <div class="panel-content">
        <table class=" table striped hovered " id="table_users" data-scroll="both" border="1" >
                <thead>
				<tr bgcolor="white">
		<th>USERNAME</th>
		<th>PASSWORD</th>
		<th>NAMA</th>
		<th>EMAIL</th>
		<th>NOTE</th>
		<th>LEVEL</th>
		<th>Aksi</th>
		</tr>
		</thead>
		<?php  foreach($pengguna->result() as $rows){
			$id=$rows->id;
			$user=$rows->username;
			$pass=$rows->password;
			$nick=$rows->Nama;
			$mail=$rows->email;
			$catat=$rows->note;
			$tingkat=$rows->level;
		?>
		<tbody>
		<tr>
		<td><?php echo $user;?></td>
		<td><?php echo $pass;?></td>
		<td><?php echo $nick;?></td>
		<td><?php echo $mail;?></td>
		<td><?php echo $catat;?></td>
		<td><?php echo $tingkat;?></td>
		<td> <a href="users/hapus_pengguna/<?php echo $id;?>">Hapus</a></td>
		</tr>
		<?php }?>
                </tbody>
				<tfoot>
				<tr>
				<th>USERNAME</th>
		<th>PASSWORD</th>
		<th>NAMA</th>
		<th>EMAIL</th>
		<th>NOTE</th>
		<th>LEVEL</th>
		<th>Aksi</th>
		</tr>
				</tfoot>
				<script>
                    $(function(){
                        $("#table_users").scrollbar({
                             height: 450
                        });
                    });
                
</script>
            </table>
    </div></font>
</div> 
    </div>
</div>
