<?php

    require "../../koneksi.php";

    $id = $_GET['id'];

    //Masukan data ke Table
    $delete = "DELETE FROM tb_rfid WHERE id = '$id' ";
    $koneksi->query($delete);

    header("Location: ../datarfid.php");
    

?>