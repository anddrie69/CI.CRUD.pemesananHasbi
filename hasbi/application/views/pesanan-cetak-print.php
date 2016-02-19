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
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 style="text-align:center;">Rekap Data Pemesanan Pelanggan</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-bordered" align="center" width="100%" border="1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tanggal Pesan</th>
                                <th>Tanggal Jadi</th>
                                <th>Status Pesanan</th>
                                <th>Jumlah Pesanan</th>
                                <th>Total Harga</th>
                            </tr>
                        </thead>
                        <tbody class="table-hover">
                            <?php 
                                if ($pesanan != null) {
                                    $no = 1;
                                    $all_total = 0;
                                    foreach ($pesanan as $key => $value) {
                                        // Jumlah harga
                                        $jumlah_harga = unserialize($value->jumlah_harga);
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

                                        $jml_pesan = (int)$jml_ko_panjang+(int)$jml_ko_pendek+(int)$jml_kk_panjang+(int)$jml_kk_pendek+(int)$jml_ka;

                                        $total = (int)$harga_ko_panjang+(int)$harga_ko_pendek+(int)$harga_kk_panjang+(int)$harga_kk_pendek+(int)$harga_ka;
                                        $all_total += (int)$harga_ko_panjang+(int)$harga_ko_pendek+(int)$harga_kk_panjang+(int)$harga_kk_pendek+(int)$harga_ka;


                                        echo '<tr>
                                            <td>'.$no.'</td>
                                            <td>'.$value->nama_pemesan.'</td>
                                            <td>'.$value->tgl_pesan.'</td>
                                            <td>'.$value->tgl_jadi.'</td>
                                            <td>'.statusPesanan($value->status_pemesan).'</td>
                                            <td>'.$jml_pesan.'</td>
                                            <td>'.$total.'</td>
                                        </tr>';
                                        $no++;
                                    }
                                    echo '<tr>
                                            <td colspan="6">Total</td>
                                            <td>'.$all_total.'</td>
                                        </tr>';
                                }
                            ?>
                        </tbody>
                    </table>
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