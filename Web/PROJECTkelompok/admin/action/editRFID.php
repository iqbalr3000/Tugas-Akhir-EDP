<?php

    require "../../koneksi.php";

    $id              = $_POST['id'];
    $rfid            = $_POST['rfid'];
    $nama            = $_POST['nama'];
    $alamat          = $_POST['alamat'];
    $no_telp         = $_POST['no_telp'];
    $saldo           = $_POST['saldo'];

    $update = "UPDATE tb_rfid SET rfid = '$rfid', nama = '$nama', alamat = '$alamat', no_telp = '$no_telp', saldo = '$saldo' WHERE id = '$id' ";
    $koneksi->query($update);

    header("Location: ../datarfid.php");
    

?>