<?php
// include database connection file
include 'koneksi.php';
$id_perusahaan = $_GET['id_perusahaan'];
$result = mysqli_query($koneksi, "DELETE FROM perusahaan WHERE id_perusahaan='$id_perusahaan'");
header("Location:data-user-perusahaan.php");
?>