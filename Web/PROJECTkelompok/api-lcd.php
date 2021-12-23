<?php
     require "koneksi.php";

     $pesan = $_GET['pesan'];

     $log = "UPDATE tb_monitoring SET pesan = '$pesan' ";
     $koneksi->query($log);

?> 

