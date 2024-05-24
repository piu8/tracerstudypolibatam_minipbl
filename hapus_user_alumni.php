<?php
// include database connection file
include 'koneksi.php';
$nik = $_GET['nik'];
$result = mysqli_query($koneksi, "DELETE FROM alumni WHERE nik='$nik'");
header("Location:data-user-alumni.php");
?>