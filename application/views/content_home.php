<table  class="table" border="0" cellpadding="1" cellspacing="1">
  <tr>
    <td height="100" colspan="2" style="background:url('<?php echo base_url('images/header.png');?>');background-repeat:no-repeat;" ></td>
	<td bgcolor="brown">Pencarian
	<?php echo form_open('search');?>
	<div class="input-control text" data-role="input-control">
                        <input type="text" name="cari">
                        <button class="btn-search"></button>
                    </div>
					</form>	
</td>					
  </tr>
 <tr bgcolor="green">
 <td  >
					<div class="span3"><div class="times " data-role="times" data-style-background="bg-lightBlue"></div> </div>
					</td>					
					<td colspan="2"><div class="panel-header  fg-dark"><div class="carousel" id="carousel2">
					<?php foreach($headline->result() as $rows) {?>
					<div class="slide">
                                      <p<a href="#"><?php echo $rows->judul;?></a></p>
                                    </div>
							<?php }?>	
					</div></div></td>
					
 </tr>
  <tr bgcolor="blue">
  <td colspan="3">
  <div class="navigation-bar dark">
    <div class="navigation-bar-content container">
	<a href="<?php echo site_url();?>" class="element"  data-hint="Beranda"
data-hint-position="bottom"><span class="icon-grid-view"></span> Beranda<sup></sup></a>
                    <span class="element-divider"></span>
						<a href="<?php echo site_url();?>view_profil" class="element"  data-hint="Profil"
data-hint-position="bottom"><span class="icon-user-3"></span>Profil<sup></sup></a>
  <span class="element-divider"></span>
						<a href="<?php echo site_url();?>view_berita" class="element"  data-hint="Berita"
data-hint-position="bottom"><span class="icon-newspaper"></span>Berita<sup></sup></a>
  <span class="element-divider"></span>
					<ul class="element-menu">  
            <li></li>
		</ul>
	</div>
	</div>
  
  </td>
  </tr>
   <tr>
    <td colspan="2">
	<div class="span11">
	<div class="carousel" id="carousel1">
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
								</div>
                             
	</td>
	<td>
	<div class="span3">
   <div class="panel">
   <div class="panel-header">New Flash</div>
   <div class="panel-content">
	</div>
	</div>
	</div>
	</td>
	
  </tr>
  <tr>
   <td>
   <div class="span4">
   <div class="panel">
   <div class="panel-header">Menu Login</div>
   <div class="panel-content">
   <?php echo form_open('login/proses_login');?>
    <fieldset>
      <label><font color="blue">Nama Akun /<i>Username</i></font></label>
      <div class="input-control text" data-role="input-control">
        <input type="text" placeholder="username" name="username" />
        <button class="btn-clear" tabindex="-1"></button>
      </div>
      <label> <font color="blue">KATA KUNCI / <i>Password</i></font></label>
      <div class="input-control password" data-role="input-control">
        <input type="password" placeholder=" password" autofocus name="password" />
        <button class="btn-reveal" tabindex="-1"></button>
      </div>
      <input name="checkbox" type="checkbox" id="checkbox" checked="yes" value="chek login" />
     <font color="black" >Biarkan Kami Masuk </font><br />
      <input type="submit"  name="button_login " value="Masuk " />
      <p><br />
        Lupa Kata Kunci ?<a href="forgotpass.php"> Bantuan </a> </p>
    </fieldset>
     </form>
	 <button class="button" id="daftar">Belum Punya Akun <i class=" icon-unlocked"></i></button>
<script type="text/javascript">
$("#daftar").on('click', function(){
                            $.Dialog({
                                shadow: true,
                                overlay: false,
                                draggable: true,
                                icon: '<span class="icon-user-2"></span>',
                                title: 'Register',
                                width: 500,
                                padding:5,
                                content: 'Pendaftaran Akun Baru.',
                                onShow: function(){
                                    var content = '<?php echo form_open("login/daftar");?>' +
                                            '<label><font color="black"><i>Username</i>/Akun Baru</label></font>' +
                                            '<div class="input-control text"><input type="text" name="username"><button class="btn-clear"></button></div>' +
                                            '<label><font color="black"><i>Password</i>/Kata Kunci</label></font>'+
                                            '<div class="input-control password"><input type="password" name="password"><button class="btn-reveal"></button></div>' +'<label><font color="black">Email</label></font>'+'<div class="input-control text"><input type="text" name="email"><button class="btn-clear"></button></div>'+
                                            '<div class="input-control checkbox"><label><input type="checkbox" name="level" checked="yes"/><span class="check"></span><font color="black"><i>visitor</i></font></label></div>'+
                                            '<div class="form-actions">' +
                                            '<button class="button primary">Buat Akun</button>&nbsp;'+
                                            '<button class="button" type="button" onclick="$.Dialog.close()">Cancel</button> '+
                                            '</div>'+
                                            '</form>';

                                    $.Dialog.title("Daftar");
                                    $.Dialog.content(content);
                                }

                            });
                        });
</script>
</div>
</div>
</div>
<div class="span4">
   <div class="panel">
   <div class="panel-header">Kalender</div>
   <div class="panel-content">
  <font color="black"> <div class="calendar" data-start-mode="month" data-role="calendar" ></div></font>
	</div>
	</div>
	</div>
	
   </td>
   
    <td>
	<div class="span8">
   <div class="panel" data-role="panel">
   <nav class="breadcrumbs">
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Library</a></li>
        <li class="active"><a href="#">Data</a></li>
    </ul>
</nav>
   <div class="panel-header bg-brown fg-black">
</div>
   <div class="panel-content">
  
   
   
   </div>
   </div>
   </div>
	</td>
    <td>	
	<div class="span3">
   <div class="panel">
   <div class="panel-content">
   <?php $link_terkait;
				$pecah = explode('<div class="box-graph">', $link_terkait);
				$pecahLagi = explode('</div>', $pecah[1]);
				echo'<div class="carousel" id="carousel3">';
				echo "<div  class='slide'>".$pecahLagi[0]."</div>";
				echo "</div>";
				echo "<a class='controls left'><i class='icon-arrow-left-3'></i></a>";
				echo "     <a class='controls right'><i class='icon-arrow-right-3'></i></a>";
		  ?>
		 
		  
   
   </div>
   </div>
   </div></td>
  </tr>
 <tr  >
 <td colspan="3"> 
 <div class="span12">
   <div class="panel span12">
   <div class="panel-content ">
          
   
   
   </div>
   </div>
   </div>
 </td>
 </tr>
  <tr bgcolor="blue" >
    <td colspan="3"><div id="footer">
  <p> <font color="white">&copy;2014 All Reserved  Metro UI STMIK Jenderal Achmad Yani Yogyakarta </font></p>
</div></td>
  </tr>
</table>
