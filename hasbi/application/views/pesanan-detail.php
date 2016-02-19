        <?php
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
        ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Pesanan Detail
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="/">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Pesanan Detail
                            </li>
                        </ol>
                    </div>
                </div>
                <form method="post">
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Nama</h3>
                                </div>
                                <div class="panel-body">
                                    <?php echo $pesanan->nama_pemesan; ?>
                                </div>
                            </div>
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Alamat</h3>
                                </div>
                                <div class="panel-body">
                                    <?php echo $pesanan->alamat; ?>
                                </div>
                            </div>
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Keterangan</h3>
                                </div>
                                <div class="panel-body">
                                    <?php echo $pesanan->keterangan; ?>
                                </div>
                            </div>
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Jumlah harga</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="exampleInputName2">Kaos Oblong Panjang</label><br>
                                        Jumlah : <?php echo $jml_ko_panjang; ?> <br>
                                        Harga : <?php echo $harga_ko_panjang; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName2">Kaos Oblong Pendek</label><br>
                                        Jumlah : <?php echo $jml_ko_pendek; ?> <br>
                                        Harga : <?php echo $harga_ko_pendek; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName2">Kaos Kerah Panjang</label><br>
                                        Jumlah : <?php echo $jml_kk_panjang; ?><br>
                                        Harga : <?php echo $harga_kk_panjang; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName2">Kaos Kerah Pendek</label><br>
                                        Jumlah : <?php echo $jml_kk_pendek; ?><br>
                                        Harga : <?php echo $harga_kk_pendek; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName2">Kaos Anak</label><br>
                                        Jumlah : <?php echo $jml_ka; ?><br>
                                        <?php echo $harga_ka; ?>
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
                                    <input type="submit" class="btn btn-primary" value="Print" onclick="window.open('<?php echo base_url(); ?>index.php/pesanan/pesananPrint/<?php echo $pesanan->id_pesanan; ?>')">
                                </div>
                            </div>
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Status Pesanan</h3>
                                </div>
                                <div class="panel-body">
                                    <?php echo statusPesanan($pesanan->status_pemesan); ?>
                                </div>
                            </div>
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">No HP</h3>
                                </div>
                                <div class="panel-body">
                                    <?php echo $pesanan->no_hp; ?>
                                </div>
                            </div>
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Tanggal Jadi</h3>
                                </div>
                                <div class="panel-body">
                                    <?php echo $pesanan->tgl_jadi; ?>
                                </div>
                            </div>
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Images</h3>
                                </div>
                                <div class="panel-body">
                                    <?php
                                        if ($pesanan->gambar != null) {
                                            echo '<img id="fotoEdit" src="'.base_url().'statics/images/'.$pesanan->gambar.'" width="100%" />';
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