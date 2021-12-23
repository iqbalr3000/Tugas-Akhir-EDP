<?php

    require "../../koneksi.php";

    $id               = $_POST['id'];
    $nama_tol         = $_POST['nama_tol'];
    $tarif            = $_POST['harga'];

    $update = "UPDATE tb_tol SET nama_tol = '$nama_tol', harga = '$harga' WHERE id = '$id' ";
    $koneksi->query($update);

    header("Location: ../datatol.php");
    

?>