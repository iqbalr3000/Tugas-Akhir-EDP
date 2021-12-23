<?php
    require "../koneksi.php"; 
    $datatampil = mysqli_query($koneksi, "SELECT * from tb_monitoring");
    $no=1;
    if (is_array($datatampil) || is_object($datatampil)){
        foreach ($datatampil as $row){
?>

<div class="row">
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="media align-items-center">
                    <div class="avatar avatar-icon avatar-lg avatar-blue">
                        <i class="anticon anticon-clock-circle"></i>
                    </div>
                    <div class="m-l-15">
                        <h2 class="m-b-0"><?= $row['tanggal']; ?></h2>
                        <p class="m-b-0 text-muted">Waktu</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="media align-items-center">
                    <div class="avatar avatar-icon avatar-lg avatar-cyan">
                        <i class="anticon anticon-user"></i>
                    </div>
                    <div class="m-l-15">
                        <h2 class="m-b-0"><?= $row['rfid']; ?></h2>
                        <p class="m-b-0 text-muted">RFID</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="media align-items-center">
                    <div class="avatar avatar-icon avatar-lg avatar-gold">
                        <i class="anticon anticon-profile"></i>
                    </div>
                    <div class="m-l-15">
                        <h2 class="m-b-0"><?= $row['nama_tol']; ?></h2>
                        <p class="m-b-0 text-muted">Nama Tol</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="media align-items-center">
                    <div class="avatar avatar-icon avatar-lg avatar-purple">
                        <i class="anticon anticon-lock"></i>
                    </div>
                    <div class="m-l-15">
                        <h2 class="m-b-0"><?= $row['status']; ?></h2>
                        <p class="m-b-0 text-muted">Status</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
        }
    }
?>