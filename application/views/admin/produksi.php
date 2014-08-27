<div class="panel">
    <div class="panel-header bg-lightBlue">
        <center>
            <?php echo $caption;?>
        </center>
        <button class="button" id="newjenis_ikan"><i class="icon-plus"></i>Tambah Jenis Ikan</button>
        <button class="button" id="new_kota"><i class="icon-plus"></i>Tambah Kota</button>
        <button class="button" id="new_satuan"><i class="icon-plus"></i>Tambah Satuan Berat</button>
    </div>
    <div class="panel-content">
        <?php echo validation_errors(); ?>
        <?php echo form_open( 'produksi/simpan');?>
            <table class=" table span6">
                <tr bgcolor="gray">
                    <td>Nama Produksi</td>
                    <td>
                        <div class="input-control text" data-role="input-control" data-hint="Nama Produksi tidak boleh kosong" data-hint-position="right">
                            <input type="text" name="nama_produksi">
                            <button class="btn-clear" tabindex="-1"></button>
                        </div>
                    </td>
                </tr>
                <tr bgcolor="gray">
                    <td>Ruang Lingkup Produksi</td>
                    <td>
                        
                            <select name="jenis_produksi">
                                <option value="Termasuk produksi">Termasuk produksi</option>
                                <option value="Tidak termasuk produksi">Tidak termasuk produksi</option>
                            </select>
                        
                    </td>
                </tr>
                <tr bgcolor="gray">
                    <td>Jumlah Produksi</td>
                    <td>
                        <div class="input-control text" data-role="input-control" data-hint="Jumlah Produksi tidak boleh kosong format: Angka" data-hint-position="right">
                            <input type="text" name="jumlah_produksi">
                            <button class="btn-clear" tabindex="-1"></button>
                        </div>
                    </td>
                </tr>
                <tr bgcolor="gray">
                    <td>Tahun Prduksi</td>
                    <td>
                        <div class="input-control text" data-role="input-control" data-hint="Tahun Produksi tidak boleh kosong  Format : angka tahun xxx" data-hint-position="right">
                            <input type="text" name="tahun_produksi">
                            <button class="btn-clear" tabindex="-1"></button>
                        </div>
                    </td>
                </tr>

                <tr bgcolor="gray">
                    <td>Sumber Perairan</td>
                    <td>
                        
                            <select name="sumber_perairan">
                                <option value="laut">Perairan Laut</option>
                                <option value="umum">Perairan Umum</option>
                            </select>
                        
                    </td>
                </tr>
                <tr bgcolor="gray">
                    <td>Jenis Tangkap</td>
                    <td>
                        <div class="input-control text" data-role="input-control" data-hint="Jenis_tangkap  tidak boleh kosong" data-hint-position="right">
                            <input type="text" name="jenis_tangkap">
                            <button class="btn-clear" tabindex="-1"></button>
                        </div>
                    </td>
                </tr>
                <tr bgcolor="gray">
                    <td>Jenis Ikan</td>
                    <td>
                        <select name="jenis_ikan">
                            <?php foreach ($ikan->result() as $data){$list=$data->jenis_ikan;?>
                            <option value="<?php echo $list;?>">
                                <?php echo $list;?>
                            </option>
                            <?php }?>
                        </select>
                    </td>
                </tr>
                <tr bgcolor="gray">
                    <td>Alat transportasi</td>
                    <td>
                        <div class="input-control text" data-role="input-control">
                            <input type="text" name="transportasi">
                            <button class="btn-clear" tabindex="-1"></button>
                        </div>
                    </td>
                </tr>
                <tr bgcolor="gray">
                    <td>Kota</td>
                    <td>

                        <select name="kota">
                            <?php foreach ($daerah->result() as $data){$list=$data->nama_daerah;?>
                            <option value="<?php echo $list;?>">
                                <?php echo $list;?>
                            </option>
                            <?php }?>
                        </select>
                    </td>

                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="Simpan" value="Simpan">
                        <input type="reset" name="Hapus" value="reset">
                    </td>

                </tr>
            </table>
        
        <?php echo form_close();?>
    </div>
</div>

