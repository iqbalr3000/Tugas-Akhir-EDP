<?php

    $serve = ini_get("mysql.default_host");
    $user = "root";
    $password = "";
    $database = "db_projectkelompok";

    $koneksi = mysqli_connect($serve, $user, $password, $database);

    function query($query){
        global $koneksi;
        $result = mysqli_query($koneksi, $query);
        $box = [];
        while($sql = mysqli_fetch_assoc($result)){
            $box[] = $sql;
        }
        return $box;
    }

?>