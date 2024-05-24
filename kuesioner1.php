<?php
session_start();
include "koneksi.php";
if ($_SESSION['username']) {
    $username= $_SESSION['username'];
    $query = "SELECT * FROM alumni WHERE username='$username'";
    $result = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_array($result);
} else {
    // Jika tidak ada parameter username, redirect ke halaman login
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuesioner</title>
    <link rel="stylesheet" type="text/css" href="pbl lama/Kuesioner Lanjutan.css">
    <link rel="stylesheet" href="pbl lama/css/bootstrap.min.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="pbl lama/img/logo1.jpeg" alt="Logo"> 
        </div>
        <nav style="margin-right: 110px;">
            <ul>
            <li>
                        <a href="home_alumni.php?username=<?php echo $username; ?>">Home</a>
                    </li>
                    <li>
                    <a href="kuesioner.php?username=<?php echo $username; ?>">Kuesioner</a>
                    </li>
                    <li>
                    <a href="riwayat-kerja.php?username=<?php echo $username; ?>">Riwayat Kerja</a>
                    </li>
                <li style="margin-left: 170px;">
                <a href="#"><?php echo $_SESSION['nama']; ?></a>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-down" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67z"/>
                  </svg>
                  <ul class="sub-menu">
                  <a href="logout.php">Logout</a>
                  </ul>
              </li>
            </ul>
        </nav>
    </header>
    <div>
        <header>
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house-door-fill" id="icon" viewBox="0 0 16 16">
            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
          </svg>
            <nav>
                <a>Kuesioner</a>
            </nav>
        </header>
    </div>
    

    

    <div id="TabelKuisioner">
        <h3><center>PENDATAAN SERTIFIKASI</center></h3>
        <hr align=”left” color=”blue” size="1" ><br>
    
    <form action="simpan_kuisioner.php" method="POST" id="KuesionerLanjutan" align="left">
        <input type="hidden" name="que" value="1">
        <input type="hidden" name="id_alumni" value="<?=$data['id']?>">

        <label for="Nama">Nama</label><br>
        <input type="text" name="q1" id="q1"><br><br>

        <label for="NIK">Nomor Induk Kependudukan (NIK)</label><br>
        <input type="text" name="q2" id="q2"><br><br>
        
        <label for="NIM">Nomor Induk Mahasiswa (NIM)</label><br>
        <input type="text" name="q3" id="q3"><br><br>

        <label for="Tahun Lulus">Tahun Lulus</label><br>
        <input type="text" name="q4" id="q4"><br><br>

        <label for="Prodi">Prodi</label><br>
        <input type="text" name="q5" id="q5"><br><br>

        <label for="Usia">Usia</label><br>
        <input type="text" name="q6" id="q6"><br><br>

      

        <label for="Jenis Kelamin">Jenis Kelamin</label><br>
        <input type="radio" id="Laki-Laki" name="q7" value="Laki-Laki">
        <label for="Laki-Laki">Laki-Laki</label><br>
        <input type="radio" id="Perempuan" name="q7" value="Perempuan">
        <label for="Perempuan">Perempuan</label><br>

        <label for="Provinsi">Provinsi tempat tinggal sekarang</label><br>
        <input type="text" name="q8" id="q8"><br><br>

        <label for="Kota">Kota tempat tinggal sekarang</label><br>
        <input type="text" name="q9" id="q9"><br><br>

        <label for="Alamat">Alamat</label><br>
        <input type="text" name="q10" id="q10"><br><br>

        <label for="Email">Email</label><br>
        <input type="text" name="q11" id="q11"><br><br>


        <label for="No Hp">No. Hp / WA aktif</label><br>
        <input type="text" name="q12" id="q12"><br><br>


        <button type="submit" class="btn btn-primary" value="simpan">Simpan</button>
    </form>
    </div>
</body>
</html>