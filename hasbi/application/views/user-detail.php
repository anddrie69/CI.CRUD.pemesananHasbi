        <?php
            if($user != null){
                $judul = "Edit User";
                $id = $user->id;
                $nama = $user->nama;
                $username = $user->username;
                $password = $user->password;
                $user_level = $user->status;
                $label = 'Perbarui';
            }else{
                $judul = "Tambahkan User";
                $id ='';
                $nama = '';
                $username = '';
                $password = '';
                $user_level = '';
                $label = 'Simpan';
            }
        ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <?php echo $judul; ?>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="/">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> <?php echo $judul; ?>
                            </li>
                        </ol>
                    </div>
                </div>
                <form method="post">
                    <?php
                        if($user != null){
                            echo '<input type="hidden" name="id" value="'.$id.'">';
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
                                    <?php echo $nama; ?>
                                </div>
                            </div>
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Username</h3>
                                </div>
                                <div class="panel-body">
                                    <?php echo $username; ?>
                                </div>
                            </div>
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">User Level</h3>
                                </div>
                                <div class="panel-body">
                                    <?php echo userLevel($user_level); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>