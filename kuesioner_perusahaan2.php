<?php
session_start();
include "koneksi.php";
if ($_SESSION['username']) {
    $username= $_SESSION['username'];
    $query = "SELECT * FROM perusahaan WHERE username='$username'";
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
            <img src="img/logo1.jpeg" alt="Logo">
        </div>
        <nav style="margin-right: 110px;">
            <ul>
            <li>
                        <a href="home_perusahaan.php?username=<?php echo $username; ?>">Home</a>
                    </li>
                    <li>
                    <a href="kuesioner_perusahaan.php?username=<?php echo $username; ?>">Kuesioner</a>
                    </li>
                <li style="margin-left: 170px;">
                 <a href="#"><?php echo $_SESSION['username']; ?></a>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-down" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67z"/>
                  </svg>
                  <ul class="sub-menu">
                  <li>
                                <a href="logout.php">Logout</a>
                            </li>
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
        <h3><center>Bagian 2. Kuesioner Penilaian Terhadap Kinerja Alumni</center></h3>
        <hr align=”left” color=”grey” size="1" ><br>
    
        <form action="simpan_kuisioner_perusahaan.php" method="POST" id="KuesionerLanjutan" align="left">
        <input type="hidden" name="que" value="2">
        <input type="hidden" name="id_perusahaan" value="<?=$data['id_perusahaan']?>">

        <label for="KuesionerPenilaian">Nama Alumni</label><br>
        <input type="text" name="q1" id="q1"><br><br>

        <label for="KuesionerPenilaian2">Posisi</label><br>
        <input type="text" name="q2" id="q2"><br><br>
        
        <label for="KuesionerPenilaian2">Apakah alumni bekerja pada bidang yang sesuai dengan keahliannya?</label><br>
        <input type="radio" id="ya" name="q3" value="Ya">
        <label for="ya">YA</label>
        <input type="radio" id="tidak" name="q3" value="Tidak">
        <label for="tidak">TIDAK</label><br><br>

        <label for="KuesionerPenilaian3">Dalam mengikuti peraturan yang ada di perusahaan, apakah alumni sudah memenuhi standard perusahaan dalam hal ini(silahkan pilih salah satu)</label><br><br>

        <label for="KuesionerPenilaian3">Tingkat kehadiran / The level of attendance</label><br>
        <input type="radio" id="BaikSekali" name="q4" value="BaikSekali">
        <label for="BaikSekali">Baik Sekali</label>
        <input type="radio" id="Baik" name="q4" value="Baik">
        <label for="Baik">Baik</label>
        <input type="radio" id="Cukup" name="q4" value="Cukup">
        <label for="Cukup">Cukup</label>
        <input type="radio" id="Kurang" name="q4" value="Kurang">
        <label for="Kurang">Kurang</label><br><br>

        <label for="KuesionerPenilaian4">Tingkat Kedisiplinan / The level of discipline</label><br>
        <input type="radio" id="BaikSekali" name="q5" value="BaikSekali">
        <label for="BaikSekali">Baik Sekali</label>
        <input type="radio" id="Baik" name="q5" value="Baik">
        <label for="Baik">Baik</label>
        <input type="radio" id="Cukup" name="q5" value="Cukup">
        <label for="Cukup">Cukup</label>
        <input type="radio" id="Kurang" name="q5" value="Kurang">
        <label for="Kurang">Kurang</label><br><br>

        <label for="KuesionerPenilaian5">Kemampuan menyelesaikan pekerjaan / The ability to get the job </label><br>
        <input type="radio" id="BaikSekali" name="q6" value="BaikSekali">
        <label for="BaikSekali">Baik Sekali</label>
        <input type="radio" id="Baik" name="q6" value="Baik">
        <label for="Baik">Baik</label>
        <input type="radio" id="Cukup" name="q6" value="Cukup">
        <label for="Cukup">Cukup</label>
        <input type="radio" id="Kurang" name="q6" value="Kurang">
        <label for="Kurang">Kurang</label><br><br>

        <label for="KuesionerPenilaian6">Tingkat kreatifitas dan kemampuan berinisiatif / The level of initiative, creativity and ability</label><br>
        <input type="radio" id="BaikSekali" name="q7" value="BaikSekali">
        <label for="BaikSekali">Baik Sekali</label>
        <input type="radio" id="Baik" name="q7" value="Baik">
        <label for="Baik">Baik</label>
        <input type="radio" id="Cukup" name="q7" value="Cukup">
        <label for="Cukup">Cukup</label>
        <input type="radio" id="Kurang" name="q7" value="Kurang">
        <label for="Kurang">Kurang</label><br><br>

        <label for="KuesionerPenilaian7">Kemampuan berkomunikasi / The Ability to communicate</label><br>
        <input type="radio" id="BaikSekali" name="q8" value="BaikSekali">
        <label for="BaikSekali">Baik Sekali</label>
        <input type="radio" id="Baik" name="q8" value="Baik">
        <label for="Baik">Baik</label>
        <input type="radio" id="Cukup" name="q8" value="Cukup">
        <label for="Cukup">Cukup</label>
        <input type="radio" id="Kurang" name="q8" value="Kurang">
        <label for="Kurang">Kurang</label><br><br>

        <label for="KuesionerPenilaian8">Kemampuan beradaptasi dengan lingkungan kerja / The ability to adapt to the work environment</label><br>
        <input type="radio" id="BaikSekali" name="q9" value="BaikSekali">
        <label for="BaikSekali">Baik Sekali</label>
        <input type="radio" id="Baik" name="q9" value="Baik">
        <label for="Baik">Baik</label>
        <input type="radio" id="Cukup" name="q9" value="Cukup">
        <label for="Cukup">Cukup</label>
        <input type="radio" id="Kurang" name="q9" value="Kurang">
        <label for="Kurang">Kurang</label><br><br>

        <label for="KuesionerPenilaian9">Kemampuan bersosialisasi dalam lingkungan kerja / The ability to socialize in a work environment</label><br>
        <input type="radio" id="BaikSekali" name="q10" value="BaikSekali">
        <label for="BaikSekali">Baik Sekali</label>
        <input type="radio" id="Baik" name="q10" value="Baik">
        <label for="Baik">Baik</label>
        <input type="radio" id="Cukup" name="q10" value="Cukup">
        <label for="Cukup">Cukup</label>
        <input type="radio" id="Kurang" name="q10" value="Kurang">
        <label for="Kurang">Kurang</label><br><br>

        <label for="KuesionerPenilaian10">Sopan santun / The manners of politeness</label><br>
        <input type="radio" id="BaikSekali" name="q11" value="BaikSekali">
        <label for="BaikSekali">Baik Sekali</label>
        <input type="radio" id="Baik" name="q11" value="Baik">
        <label for="Baik">Baik</label>
        <input type="radio" id="Cukup" name="q11" value="Cukup">
        <label for="Cukup">Cukup</label>
        <input type="radio" id="Kurang" name="q11" value="Kurang">
        <label for="Kurang">Kurang</label><br><br>

        <label for="KuesionerPenilaian11">Kerapian dalam berbusana / The Neatness in apparels
        </label><br>
        <input type="radio" id="BaikSekali" name="q12"value="BaikSekali">
        <label for="BaikSekali">Baik Sekali</label>
        <input type="radio" id="Baik" name="q12"value="Baik">
        <label for="Baik">Baik</label>
        <input type="radio" id="Cukup" name="q12"value="Cukup">
        <label for="Cukup">Cukup</label>
        <input type="radio" id="Kurang" name="q12"value="Kurang">
        <label for="Kurang">Kurang</label><br><br>

        <label for="KuesionerPenilaian12">Integritas (etika dan moral) / The Integrity (ethical and moral)</label><br>
        <input type="radio" id="BaikSekali" name="q13" value="BaikSekali">
        <label for="BaikSekali">Baik Sekali</label>
        <input type="radio" id="Baik" name="q13" value="Baik">
        <label for="Baik">Baik</label>
        <input type="radio" id="Cukup" name="q13" value="Cukup">
        <label for="Cukup">Cukup</label>
        <input type="radio" id="Kurang" name="q13" value="Kurang">
        <label for="Kurang">Kurang</label><br><br>

        <label for="KuesionerPenilaian13">Keahlian berdasarkan bidang ilmu (kompetensi utama) / The skill based on the knowledge (core competency)</label><br>
        <input type="radio" id="BaikSekali" name="q14" value="BaikSekali">
        <label for="BaikSekali">Baik Sekali</label>
        <input type="radio" id="Baik" name="q14" value="Baik">
        <label for="Baik">Baik</label>
        <input type="radio" id="Cukup" name="q14" value="Cukup">
        <label for="Cukup">Cukup</label>
        <input type="radio" id="Kurang" name="q14" value="Kurang">
        <label for="Kurang">Kurang</label><br><br>

        <label for="KuesionerPenilaian14">Bahasa Inggris / English language</label><br>
        <input type="radio" id="BaikSekali" name="q15" value="BaikSekali">
        <label for="BaikSekali">Baik Sekali</label>
        <input type="radio" id="Baik" name="q15" value="Baik">
        <label for="Baik">Baik</label>
        <input type="radio" id="Cukup" name="q15" value="Cukup">
        <label for="Cukup">Cukup</label>
        <input type="radio" id="Kurang" name="q15" value="Kurang">
        <label for="Kurang">Kurang</label><br><br>

        <label for="KuesionerPenilaian15">Penggunaan teknologi informasi / The use of information technology</label><br>
        <input type="radio" id="BaikSekali" name="q16" value="BaikSekali">
        <label for="BaikSekali">Baik Sekali</label>
        <input type="radio" id="Baik" name="q16" value="Baik">
        <label for="Baik">Baik</label>
        <input type="radio" id="Cukup" name="q16" value="Cukup">
        <label for="Cukup">Cukup</label>
        <input type="radio" id="Kurang" name="q16" value="Kurang">
        <label for="Kurang">Kurang</label><br><br>

        <label for="KuesionerPenilaian16">Kerjasama tim / team Cooperation</label><br>
        <input type="radio" id="BaikSekali" name="q17" value="BaikSekali">
        <label for="BaikSekali">Baik Sekali</label>
        <input type="radio" id="Baik" name="q17" value="Baik">
        <label for="Baik">Baik</label>
        <input type="radio" id="Cukup" name="q17" value="Cukup">
        <label for="Cukup">Cukup</label>
        <input type="radio" id="Kurang" name="q17" value="Kurang">
        <label for="Kurang">Kurang</label><br><br>

        <label for="KuesionerPenilaian17">Pengembangan diri / Self Development</label><br>
        <input type="radio" id="BaikSekali" name="q18" value="BaikSekali">
        <label for="BaikSekali">Baik Sekali</label>
        <input type="radio" id="Baik" name="q18" value="Baik">
        <label for="Baik">Baik</label>
        <input type="radio" id="Cukup" name="q18" value="Cukup">
        <label for="Cukup">Cukup</label>
        <input type="radio" id="Kurang" name="q18" value="Kurang">
        <label for="Kurang">Kurang</label><br><br>

        <label for="KuesionerPenilaian18">Berdasarkan pengamatan Bapak/Ibu terhadap kinerja alumni Politeknik Negeri Batam keterampilan atau ilmu pengetahuan apa yang harus dikembangkan agar relevan dengan
            kebutuhan perusahaan</label>
        <input type="text" name="q19" id="q19"><br><br>

        <label for="KuesionerPenilaian19">Sertifikasi apa yang perlu dimiliki oleh mahasiswa kami agar relevan dengan bidang pekerjaan di perusahaan Bapak/Ibu</label>
        <input type="text" name="q20" id="q20"><br><br>

        <label for="KuesionerPenilaian20">Sertifikasi apa yang perlu dimiliki oleh mahasiswa kami agar relevan dengan bidang pekerjaan di perusahaan Bapak/Ibu</label>
        <input type="text" name="q21" id="q21"><br><br>

        <label for="KuesionerPenilaian21">Untuk perbaikan pelaksanaan perekrutan terhadap alumni Politeknik Negeri Batam di masa yang akan datang, menurut Bapak/Ibu apa yang perlu dilaksanakan oleh pengelola 
            Politeknik Negeri Batam (jawaban bisa lebih dari satu)
            </label><br>
        <input type="radio" id="BaikSekali" name="q22" value="BaikSekali">
        <label for="BaikSekali"> Meningkatkan komunikasi dengan perusahaan</label><br>
        <input type="radio" id="Baik" name="q22" value="Baik">
        <label for="Baik"> Membangun kerjasama untuk perekrutan dengan perusahaan</label><br>
        <input type="radio" id="Cukup" name="q22" value="Cukup">
        <label for="Cukup"> Meningkatkan keterampilan calon alumni
        </label><br>
        <input type="radio" id="Kurang" name="q22" value="Kurang">
        <label for="Kurang"> Meningkatkan kompetensi akademik calon alumni
        </label><br><br>


        <label for="KuesionerPenilaian22">Dalam setiap tahunnya kami akan mewisuda alumni Politeknik Negeri Batam, bersediakah Perusahaan Bapak menerima alumni Politeknik batam</label><br>
        <input type="radio" id="ya" name="q23" value="Ya">
        <label for="ya">YA</label>
        <input type="radio" id="tidak" name="q23" value="Tidak">
        <label for="tidak">TIDAK</label><br><br>

        <button type="submit" class="btn btn-primary" value="simpan">Simpan</button>
    </form>
    </div>
</body>
</html>