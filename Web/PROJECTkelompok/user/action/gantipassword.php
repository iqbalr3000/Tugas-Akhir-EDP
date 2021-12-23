<?php

    require "../../koneksi.php";

    $id         = $_POST['rfid'];
    $password     = $_POST['password'];

    $update = "UPDATE tb_user SET password = '$password' WHERE id = '$id' ";
    $koneksi->query($update);

    header("Location: ../gantiPassword.php?pesan=berhasil");

?>