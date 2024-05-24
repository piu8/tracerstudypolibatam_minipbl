<?php
// include database connection file
include 'koneksi.php';
$id = $_GET['id'];
$result = mysqli_query($koneksi, "DELETE FROM riwayat_kerja WHERE id='$id'");
header("Location:riwayat-kerja.php");
?>