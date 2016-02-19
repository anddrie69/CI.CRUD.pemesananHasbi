
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Data User
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Data User
                            </li>
                        </ol>
                    </div>
                </div>
                <form method="post">
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            if ($allUser != null) {
                                                foreach ($allUser as $key => $value) {
                                                    echo '<tr>';
                                                        echo '<td>'.$value->id.'</td>';
                                                        echo '<td>'.$value->nama.'</td>';
                                                        echo '<td>'.$value->username.'</td>';
                                                        echo '<td>
                                                                <a href="'.base_url().'index.php/user/detailUser/'.$value->id.'">Detail</a> ';
                                                                if ($status == 1) {
                                                                    echo ' | <a href="'.base_url().'index.php/user/deleteUser/'.$value->id.'">Delete</a>';
                                                                }
                                                        echo '</td>';
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