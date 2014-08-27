<center><div class="span12" >
                                <div class="carousel" id="carousel">
                                    <div class="slide">
                                        <img src="<?php echo base_url();?>images/ferty.jpg" class="cover1" />
										
                                    </div>

                                    <div class="slide">
                                        <img src="<?php echo base_url();?>images/anakmangrove6.jpg" class="cover1" />
                                    </div>

                                    <div class="slide">
                                        <img src="<?php echo base_url();?>images/2BzRJs3JYf.jpg" class="cover1"/>
                                    </div>
									<div class="slide">
                                        <img src="<?php echo base_url();?>images/IMG_7498_zps5e866b4f.jpg" class="cover1"/>
                                    </div>
									
                                    <a class="controls left"><i class="icon-arrow-left-3"></i></a>
                                    <a class="controls right"><i class="icon-arrow-right-3"></i></a>
                                </div>
                                <script>
                                    $(function(){
                                        $("#carousel").carousel({
                                            height: 250
                                        });
                                    })
                                </script>
                            </div>
							</center>
<div class="panel">
    <div class="panel-header bg-lightBlue fg-red">
	<?php echo $caption;?>
	
    </div>
	
    <div class="panel-content">
        <?php foreach($biodata->result() as $rows){
		$nama_user=$rows->Nama;
		$email_user=$rows->email;
		$level_user=$rows->level;
		$status_akun=$rows->Aktif;
		$catatan=$rows->note;
		}
		?>
		<center>
		<div class="span6">
		<div class="panel-header bg-lightBlue fg-red"> Profil</div>
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
		 <tr bgcolor="gray">
		 <td> Nama User</td>
		 <td>:</td>
		 <td><?php echo $nama_user;?></td>
		 </tr>
		
		</table>
		</div>
		</div>
		<div class="span6">
		<div class="panel-header bg-lightBlue fg-white" id="ganti"> <button>Ganti <i> Password</i></button></div>
		</div>
		
		</center>
		
    </div>
</div>
<script >
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
                                    var content = '<?php echo form_open('staff/resetpass');?>' +'<font color="blue"><label> Nama Pengguna Tetap </label></font>'+'<div class="input-control text"><input type="text" name="username" disabled="yes" value="<?php echo $nama_user;?>"></div>'+
                                            ' <font color="blue"><label> Password Baru </label></font>' +
                                            '<div class="input-control password"><input type="password" name="password"><button class="btn-reveal"></button></div>' +'<font color="blue"><label> Email </label></font><div class="input-control text">'+'<input type="text" name="email">'+
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





</script>