<?php

    require "../../koneksi.php";

    $nama         = $_POST['nama'];
    $username     = $_POST['username'];
    $password     = $_POST['password'];
    $role         = $_POST['role'];

    $jumlahadmin = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE role = 'admin' ");
    $cek = mysqli_num_rows($jumlahadmin);
    $id = $cek + 1;

    //Masukan data ke Table
    $input = "INSERT INTO tb_user (id, nama, username, password, role) VALUES ('" . $id . "', '" . $nama . "', '" . $username . "', '" . $password . "', '" . $role . "')";
    $koneksi->query($input);

    header("Location: ../datauser.php?pesan=berhasil");

?>