<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Web Tol | Login</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">

    <!-- page css -->

    <!-- Core css -->
    <link href="assets/css/app.min.css" rel="stylesheet">

</head>

<body>

    <?php 
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "<script type='text/javascript'>alert('Login gagal! username dan password salah!');</script>";
            }else if($_GET['pesan'] == "logout"){
                echo "<script type='text/javascript'>alert('Anda telah berhasil logout!');</script>";
            }else if($_GET['pesan'] == "belum_login"){
                echo "<script type='text/javascript'>alert('Anda harus login terlebih dahulu!');</script>";
            }
        }
    ?>
    
    <div class="app">
        <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex" style="background-image: url('assets/images/others/login-3.png')">
            <div class="d-flex flex-column justify-content-between w-100">
                <div class="container d-flex h-100">
                    <div class="row align-items-center w-100">
                        <div class="col-md-7 col-lg-5 m-h-auto">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between m-b-30">
                                        <h2 class="m-b-0">Sign In</h2>
                                    </div>
                                    <form action="cek_login.php" method="post">
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="userName">Username:</label>
                                            <div class="input-affix">
                                                <i class="prefix-icon anticon anticon-user"></i>
                                                <input type="text" name="username" class="form-control" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="password">Password:</label>
                                            <div class="input-affix m-b-10">
                                                <i class="prefix-icon anticon anticon-lock"></i>
                                                <input type="password" name="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary btn-block">Sign In</button>
                                            <a href="index.php" class="btn btn-default btn-block">Cancel</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Core Vendors JS -->
    <script src="assets/js/vendors.min.js"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>