<html>
    <head>
        <title>Print Pesanan | Hasby Sablon</title>
        <link href="<?php echo base_url(); ?>statics/css/bootstrap.min.css" rel="stylesheet">
        <style type="text/css">
            td {
                font-size: 15px;
            }
        </style>
    </head>
    <body>
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
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <img src="<?php echo base_url(); ?>statics/img/logo.jpg" width="100%">
                </div>
                <div class="col-lg-5">
                    <h2 style="text-align:center;">Nota Pemesanan Pelanggan</h2>
                </div>
                <div class="col-lg-4">
                    <table class="table" align="center" width="100%">
                        <tr>
                            <td>No Nota</td>
                            <td>:</td>
                            <td>
                                <?php 
                                    if ($pesanan->id_pesanan > 0 && $pesanan->id_pesanan < 10) {
                                        echo '0000'.$pesanan->id_pesanan; 
                                    }else if ($pesanan->id_pesanan > 9 && $pesanan->id_pesanan < 100) {
                                        echo '000'.$pesanan->id_pesanan; 
                                    }else if ($pesanan->id_pesanan > 99 && $pesanan->id_pesanan < 1000) {
                                        echo '00'.$pesanan->id_pesanan; 
                                    }else if ($pesanan->id_pesanan > 999 && $pesanan->id_pesanan < 10000) {
                                        echo '0'.$pesanan->id_pesanan; 
                                    }else if ($pesanan->id_pesanan > 9999 && $pesanan->id_pesanan < 100000) {
                                        echo $pesanan->id_pesanan; 
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><?php echo $pesanan->nama_pemesan; ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><?php echo $pesanan->alamat; ?></td>
                        </tr>
                        <tr>
                            <td>No HP</td>
                            <td>:</td>
                            <td><?php echo $pesanan->no_hp; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-bordered">
                        <tr class="danger">
                            <td>ORDER</td>
                            <td><?php echo $pesanan->tgl_pesan; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-bordered" align="center" width="100%">
                        <tr>
                            <td>Keterangan</td>
                            <td>Keterangan Jumlah</td>
                            <td>Harga</td>
                            <td width="20%">Sub Harga</td>
                        </tr>
                        <tr>
                            <td><?php echo $pesanan->keterangan; ?></td>
                            <td>
                                <?php
                                    // if ($jml_ko_panjang != '') {
                                        echo 'Jumlah Kaos Oblong Panjang = '.$jml_ko_panjang.'<br>';
                                        echo 'Jumlah Kaos Oblong Pendek = '.$jml_ko_pendek.'<br>';
                                        echo 'Jumlah Kaos Kerah Panjang = '.$jml_kk_panjang.'<br>';
                                        echo 'Jumlah Kaos Kerah Pendek = '.$jml_kk_pendek.'<br>';
                                        echo 'Jumlah Kaos Anak = '.$jml_ka.'<br>';
                                    // }
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo 'Rp. '.$harga_ko_panjang.'<br>';
                                    echo 'Rp. '.$harga_ko_pendek.'<br>';
                                    echo 'Rp. '.$harga_kk_panjang.'<br>';
                                    echo 'Rp. '.$harga_kk_pendek.'<br>';
                                    echo 'Rp. '.$harga_ka.'<br>';
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo 'Rp. '.(int)$harga_ko_panjang*(int)$jml_ko_panjang.'<br>';
                                    echo 'Rp. '.(int)$harga_ko_pendek*(int)$jml_ko_pendek.'<br>';
                                    echo 'Rp. '.(int)$harga_kk_panjang*(int)$jml_kk_panjang.'<br>';
                                    echo 'Rp. '.(int)$harga_kk_pendek*(int)$jml_kk_pendek.'<br>';
                                    echo 'Rp. '.(int)$harga_ka*(int)$jml_ka.'<br>';
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">Total</td>
                            <td>Rp. <?php echo ((int)$harga_ko_panjang*(int)$jml_ko_panjang)+((int)$harga_ko_pendek*(int)$jml_ko_pendek)+((int)$harga_kk_panjang*(int)$jml_kk_panjang)+((int)$harga_kk_pendek*(int)$jml_kk_pendek)+((int)$harga_ka*(int)$jml_ka); ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-bordered">
                        <tr class="danger">
                            <td>Tanggal Jadi </td>
                            <td><?php echo $pesanan->tgl_jadi; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-bordered">
                        <tr class="success">
                            <td>Status Pesanan </td>
                            <td><?php echo statusPesanan($pesanan->status_pemesan); ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <h3 style="text-align:center;">Pemesan</h3>
                    <br><br><br><br>
                    <h3 style="text-align:center;">(............................)</h3>
                </div>
                <div class="col-lg-4">
                </div>
                <div class="col-lg-4">
                    <h3 style="text-align:center;">Hormat Kami</h3>
                    <br><br><br><br>
                    <h3 style="text-align:center;">(............................)</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <br><br><br>
                    <button onclick="printFunction()">Print Dokumen</button>
                    <br><br><br>
                </div>
            </div>
        </div>
        <script>
            function printFunction() {
                window.print();
            }
        </script>
    </body>
</html>