
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                             Cetak Pesanan
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="/">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Cetak Pesanan
                            </li>
                        </ol>
                    </div>
                </div>
                <?php 
                    echo form_open_multipart('index.php/pesanan/Cetak');
                ?> 
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Tanggal Awal</h3>
                                </div>
                                <div class="panel-body">
                                    <input type="text" name="tanggal_awal" id="tanggal_awal" class="form-control" placeholder="Masukkan tanggal awal">
                                </div>
                            </div>
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Tanggal Akhir</h3>
                                </div>
                                <div class="panel-body">
                                    <input type="text" name="tanggal_akhir" id="tanggal_akhir" class="form-control" placeholder="Masukkan tanggal akhir">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Aksi</h3>
                                </div>
                                <div class="panel-body">
                                    <input type="submit" class="btn btn-primary" value="Cetak">
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
            $( "#tanggal_awal" ).datepicker({ dateFormat: 'yy-mm-dd' });
            $( "#tanggal_akhir" ).datepicker({ dateFormat: 'yy-mm-dd' });
        });
    </script>