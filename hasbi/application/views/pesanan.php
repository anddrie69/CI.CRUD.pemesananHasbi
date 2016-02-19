        <script type="text/javascript">
            $(document).ready(function() {
                $('#pesanan').DataTable()( {
                    "order": [[ 1, 'desc' ]]
                } );
            } );
        </script>

        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Data Pesanan
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Data Pesanan
                            </li>
                        </ol>
                    </div>
                </div>
                <form method="post">
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table id="pesanan" class="table table-bordered table-hover table-striped" class="display" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Tanggal Pesan</th>
                                            <th>Tanggal Jadi</th>
                                            <th>Karyawan</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            if ($getPesanan != null) {

                                                foreach ($getPesanan as $key => $value) {
                            
                                                    echo '<tr>';
                                                        echo '<td>'.$value->id_pesanan.'</td>';
                                                        echo '<td><a href="'.base_url().'index.php/pesanan/detailPesanan/'.$value->id_pesanan.'">'.$value->nama_pemesan.'</a></td>';
                                                        echo '<td>'.$value->tgl_pesan.'</td>';
                                                        echo '<td>'.$value->tgl_jadi.'</td>';
                                                        echo '<td>'.$value->nama_user.'</td>';
                                                        echo '<td>'.statusPesanan($value->status_pemesan).'</td>';
                                                        echo '<td>
                                                                <a href="'.base_url().'index.php/pesanan/cetakPesanan/'.$value->id_pesanan.'">Cetak </a> |
                                                                <a href="'.base_url().'index.php/pesanan/editPesanan/'.$value->id_pesanan.'">Update</a> | 
                                                                <a href="'.base_url().'index.php/pesanan/deletePesanan/'.$value->id_pesanan.'">Hapus</a>
                                                            </td>';
                                                    echo '</tr>';
                                                } 
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>