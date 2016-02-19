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
                                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama" value="<?php echo $nama; ?>" REQUIRED>
                                </div>
                            </div>
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Username</h3>
                                </div>
                                <div class="panel-body">
                                    <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan username" value="<?php echo $username; ?>" REQUIRED>
                                </div>
                            </div>
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Password</h3>
                                </div>
                                <div class="panel-body">
                                    <input type="password" name="password" class="form-control" placeholder="Masukkan password user" value="" REQUIRED>
                                </div>
                            </div>
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">User Level</h3>
                                </div>
                                <div class="panel-body">
                                    <select name="user_level" class="form-control" REQUIRED>
                                        <option value="">Pilih User level</option>
                                        <?php
                                            $arrs = arrsUserLevel();
                                            if($user != null){
                                                foreach ($arrs as $key => $value) {
                                                    if($user_level == $key){
                                                        $selected = 'selected="selected"';
                                                    }else{
                                                        $selected = '';
                                                    }
                                                    echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                                                }
                                            }else{
                                                foreach ($arrs as $key => $value) {
                                                    echo '<option value="'.$key.'">'.$value.'</option>';
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Aksi</h3>
                                </div>
                                <div class="panel-body">
                                    <!-- <button name="grabber" id="nik_grabber" class="btn btn-primary">Lanjut</button> -->
                                    <input type="submit" class="btn btn-primary" value="<?php echo $label; ?>">
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