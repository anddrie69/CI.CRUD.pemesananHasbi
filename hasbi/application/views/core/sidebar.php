            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="<?php echo base_url(); ?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#ktp"><i class="fa fa-fw fa-table"></i> Pesanan <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="ktp" class="collapse">
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/pesanan">Data Pesanan</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/pesanan/addNew">Input Pesanan</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/pesanan/Cetak">Cetak Data Pesanan</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#user"><i class="fa fa-user"></i> User <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="user" class="collapse">
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/user">Data User</a>
                            </li>
                            <?php if ($status == 1) { ?>
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/user/addNew">Input User</a>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
