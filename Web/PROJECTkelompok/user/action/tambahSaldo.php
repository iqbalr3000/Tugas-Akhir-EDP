<?php

    require "../../koneksi.php";

    $rfid         = $_POST['rfid'];
    $saldo        = $_POST['saldo'];

    $datarfid = mysqli_query($koneksi, "SELECT * FROM tb_rfid WHERE rfid = '$rfid'");
    $rowrfid  = mysqli_fetch_array($datarfid);

    $saldoakhir = $rowrfid['saldo'] + $saldo;

    $sqlsave = "INSERT INTO tb_log_saldo (rfid, saldo_awal, tambah_saldo, saldo_akhir) VALUES ('" . $rfid . "','" . $rowrfid['saldo'] . "', '" . $saldo . "', '" . $saldoakhir . "')";
    $koneksi->query($sqlsave);

    $sqlsaldo = "UPDATE tb_rfid SET saldo = '$saldoakhir' WHERE rfid = '$rfid'";
    $koneksi->query($sqlsaldo);

    header("Location: ../topup.php?pesan=berhasil");

?>