<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Data Log Pelintas Jalan Tol</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/images/logo/favicon.png">

    <!-- page css -->
    <link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/dataTables.bootstrap4.css">

    <!-- Core css -->
    <link href="../assets/css/app.min.css" rel="stylesheet">
    

</head>

<body>
    <?php
        session_start();

        if($_SESSION['status'] != "login"){
            header("location:../login.php?pesan=belum_login");
        }

        if($_SESSION['role'] != "admin"){
            header("location:../login.php?pesan=belum_login");
        }
    ?>
    <div class="app">
        <div class="layout">
            <!-- Header START -->
            <div class="header">
                <div class="logo logo-dark">
                    <a href="index.html">
                        <img src="../assets/images/logo/logo.png" alt="Logo">
                        <img class="logo-fold" src="../assets/images/logo/logo-fold.png" alt="Logo">
                    </a>
                </div>
                <div class="logo logo-white">
                    <a href="index.html">
                        <img src="../assets/images/logo/logo-white.png" alt="Logo">
                        <img class="logo-fold" src="../assets/images/logo/logo-fold-white.png" alt="Logo">
                    </a>
                </div>
                <div class="nav-wrap">
                    <ul class="nav-left">
                        <li class="desktop-toggle">
                            <a href="javascript:void(0);">
                                <i class="anticon"></i>
                            </a>
                        </li>
                        <li class="mobile-toggle">
                            <a href="javascript:void(0);">
                                <i class="anticon"></i>
                            </a>
                        </li>
                        
                    </ul>
                    <ul class="nav-right">
                        <li class="dropdown dropdown-animated scale-left">
                            <div class="pointer" data-toggle="dropdown">
                                <div class="avatar avatar-image  m-h-10 m-r-15">
                                    <img src="../assets/images/avatars/thumb-3.jpg"  alt="">
                                </div>
                            </div>
                            <div class="p-b-15 p-t-20 dropdown-menu pop-profile">
                                <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                                    <div class="d-flex m-r-50">
                                        <div class="avatar avatar-lg avatar-image">
                                            <img src="../assets/images/avatars/thumb-3.jpg" alt="">
                                        </div>
                                        <div class="m-l-10">
                                            <p class="m-b-0 text-dark font-weight-semibold">Marshall Nichols</p>
                                            <p class="m-b-0 opacity-07">UI/UX Desinger</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-user"></i>
                                            <span class="m-l-10">Edit Profile</span>
                                        </div>
                                        <i class="anticon font-size-10 anticon-right"></i>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-lock"></i>
                                            <span class="m-l-10">Account Setting</span>
                                        </div>
                                        <i class="anticon font-size-10 anticon-right"></i>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-project"></i>
                                            <span class="m-l-10">Projects</span>
                                        </div>
                                        <i class="anticon font-size-10 anticon-right"></i>
                                    </div>
                                </a>
                                <a href="../logout.php" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-logout"></i>
                                            <span class="m-l-10">Logout</span>
                                        </div>
                                        <i class="anticon font-size-10 anticon-right"></i>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">
                                <i class="anticon anticon-appstore"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>    
            <!-- Header END -->

            <!-- Side Nav START -->
            <div class="side-nav">
                <div class="side-nav-inner">
                    <ul class="side-nav-menu scrollable">
                        <li class="nav-item dropdown open">
                            <a class="dropdown-toggle" href="index.php">
                                <span class="icon-holder">
                                    <i class="anticon anticon-dashboard"></i>
                                </span>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="logdata.php">
                                <span class="icon-holder">
                                  <i class="anticon anticon-build"></i>
                                </span>
                                <span class="title">Log Data</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="transaksisaldo.php">
                                <span class="icon-holder">
                                    <i class="anticon anticon-dollar"></i>
                                </span>
                                <span class="title">Log Transaksi Saldo</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown open">
                            <a class="dropdown-toggle" href="datarfid.php">
                                <span class="icon-holder">
                                    <i class="anticon anticon-appstore"></i>
                                </span>
                                <span class="title">Data RFID</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="datatol.php">
                                <span class="icon-holder">
                                    <i class="anticon anticon-hdd"></i>
                                </span>
                                <span class="title">Data Tol</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="datauser.php">
                                <span class="icon-holder">
                                    <i class="anticon anticon-user"></i>
                                </span>
                                <span class="title">Data User</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- Side Nav END -->

            <!-- Page Container START -->
            <div class="page-container">
                
                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Log Data</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="index.php" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Home</a>
                                <span class="breadcrumb-item active">Log Data</span>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            
                            <div class="table-responsive">
                            <table id="example" class="table table-hover e-commerce-table second" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>RFID</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Telepon</th>
                                            <th>Saldo Awal</th>
                                            <th>Bayar</th>
                                            <th>Saldo Akhir</th>
                                            <th>Nama Tol</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            require "../koneksi.php"; 
                                            $datatampil = mysqli_query($koneksi, "SELECT * from tb_log INNER JOIN tb_rfid ON tb_rfid.rfid = tb_log.rfid ORDER BY tb_log.id DESC");
                                            $no=1;
                                            if (is_array($datatampil) || is_object($datatampil)){
                                                foreach ($datatampil as $row){
                                        ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $row['tanggal']; ?></td>
                                            <td><?= $row['rfid']; ?></td>
                                            <td><?= $row['nama']; ?></td>
                                            <td><?= $row['alamat']; ?></td>
                                            <td><?= $row['no_telp']; ?></td>
                                            <td><?= $row['saldo_awal']; ?></td>
                                            <td><?= $row['bayar']; ?></td>
                                            <td><?= $row['saldo_akhir']; ?></td>
                                            <td><?= $row['nama_tol']; ?></td>
                                        </tr>

                                        <?php
                                            $no++;

                                                }
                                            }
                                        ?>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Content Wrapper END -->

                <!-- Footer START -->
                <footer class="footer">
                    <div class="footer-content">
                        <p class="m-b-0"></p>
                        <span>
                            <a href="" class="text-gray m-r-15">Term &amp; Conditions</a>
                            <a href="" class="text-gray">Privacy &amp; Policy</a>
                        </span>
                    </div>
                </footer>
                <!-- Footer END -->

            </div>
            <!-- Page Container END -->

            <!-- Quick View START -->
            <div class="modal modal-right fade quick-view" id="quick-view">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header justify-content-between align-items-center">
                            <h5 class="modal-title">Theme Config</h5>
                        </div>
                        <div class="modal-body scrollable">
                            <div class="m-b-30">
                                <h5 class="m-b-0">Header Color</h5>
                                <p>Config header background color</p>
                                <div class="theme-configurator d-flex m-t-10">
                                    <div class="radio">
                                        <input id="header-default" name="header-theme" type="radio" checked value="default">
                                        <label for="header-default"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-primary" name="header-theme" type="radio" value="primary">
                                        <label for="header-primary"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-success" name="header-theme" type="radio" value="success">
                                        <label for="header-success"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-secondary" name="header-theme" type="radio" value="secondary">
                                        <label for="header-secondary"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-danger" name="header-theme" type="radio" value="danger">
                                        <label for="header-danger"></label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <h5 class="m-b-0">Side Nav Dark</h5>
                                <p>Change Side Nav to dark</p>
                                <div class="switch d-inline">
                                    <input type="checkbox" name="side-nav-theme-toogle" id="side-nav-theme-toogle">
                                    <label for="side-nav-theme-toogle"></label>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <h5 class="m-b-0">Folded Menu</h5>
                                <p>Toggle Folded Menu</p>
                                <div class="switch d-inline">
                                    <input type="checkbox" name="side-nav-fold-toogle" id="side-nav-fold-toogle">
                                    <label for="side-nav-fold-toogle"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
            <!-- Quick View END -->
        </div>
    </div>

    
    <!-- Core Vendors JS -->
    <script src="../assets/js/vendors.min.js"></script>

    <!-- page js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="../assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="../assets/vendor/datatables/js/data-table.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
    <script src="assets/js/pages/e-commerce-order-list.js"></script>

    <!-- Core JS -->
    <script src="../assets/js/app.min.js"></script>

</body>

</html>