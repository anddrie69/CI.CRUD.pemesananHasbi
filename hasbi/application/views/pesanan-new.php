        <?php
            if($pesanan != null){
                $judul = "Edit User";
                $id = $pesanan->id_pesanan;
                $nama = $pesanan->nama_pemesan;
                $alamat = $pesanan->alamat;
                $no_hp = $pesanan->no_hp;
                $tgl_jadi = $pesanan->tgl_jadi;
                $gambar = $pesanan->gambar;
                $keterangan = $pesanan->keterangan;
                $status = $pesanan->status_pemesan;

                // Jumlah harga
                $jumlah_harga = unserialize($pesanan->jumlah_harga);
                $jml_ko_panjang = $jumlah_harga['jml_ko_panjang'];
                $harga_ko_panjang = $jumlah_harga['harga_ko_panjang'];
                $jml_ko_pendek = $jumlah_harga['jml_ko_pendek'];
                $harga_ko_pendek = $jumlah_harga['harga_ko_pendek'];
                $jml_kk_panjang = $jumlah_harga['jml_kk_panjang'];
                $harga_kk_panjang = $jumlah_harga['harga_kk_panjang'];
                $jml_kk_pendek = $jumlah_harga['jml_kk_pendek'];
                $harga_kk_pendek = $jumlah_harga['harga_kk_pendek'];
                $jml_ka = $jumlah_harga['jml_ka'];
                $harga_ka = $jumlah_harga['harga_ka'];

                $label = 'Perbarui';
                $title = 'Perbarui Pesanan';
            }else{
                $judul = "Tambahkan User";
                $id ='';
                $nama = '';
                $alamat = '';
                $no_hp = '';
                $jumlah = '';
                $tgl_jadi = '';
                $gambar = '';
                $keterangan = '';
                $status = '';

                // Jumlah harga
                $jml_ko_panjang = '';
                $harga_ko_panjang = '';
                $jml_ko_pendek = '';
                $harga_ko_pendek = '';
                $jml_kk_panjang = '';
                $harga_kk_panjang = '';
                $jml_kk_pendek = '';
                $harga_kk_pendek = '';
                $jml_ka = '';
                $harga_ka = '';

                $label = 'Simpan';
                $title = 'Tambah Pesanan';
            }
        ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <?php echo $title; ?>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="/">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> <?php echo $title; ?>
                            </li>
                        </ol>
                    </div>
                </div>
                <?php 
                    if ($pesanan != null) {
                        echo form_open_multipart('index.php/pesanan/editPesanan/'.$id);
                    }else{
                        echo form_open_multipart('index.php/pesanan/addNew');
                    }
                ?> 
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Nama</h3>
                                </div>
                                <div class="panel-body">
                                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama" value="<?php echo $nama; ?>" REQUIRED>
                                </div>
                            </div>
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Alamat</h3>
                                </div>
                                <div class="panel-body">
                                    <textarea name="alamat" id="alamat" class="form-control" style="height: 300px"><?php echo $alamat; ?></textarea>
                                </div>
                            </div>
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Keterangan</h3>
                                </div>
                                <div class="panel-body">
                                    <textarea name="keterangan" id="keterangan" class="form-control" style="height: 300px"><?php echo $keterangan; ?></textarea>
                                </div>
                            </div>
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Jumlah harga</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="exampleInputName2">Kaos Oblong Panjang</label>
                                        <input type="text" class="form-control" name="jml_ko_panjang" value="<?php echo $jml_ko_panjang; ?>" placeholder="Masukkan Jumlah Kaos Oblong Panjang">
                                        <input type="text" class="form-control" name="harga_ko_panjang" value="<?php echo $harga_ko_panjang; ?>" placeholder="Masukkan Harga Kaos Oblong Panjang">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName2">Kaos Oblong Pendek</label>
                                        <input type="text" class="form-control" name="jml_ko_pendek" value="<?php echo $jml_ko_pendek; ?>" placeholder="Masukkan Jumlah Kaos Oblong Pendek">
                                        <input type="text" class="form-control" name="harga_ko_pendek" value="<?php echo $harga_ko_pendek; ?>" placeholder="Masukkan Harga Kaos Oblong Pendek">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName2">Kaos Kerah Panjang</label>
                                        <input type="text" class="form-control" name="jml_kk_panjang" value="<?php echo $jml_kk_panjang; ?>" placeholder="Masukkan Jumlah Kaos Kerah Panjang">
                                        <input type="text" class="form-control" name="harga_kk_panjang" value="<?php echo $harga_kk_panjang; ?>" placeholder="Masukkan Harga Kaos Kerah Panjang">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName2">Kaos Kerah Pendek</label>
                                        <input type="text" class="form-control" name="jml_kk_pendek" value="<?php echo $jml_kk_pendek; ?>" placeholder="Masukkan Jumlah Kaos Kerah Pendek">
                                        <input type="text" class="form-control" name="harga_kk_pendek" value="<?php echo $harga_kk_pendek; ?>" placeholder="Masukkan Harga Kaos Kerah Pendek">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName2">Kaos Anak</label>
                                        <input type="text" class="form-control" name="jml_ka" value="<?php echo $jml_ka; ?>" placeholder="Masukkan Jumlah Kaos Anak">
                                        <input type="text" class="form-control" name="harga_ka" value="<?php echo $harga_ka; ?>" placeholder="Masukkan Harga Kaos Anak">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Aksi</h3>
                                </div>
                                <div class="panel-body">
                                    <?php
                                        if($pesanan != null){
                                            echo '<input type="hidden" name="id" id="id" value="'. $id .'">';
                                        }
                                    ?>
                                    <input type="hidden" name="user" id="user" value="<?php echo $id_user; ?>">
                                    <input type="submit" class="btn btn-primary" value="<?php echo $label; ?>">
                                </div>
                            </div>
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">No Hp</h3>
                                </div>
                                <div class="panel-body">
                                    <input type="text" name="no_hp" id="no_hp" class="form-control" placeholder="Masukkan No HP" value="<?php echo $no_hp; ?>" REQUIRED>
                                </div>
                            </div>
                            <?php if($pesanan != null){ ?>
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Status Pesanan</h3>
                                    </div>
                                    <div class="panel-body">
                                        <select class="form-control" name="status" id="status" REQUIRED>
                                            <?php 
                                                foreach ($statusPesanan as $key => $value) {
                                                    if ($status == $key) {
                                                        $selected = 'selected="selected"';
                                                    }else{
                                                        $selected = '';
                                                    }
                                                    echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Tanggal Jadi</h3>
                                </div>
                                <div class="panel-body">
                                    <input type="text" name="tgl_jadi" id="tgl_jadi" class="form-control" placeholder="Tanggal Jadi" value="<?php echo $tgl_jadi; ?>" REQUIRED>
                                </div>
                            </div>
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Images</h3>
                                </div>
                                <div class="panel-body">
                                    <span class="ui-btn ui-icon-plus ui-btn-icon-left ui-corner-all fileinput-button">
                                        <input type="file" style="width:100%" name="foto" size="20" id="file_post_img" multiple data-role="none"/>
                                    </span>
                                    <br />
                                    <div id="foto" style="width:100%;"></div>
                                    <input id="fotoname" type="hidden" value="" name="gambar">
                                    <span id="loader" style="display:none;">Loading....</span>
                                    <?php
                                        if ($gambar != '') {
                                            echo '<img id="fotoEdit" src="'.base_url().'statics/images/'.$gambar.'" width="100%" />';
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>

    <script>
        $(function() {
            $( "#tgl_jadi" ).datepicker({ dateFormat: 'yy-mm-dd' });
        });

        $('#alamat').wysihtml5();
        $('#keterangan').wysihtml5();
    </script>