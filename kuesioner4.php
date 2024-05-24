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
        <h3><center>Status aktifitas saat ini</center></h3>
        <hr align=”left” color=”blue” size="1" ><br>
    
    <form action="simpan_kuisioner.php" method="POST" id="KuesionerLanjutan" align="left">
        <input type="hidden" name="que" value="4">
        <input type="hidden" name="id_alumni" value="<?=$data['id']?>">


        <label for="Aktifitas">Apakah saat ini anda sedang bersekolah/kuliah?</label><br>
        <input type="radio" id="ya" name="q1" value="Ya">
        <label for="ya">Ya</label><br>
        <input type="radio" id="tidak" name="q1" value="Tidak">
        <label for="tidak">Tidak</label><br>
       
        
        <label for="Aktifitas2">Apakah anda sedang atau pernah mengikuti pelatihan?</label><br>
        <input type="radio" id="ya" name="q2" value="Ya">
        <label for="ya">Ya</label><br>
        <input type="radio" id="tidak" name="q2" value="Tidak">
        <label for="tidak">Tidak</label><br><br>


        <label for="Aktifitas3">Apa jenis pelatihan atau sertifikasi yang sedang atau pernah diikuti?</label><br>
        <input type="text" name="q3" id="q3"><br><br>

        <label for="Aktifitas4">Aktivitas apa yang sedang anda lakukan saat ini?</label><br>
        <input type="radio" id="Option1" name="q4" value="Tamat Sekolah" >
        <label for="Option1">Tamat sekolah</label><br>
        <input type="radio" id="Option2" name="q4" value="Tanggung jawab mencari nafkah">
        <label for="Option2">Tanggung jawab mencari nafkah</label><br>
        <input type="radio" id="Option3" name="q4" value="Menambah penghasilan">
        <label for="Option3">Menambah penghasilan</label><br>
        <input type="radio" id="Option4" name="q4" value="Pekerjaan yang ada kurang sesuai dengan pendidikan">
        <label for="Option4">Pekerjaan yang ada kurang sesuai dengan pendidikan</label><br>
        <input type="radio" id="Option5" name="q4" value="Pekerjaan yang ada kurang sesuai dengan upah">
        <label for="Option5">Pekerjaan yang ada kurang sesuai dengan upah</label><br>
        <input type="radio" id="Option6" name="q4" value="PHK">
        <label for="Option6">PHK</label><br>
        <input type="radio" id="Option7" name="q4" value="Usaha Bangkrut">
        <label for="Option7">Usaha Bangkrut</label><br>
        <input type="radio" id="Option8" name="q4" value="Masa kontrak habis">
        <label for="Option8">Masa kontrak habis</label><br>
        <input type="radio" id="Option9" name="q4" value="Lainnya">
        <label for="Option9">Lainnya</label><br><br>
        <input type="text" name="q5" id="q5"><br><br>

        <label for="Aktifitas5">Alasan utama tidak mencari pekerjaan</label><br>
        <input type="radio" id="Option1" name="q6" value="Sudah diterima bekerja">
        <label for="Option1">Sudah diterima bekerja</label><br>
        <input type="radio" id="Option2" name="q6" value="Putus Asa">
        <label for="Option2">Putus Asa</label><br>
        <input type="radio" id="Option3" name="q6" value="Sudah mempunyai pekerjaan">
        <label for="Option3">Sudah mempunyai pekerjaan</label><br>
        <input type="radio" id="Option4" name="q6" value="Mengurus rumah tangga">
        <label for="Option4">Mengurus rumah tangga</label><br>
        <input type="radio" id="Option5" name="q6" value="Tidak mempunyai modal">
        <label for="Option5">Tidak mempunyai modal</label><br>
        <input type="radio" id="Option6" name="q6" value="Sedang melanjutkan pendidikan">
        <label for="Option6">Sedang melanjutkan pendidikan</label><br>
        <input type="radio" id="Option7" name="q6" value="Lainnya">
        <label for="Option7">Lainnya</label><br><br>
        <input type="text" name="q7" id="q7"><br><br>

 
    <button type="submit" class="btn btn-primary" value="simpan">Simpan</button>
    </form>
    </div>
</body>
</html>