<?php 

include_once '../config/conn.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];

$sql = mysqli_query($conn, "UPDATE tbl_barang SET nama='$nama', harga='$harga', deskripsi='$deskripsi' WHERE id=$id ");

if (!$sql) {
    echo "Gagal mengubah data!";
} else {
    header('location: ../index.php');
	exit();
}
