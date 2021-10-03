<?php

include '../config/conn.php';

/**
 *  mendapatkan name pada file create.php
 */
$nama       = $_POST['nama'];
$harga      = $_POST['harga'];
$deskripsi  = $_POST['deskripsi'];

# eksekusi query untuk input data ke database
$sql = mysqli_query($conn, "INSERT INTO tbl_barang(nama, harga, deskripsi) VALUES('$nama', '$harga', '$deskripsi') ");

# kondisi jika query benar maka akan ditampilkan ke halaman index.php
if (!$sql) {
    echo "err";
} else {
    header("location:../index.php");
}
