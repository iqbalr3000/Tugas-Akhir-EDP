<?php

    require "../../koneksi.php";

    $id           = $_POST['id'];
    $nama         = $_POST['nama'];
    $username     = $_POST['username'];
    $password     = $_POST['password'];
    $role         = $_POST['role'];

    $update = "UPDATE tb_user SET nama = '$nama', username = '$username', password = '$password', role = '$role' WHERE id = '$id' ";
    $koneksi->query($update);

    header("Location: ../datauser.php");
    
?>