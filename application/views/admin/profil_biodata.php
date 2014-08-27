<div class="panel">
    <div class="panel-header bg-lightBlue fg-red">
	<?php echo $caption;?>  
    </div>
    <div class="panel-content">
        <?php foreach($biodata->result() as $rows){
		$id_user=$rows->id;
		$nama_user=$rows->Nama;
		$email_user=$rows->email;
		$level_user=$rows->level;
		$status_akun=$rows->Aktif;
		$catatan=$rows->note;
		}
		?>
		<center>
		<div class="span6">
		<div class="panel-header bg-lightBlue fg-brown"> Profil</div>
		<div class="panel-content">
		<table class="table">
		 <tr bgcolor="gray">
		 <td> Nama Pengguna</td>
		 <td>:</td>
		 <td><?php echo $nama_user;?></td>
		 </tr>
		 <tr bgcolor="gray">
		 <td> Email Pengguna</td>
		 <td>:</td>
		 <td><?php echo $email_user;?></td>
		 </tr>
		 <tr bgcolor="gray">
		 <td> Level </td>
		 <td>:</td>
		 <td><?php echo $level_user;?></td>
		 </tr>
		 <tr bgcolor="gray">
		 <td> Status Akun</td>
		 <td>:</td>
		 <td><?php echo $status_akun;?></td>
		 </tr>
		 <tr bgcolor="gray">
		 <td> Catatan</td>
		 <td>:</td>
		 <td><?php echo $catatan;?></td>
		 </tr>
		</table>
		</div>
		</div>
		<div class="span6">
		<div class="panel-header bg-lightBlue fg-white" id="ganti"> <button>Ganti <i> Password</i></button></div>
		</div>
		<div class="span6">
		<div class="panel-header bg-lightBlue fg-white" id="new_user"><button>Tambah Pengguna Selain Administrator</button></div>
		</div>
		
		</center>
		
    </div>
</div>
<script>
                        $("#ganti").on('click', function(){
                            $.Dialog({
                                shadow: true,
                                overlay: false,
                                draggable: true,
                                icon: '<span class="icon-unlocked"></span>',
                                title: 'Draggable window',
                                width: 500,
                                padding: 10,
                                content: 'Pop Up content Ganti Password',
                                onShow: function(){
                                    var content = '<?php echo form_open('admin/resetpass');?>' +'<font color="blue"><label> Nama Pengguna Tetap </label></font>'+'<div class="input-control text"><input type="hidden" name="id"  value="<?php echo $id_user;?>"><input type="text" name="username" disabled="yes" value="<?php echo $nama_user;?>"></div>'+
                                            ' <font color="blue"><label> Password Baru </label></font>' +
                                            '<div class="input-control password"><input type="password" name="password"><button class="btn-reveal"></button></div>' +
                                            '<div class="form-actions">' +
                                            '<button class="button primary">Simpan..</button>&nbsp;'+
                                            '<button class="button" type="button" onclick="$.Dialog.close()">Batal</button> '+
                                            '</div>'+
                                            '</form>';

                                    $.Dialog.title("Ganti Password");
                                    $.Dialog.content(content);
                                }

                            });
                        });
                        $("#new_user").on('click', function(){
                            $.Dialog({
                                shadow: true,
                                overlay: false,
                                draggable: true,
                                icon: '<span class="icon-user-2"></span>',
                                title: 'Draggable window',
                                width: 500,
                                padding: 10,
                                content: 'Pop Up content Tambah Pengguna Baru',
                                onShow: function(){
                                    var content = '<?php echo form_open('admin/new_user');?>' +
                                            ' <font color="blue"><label> Nama Pengguna Baru</label></font>' +
                                            '<div class="input-control text"><input type="text" name="username"><button class="btn-clear"></button></div>' +
                                            '<font color="blue"><label> Password </label></font>'+
                                            '<div class="input-control password"><input type="password" name="password"><button class="btn-reveal"></button></div>' +
                                            '<div class="form-actions">' +'<font color="blue"><label> Level </label></font>'+'<select name="level"><option value="Staff">Staff</option><option value="Pengunjung">Pengguna</option></select>'+
                                            '<br><button class="button primary">Simpan..</button>&nbsp;'+
                                            '<button class="button" type="button" onclick="$.Dialog.close()">Batal</button> '+
                                            '</div>'+
                                            '</form>';

                                    $.Dialog.title("Tambah Pengguna Baru");
                                    $.Dialog.content(content);
                                }

                            });
                        });






</script>