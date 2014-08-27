<div class="on-tablet-portrait on-phone on-destop ">
<div class="navigation-bar dark">
    <div class="navigation-bar-content container">
	<a href="home/staff" class="element"  data-hint="Beranda"
data-hint-position="bottom"><span class="icon-grid-view"></span> Beranda<sup></sup></a>
                    <span class="element-divider"></span>
        <ul class="element-menu">
            <li>
                <a href="staff" data-hint="<?php echo $userdata;?>"
data-hint-position="bottom"> <span class="icon-user-2"></span><?php echo $userdata;?></a>
            </li>

                    <li>
                <a href="#" class="dropdown-toggle" data-hint="laporan"
> <span class="icon-book"></span>Laporan</a>
                <ul class="dropdown-menu dark" data-role="dropdown">
					<li><a href="#" class="dropdown-toggle"><i>Review</i> </a>
                        <ul class="dropdown-menu dark" data-role="dropdown">
                            <li><a href="#" data-hint="laporan Data Produksi"
data-hint-position="right">Produksi</a></li>
                            <li><a href="#" data-hint="Laporan Data Nelayan"
data-hint-position="right">Nelayan</a></li>
                            <li><a href="#" data-hint="Laporan Data  Daftar Daerah/ kota "
data-hint-position="right">Daerah</a></li>
                            <li><a href="#" data-hint="Laporan Data  Daftar  Jenis Tangkap"
data-hint-position="right">jenis Tangkap</a></li>
                            <li><a href="#" data-hint="Laporan Data Daftar jenis Ikan "
data-hint-position="right">Jenis Ikan</a></li>
                            <li><a href="#" data-hint="Laporan  Data Unit Satuan "
data-hint-position="right">Unit</a></li>
							<li><a href="#" data-hint="Laporan Data Cara Perlakuan / Trip Kerja"
data-hint-position="right">Cara Perlakuan</a></li>
							<li><a href="#" data-hint="Laporan Data Kapal "
data-hint-position="right"> kapal</a></li>
                        </ul>
						</li>
                    <li>
                        <a href="#" class="dropdown-toggle">Berdasarkan </a>
                        <ul class="dropdown-menu dark" data-role="dropdown">
                           <li><a href="<?php echo base_url();?>view_staff_pl" data-hint="Laporan Kategori Berdasarkan Perairan Laut "
data-hint-position="right">Perairan Laut</a></li>
						   <li><a href="<?php echo base_url();?>view_staff_pu" data-hint="Laporan Kategori Berdasarkan  Perairan Umum"
data-hint-position="right">Perairan Umum</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
			<li> <a class="dropdown-toggle" href="#" data-hint="Data Statistik"
><span class="icon-stats"></span>Statistik</a>		   
                <ul class="dropdown-menu dark" data-role="dropdown">
                    <li>
                        <a href="#" class="dropdown-toggle">Berdasarkan </a>
                        <ul class="dropdown-menu dark" data-role="dropdown">
                           <li><a href="#">Perairan Laut</a></li>
						   <li><a href="#">Perairan Umum</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
			<li> <a class="dropdown-toggle" href="#"data-hint="Halaman Statis" data-hint="Halaman Statis"
><span class="icon-chrome"></span>Halaman statis </a></li>
			
						<li><a href="home/kontak" data-hint="Hubungi Kamu"
> <span class="icon-support"></span>Hubungi Kami</a></li>
						<li><a href="home/panduan" data-hint="Info Panduan"
> <span class="icon-info-2"></span>Panduan</a></li>
						<li><a href="home/keluar" data-hint="Keluar "
> <span class="icon-exit"></span>keluar</a></li>
							</ul>
        
        </div>
    </div>
</div>
