<?php

include_once '../config/conn.php';

// ini untuk mendapatkan id yang telah diklik
$id = $_GET['id'];

// ini mengekseskusi sql
$sql = mysqli_query($conn, "DELETE FROM tbl_barang WHERE id=$id");

// kondisi untuk mengecek apakah berhasil atau tidak
if (!$sql) {
    echo "Gagal Menghapus";
} else {
    header("location:../index.php");
}
