<?php

    require "../../koneksi.php";

    $rfid            = $_POST['rfid'];
    $nama            = $_POST['nama'];
    $alamat          = $_POST['alamat'];
    $telepon         = $_POST['no_telp'];
    $saldo           = $_POST['saldo'];

    //Masukan data ke Table
    $input = "INSERT INTO tb_rfid (rfid, nama, alamat, no_telp, saldo) VALUES ('" . $rfid . "', '" . $nama . "', '" . $alamat . "', '" . $telepon . "', '" . $saldo . "')";
    $koneksi->query($input);

    $input = "INSERT INTO tb_user (id, nama, username, password, role) VALUES ('" . $rfid . "','" . $nama . "', '" . $telepon . "', '" . "1234" . "', '" . "user" . "')";
    $koneksi->query($input);

    header("Location: ../datarfid.php?pesan=berhasil");
    

?>