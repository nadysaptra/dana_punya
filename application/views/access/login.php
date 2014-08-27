<div id="header" style="background:url('<?php echo base_url('images/header-login.png');?>');background-repeat:no-repeat;" >
<div id="banner">
	    <div id="welcome">
	      <h1>DINAS KELAUTAN DAN PERIKANAN</h1>
	    </div><!--close welcome-->
	    <div id="welcome_slogan">
	      <h1>DAERAH ISTIMEWA YOGYAKARTA</h1>
	    </div><!--close welcome_slogan-->
	  </div><!--close banner-->
 </div>
<div id="wrapper-login">
  <div align="center" id="layout-login">
    <h2> </h2>
    <?php echo form_open('login/proses_login');?>
    <fieldset>
      <legend>HALAMAN LOGIN</legend>
	  <font color='red'><?php echo validation_errors();?></font>
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
      Biarkan Kami Masuk <br />
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
	 	
<div id="footer">
  <p> <font color="white">&copy;2014 All Reserved  Metro UI STMIK Jenderal Achmad Yani Yogyakarta </font></p>
</div>
</body>
</html>
