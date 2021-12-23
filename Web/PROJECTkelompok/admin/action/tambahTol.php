<?php

    require "../../koneksi.php";

    $nama_tol         = $_POST['nama_tol'];
    $tarif            = $_POST['harga'];

    //Masukan data ke Table
    $input = "INSERT INTO tb_tol (nama_tol, harga) VALUES ('" . $nama_tol . "', '" . $tarif . "')";
    $koneksi->query($input);

    header("Location: ../datatol.php?pesan=berhasil");

?>