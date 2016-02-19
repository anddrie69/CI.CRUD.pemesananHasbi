<html>
    <head>
        <title>Print Pesanan | Hasby Sablon</title>
        <style type="text/css">
            td {
                font-size: 20px;
            }
        </style>
    </head>
    <body>
        <table align="center" width="70%">
            <tr>
                <td colspan="3">
                    <br>
                    <h2 style="text-align:center;">Data Pemesanan Pelanggan</h2>
                    <hr>
                    <br>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo $pesanan->nama_pemesan; ?></td>
            </tr>
            <tr>
                <td>Status Pesanan</td>
                <td>:</td>
                <td><?php echo statusPesanan($pesanan->status_pemesan); ?></td>
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
            <tr>
                <td>Tanggal Pesan</td>
                <td>:</td>
                <td><?php echo $pesanan->tgl_pesan; ?></td>
            </tr>
            <tr>
                <td>Tanggal Jadi</td>
                <td>:</td>
                <td><?php echo $pesanan->tgl_jadi; ?></td>
            </tr>
            <tr>
                <td>Jumlah Dan Harga</td>
                <td>:</td>
                <td>
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
                </td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td>:</td>
                <td><?php echo $pesanan->keterangan; ?></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td>:</td>
                <td>
                    <?php
                        if ($pesanan->gambar != null) {
                            echo '<img id="fotoEdit" src="'.base_url().'statics/images/'.$pesanan->gambar.'" width="70%" />';
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <br><br><br>
                    <button onclick="printFunction()">Print Dokumen</button>
                </td>
            </tr>
        </table>
        <script>
            function printFunction() {
                window.print();
            }
        </script>
    </body>
</html>