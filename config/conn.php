<?php

    $host       = "localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "barang";

    $conn = mysqli_connect($host, $username, $password, $dbname);
    

    /**
     * jika koneksi error maka akan menampilkan pesan error 
     * jika berhasil maka pesan kosong
    */ 
    $result = (!$conn) ? "error" : " " ;

    echo $result;
?>