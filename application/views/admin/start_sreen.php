<div class="tile-area tile-area-dark" >		
<center>
<div class="grid fluid">
<div class="panel" >
    <div class="panel-header bg-lightGreen fg-white">
    </div>
    <div class="panel-content">
        <h1 class="tile-area-title fg-white">Mulai</h1>
		<div class="span12">
		<div class="times" data-role="times" data-style-background="bg-lightBlue"></div>
		<?php $tanggal=date('d-m-Y'); echo $tanggal;?>

        <div class="user-id">
			<div class="span3">
			<div class="navigation-bar dark">
			<div class="span2">
			<ul class="element-menu">
				<li>
                        <a href="#" class="dropdown"><span><?php echo $userdata;?></span></a>
						<ul class="dropdown-menu dark" data-role="dropdown">	
						</ul>
						</li>
				</ul>
				</div>
				</div>
				</div>
        </div>
		</div>
    </div>
</div>
</div>

<div class="span8" >
<h1><span class="icon-grid-view fg-white"></span></h1>
		<h1><a href="admin"> Menu Utama </a></h1>
                                <div class="carousel" id="carousel1">
                                    <div class="slide">
                                        <img src="images/ferty.jpg" class="cover1" />
										
                                    </div>

                                    <div class="slide">
                                        <img src="images/anakmangrove6.jpg" class="cover1" />
                                    </div>

                                    <div class="slide">
                                        <img src="images/2BzRJs3JYf.jpg" class="cover1"/>
                                    </div>
									<div class="slide">
                                        <img src="images/IMG_7498_zps5e866b4f.jpg" class="cover1"/>
                                    </div>
									
                                    <a class="controls left"><i class="icon-arrow-left-3"></i></a>
                                    <a class="controls right"><i class="icon-arrow-right-3"></i></a>
                                </div>
                                <script>
                                    $(function(){
                                        $("#carousel1").carousel({
                                            height: 300
                                        });
                                    })
                                </script>
                            </div>

</center>
		
		</div>

