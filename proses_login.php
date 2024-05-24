<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$pass = $_POST['password'];

$data = mysqli_query($koneksi, "SELECT * FROM alumni WHERE username='$username'");
$row = mysqli_fetch_array($data);

// Cek alumni
if ($row) {
    $hashedPassword = $row['password'];
    if (password_verify($pass, $hashedPassword)) {
        $_SESSION['nama'] = $row['nama'];
        $_SESSION['username'] = $row['username'];
        header("Location: home_alumni.php?username=$username");
        exit();
    } else {
        echo "Username dan Password Tidak Cocok";
    }
} else {
    $data1 = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username'");
    $row1 = mysqli_fetch_array($data1);

    // Cek admin
    if ($row1) {
        $hashedPassword = $row1['password'];
        if ($pass === $hashedPassword) {
            $_SESSION['username'] = $row1['username'];
            header("Location: home_admin.php?username=$username");
            exit();
        } else {
            echo "Username dan Password Tidak Cocok";
        }
    }else {
    $data2 = mysqli_query($koneksi, "SELECT * FROM perusahaan WHERE username='$username'");
    $row2 = mysqli_fetch_array($data2);

    // Cek perusahaan
    if ($row2) {
        $hashedPassword = $row2['password'];
        if ($pass === $hashedPassword) {
            $_SESSION['username'] = $row2['username'];
            header("Location: home_perusahaan.php?username=$username");
            exit();
        } else {
            echo "Username dan Password Tidak Cocok";
        }
    } else {
        $error = "Username atau password salah.";
        echo "<script>
            alert('$error');
            window.location.href = 'login.php'; 
        </script>";
        exit();
    }
}
}
?>