<div class="tab-control" data-role="tab-control" style="color:black">
    <ul class="tabs" style="width:auto !important; ">
        <li class="active"><a href="#_page_1">Data Produksi</a></li>
    </ul>
 
    <div class="frames">
        <div class="frame" id="_page_1">
        
            <div class="panel" data-role="panel">
                <div class="panel-header bg-lightBlue fg-gray ">
                   Lihat List Data Produksi
                </div>
                <div class="panel-content">
                
                    <table class=" table striped hovered " id="scrollbox3" data-scroll="vertical" >
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

                            <tbody>
                            <?php  foreach($produksi->result() as $data){
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
                            
                            
                            <tr >
                                <td bgcolor="white"><?php echo $nama;?></td>
                                <td bgcolor="white"><?php echo $jenis;?></td>
                                <td bgcolor="white"><?php echo $tahun;?></td>
                                <td bgcolor="white"><?php echo $jumlah;?></td>
                                <td bgcolor="white"><?php echo $sumber;?></td>
                                <td bgcolor="white"><?php echo $tangkap;?></td>
                                <td bgcolor="white"><?php echo $unit;?></td>
                                <td bgcolor="white"><?php echo $kota;?></td>
                                <td bgcolor="white"><?php echo $jenis_ikan;?></td>
                                <td bgcolor="white">
                                    <i class="icon-plus"></i><a href="ubah_produksi?id_produksi=<?php echo $kode;?>">ubah</a>
                                    <br>
                                    <i class="icon-minus"></i><a href="produksi/hapus/<?php echo $kode;?>">hapus</a>
                                </td>
                            </tr>
                            <?php }?>
                          
                            </tbody>
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
                            
                        </table>
                </div>
                
            </div>


        </div>
        <div class="frame" id="_page_2">

            <div class="frame" id="_page_3">

                <div class="frames">
                    <div class="frame" id="_page_5">
                        <div class="panel-header bg-lightBlue fg-white ">
                            Lihat List Data Jenis Ikan
                        </div>
                        <div class="panel-content">
                            <center>
                                <div class="span6">

                                    <table class=" table " id="scrollbox4" data-scroll="both" style="width: 500px">
                                        <thead>
                                            <tr bgcolor="gray">
                                                <th>Id Ikan</th>
                                                <th>Jenis Ikan</th>
                                                <th>Nama Ikan</th>
                                                <th>Nama Indonesia</th>
                                                <th>Nama Inggris</th>
                                                <th>Nama Ilmiah/Latin</th>
                                                <th>Nama Group</th>
                                                <th>Hapus Data</th>
                                                <th>Ubah Data</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($ikan->result() as $data){ $no=1; $id=$data->id_ikan; $list=$data->jenis_ikan; $nama_ikan=$data->nama_ikan; $indonesia=$data->nama_indonesia; $inggris=$data->nama_inggris; $ilmiah=$data->nama_latin_ilmiah; $group=$data->nama_group; ?>

                                            <tr>
                                                <td bgcolor="white">
                                                    <?php echo $id;?>
                                                </td>
                                                <td bgcolor="white">
                                                    <?php echo $list;?>
                                                </td>
                                                <td bgcolor="white">
                                                    <?php echo $nama_ikan;?>
                                                </td>
                                                <td bgcolor="white">
                                                    <?php echo $indonesia;?>
                                                </td>
                                                <td bgcolor="white">
                                                    <?php echo $inggris;?>
                                                </td>
                                                <td bgcolor="white">
                                                    <?php echo $ilmiah;?>
                                                </td>
                                                <td bgcolor="white">
                                                    <?php echo $group;?>
                                                </td>
                                                <td bgcolor="black"><i class="icon-minus"></i><a href="produksi/hapus_ikan/<?php echo $id;?>">HAPUS</a>
                                                </td>
                                                <td bgcolor="black"><i class="icon-plus"></i><a href="produksi/edit_ikan?id_ikan<?php echo $id;?>">Edit</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <?php }?>
                                    </table>

                                </div>
                            </center>
                        </div>
                    </div>

                </div>
            </div>
            <div class="frames">
                <div class="frame" id="_page_4">
                    Pencarian :
                    <div class="input-control text" data-role="input-control" name="cari">
                        <input type="text">
                        <button class="btn-search"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

   // $(function(){
   //     $("#scrollbox3").scrollbar({
   //          height: 600
   //     });
   // });

  $(function() {

     $('#scrollbox3').dataTable();
      $("#newjenis_ikan").on('click', function() {
          $.Dialog({
              overlay: true,
              shadow: true,
              flat: true,
              draggable: true,
              title: 'Flat window',
              content: '',
              padding: 10,
              onShow: function(_dialog) {
                  var content = '<?php echo form_open("produksi/simpan_jenis_ikan");?>' +
                      '<div class="input-control text"data-hint="data harus diIsi" data-hint-position="right" >' + '<input type="text" name="jenis_ikan" placeholder="masukan jenis ikan " ><button class="btn-clear"></button></div>' +
                      '<div class="form-actions" >' +
                      '<button class="button primary">Simpan</button>&nbsp;' +
                      '<button class="button" type="button" onclick="$.Dialog.close()">batal</button> ' +
                      '</div>' +
                      '</form>';

                  $.Dialog.title("<font color='red'>Tambah Jenis Ikan</font> ");
                  $.Dialog.content(content);
              }
          });
      });
      $("#new_kota").on('click', function() {
          $.Dialog({
              overlay: true,
              shadow: true,
              flat: true,
              draggable: true,
              title: 'Flat window',
              content: '',
              padding: 10,
              onShow: function(_dialog) {
                  var content = '<?php echo form_open("produksi/simpan_kota");?>' + 
                                '<div class="input-control text">' +
                                    '<input type="text" name="nama_daerah" placeholder="masukan kota baru "><button class="btn-clear"></button>' +
                                '</div>' + 
                                '<div class="form-actions">' + 
                                    '<button class="button primary">Simpan</button>&nbsp; <button class="button" type="button" onclick="'+$.Dialog.close()+'">batal</button>' + 
                                '</div>' + 
                                '</form>';
                  $.Dialog.title("<font color='red'>Tambah Kota Baru</font> ");
                  $.Dialog.content(content);
              }
          });
      });
      $("#new_satuan").on('click', function() {
          $.Dialog({
              overlay: true,
              shadow: true,
              flat: true,
              draggable: true,
              title: 'Flat window',
              content: '',
              padding: 10,
              onShow: function(_dialog) {
                  var content = '<?php echo form_open("produksi/simpan_satuan");?>' + 
                                '<div class="input-control text">' +
                                    '<input type="text" name="jenis_satuan" placeholder="masukan satuan berat "><button class="btn-clear"></button> '+
                                '</div>' + 
                                '<div class="form-actions">' + '<hr size="3" noshade>' +
                                    '<button class="button primary">Simpan</button>&nbsp;' + 
                                    '<button class="button" type="button" onclick="$.Dialog.close()">batal</button>' + 
                                '</div>' + 
                                '</form>';
                  $.Dialog.title("<font color='red'>Tambah Satuan Berat Baru</font> ");
                  $.Dialog.content(content);
              }
          });
      });
  });
</script>

