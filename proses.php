<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $email = $_POST['email'];
    $jurusan = $_POST['jurusan'];
    $prodi = $_POST['prodi'];
    $bulan = $_POST['bulan'];
    $usia = $_POST['usia'];
    $kelamin = $_POST['kelamin'];
    $alamat = $_POST['alamat'];
    $contact = $_POST['contact'];

    // Cek apakah NIK sudah terdaftar di tabel nik_alumni
    $query = "SELECT * FROM alumni_nik WHERE nik='$nik'";
    $result = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_array($result);
    $nik1 = $data['nik'];
    

    if (mysqli_num_rows($result) > 0) {
        // NIK sudah terdaftar, generate username dan password
        $query2 = "SELECT * FROM alumni WHERE nik='$nik1'";
        $result2 = mysqli_query($koneksi, $query2);
        if (mysqli_num_rows($result2) > 0){
            $error = "NIK sudah terdaftar! Silahkan Login";
            echo "<script>
                alert('$error');
                window.location.href = 'login.php'; 
            </script>";
        }else{
            $username = generateUsername($nama);
            $password = 12345678;

            // Simpan data username dan password ke tabel alumni
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT); // Hash password sebelum disimpan
            $query = "INSERT INTO alumni (nama, nik, email, jurusan, prodi, bulan, usia, kelamin, alamat, contact, username, password) VALUES ('$nama', '$nik', '$email', '$jurusan', '$prodi', '$bulan', '$usia', '$kelamin', '$alamat', '$contact', '$username', '$hashedPassword')";
            mysqli_query($koneksi, $query);

            // Ambil ID alumni yang baru saja ditambahkan
            $alumniId = mysqli_insert_id($koneksi);

            // Tampilkan pesan pop-up dengan username dan password
            echo "<script>
                alert('Registrasi berhasil!\\nUsername: $username\\nPassword: $password');
                window.location.href = 'login.php';
            </script>";
        }
        
    } else {
        // NIK belum terdaftar, beri pesan error
        $error = "NIK tidak valid!";
        echo "<script>
            alert('$error');
            window.location.href = 'form-register.php'; 
        </script>";
    }
}

// Fungsi untuk generate username
function generateUsername($nama) {
    // Mengambil nama depan pertama
    $nama = explode(" ", $nama);
    $namaDepan = $nama[0];

    // Mengambil 4 angka acak
    $angkaAcak = rand(1000, 9999);

    // Menggabungkan nama depan dan angka acak
    $username = strtolower($namaDepan) . $angkaAcak;

    return $username;
}

// Fungsi untuk generate password
function generatePassword() {
    // Daftar karakter yang digunakan dalam password
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $password = '';

    // Generate 4 huruf acak (huruf awal kapital)
    for ($i = 0; $i < 4; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }

    // Generate 4 angka acak
    for ($i = 0; $i < 4; $i++) {
        $password .= $numbers[rand(0, strlen($numbers) - 1)];
    }

    return $password;
}

mysqli_close($koneksi);
?>
