<?php
include 'koneksi.php';
$id = $_POST['id_alumni'];
$nama_perusahaan = $_POST['nama_perusahaan'];
$durasi = $_POST['durasi'];
$posisi = $_POST['posisi'];
$pendapatan = $_POST['pendapatan'];
$input = mysqli_query($koneksi, "INSERT INTO riwayat_kerja (id_alumni,nama_perusahaan, durasi, posisi, pendapatan) VALUES ('$id','$nama_perusahaan', '$durasi', '$posisi', '$pendapatan')") or die(mysqli_error($koneksi));
if ($input) {
    header("location: riwayat-kerja.php");
    exit();
} else {
    echo "Gagal Disimpan";
}
?>
