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
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="0"
                    height="0"
                    fill="currentColor"
                    class="bi bi-house-door-fill"
                    id="icon"
                    viewbox="0 0 16 16">
                    <path
                        d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
                </svg>
                <nav>
                    <a>Kuesioner</a>
                </nav>
            </header>
        </div>

        <div id="TabelKuisioner">
            <h3>
                <center>Umpan balik dari lulusan</center>
            </h3>
            <hr align="”left”" color="”blue”" size="1"><br>

            <form
                action="simpan_kuisioner.php"
                method="POST"
                id="KuesionerLanjutan"
                align="left">
                <input type="hidden" name="que" value="5">
                <input type="hidden" name="id_alumni" value="<?=$data['id']?>">

                <label for="UmpanBalik">Aktivitas apa yang sedang anda lakukan saat ini?</label><br>
                <input
                    type="radio"
                    id="Option1"
                    name="q1"
                    value="Ingin cepat mendapatkan pekerjaan">
                <label for="Option1">Ingin cepat mendapatkan pekerjaan</label><br>
                <input type="radio" id="Option2" name="q1" value="Keterbatasan Ekonomi">
                <label for="Option2">Keterbatasan Ekonomi</label><br>
                <input type="radio" id="Option3" name="q1" value="Biaya lebih terjangkau">
                <label for="Option3">Biaya lebih terjangkau</label><br>
                <input type="radio" id="Option4" name="q1" value="Pilihan sendiri">
                <label for="Option4">Pilihan sendiri</label><br>
                <input type="radio" id="Option5" name="q1" value="Diajak teman">
                <label for="Option5">Diajak teman</label><br><br>

                <label for="UmpanBalik2">Seberapa penting kemampuan berikut ini dibutuhkan di
                    instansi/lembaga/perusahaan/tempat Anda bekerja/berwirausaha?
                </label><br><br>

                <label for="UmpanBalik2">Kemampuan menggunakan teknologi informasi</label><br><br>
                <input type="radio" id="Option1" name="q2" value="1">
                <label for="Option1">1</label>
                <input type="radio" id="Option2" name="q2" value="2">
                <label for="Option2">2</label>
                <input type="radio" id="Option3" name="q2" value="3">
                <label for="Option3">3</label>
                <input type="radio" id="Option4" name="q2" value="4">
                <label for="Option4">4</label>
                <input type="radio" id="Option5" name="q2" value="5">
                <label for="Option5">5</label><br><br>

                <label for="UmpanBalik3">Kemampuan berbahasa asing</label><br><br>
                <input type="radio" id="Option1" name="q3" value="1">
                <label for="Option1">1</label>
                <input type="radio" id="Option2" name="q3" value="2">
                <label for="Option2">2</label>
                <input type="radio" id="Option3" name="q3" value="3">
                <label for="Option3">3</label>
                <input type="radio" id="Option4" name="q3" value="4">
                <label for="Option4">4</label>
                <input type="radio" id="Option5" name="q3" value="5">
                <label for="Option5">5</label><br><br>

                <label for="UmpanBalik4">Kemampuan menyampaikan ide dan solusi</label><br><br>
                <input type="radio" id="Option1" name="q4" value="1">
                <label for="Option1">1</label>
                <input type="radio" id="Option2" name="q4" value="2">
                <label for="Option2">2</label>
                <input type="radio" id="Option3" name="q4" value="3">
                <label for="Option3">3</label>
                <input type="radio" id="Option4" name="q4" value="4">
                <label for="Option4">4</label>
                <input type="radio" id="Option5" name="q4" value="5">
                <label for="Option5">5</label><br><br>

                <label for="UmpanBalik5">Kemampuan untuk beradaptasi dengan lingkungan kerja</label><br><br>
                <input type="radio" id="Option1" name="q5" value="1">
                <label for="Option1">1</label>
                <input type="radio" id="Option2" name="q5" value="2">
                <label for="Option2">2</label>
                <input type="radio" id="Option3" name="q5" value="3">
                <label for="Option3">3</label>
                <input type="radio" id="Option4" name="q5" value="4">
                <label for="Option4">4</label>
                <input type="radio" id="Option5" name="q5" value="5">
                <label for="Option5">5</label><br><br>

                <label for="UmpanBalik6">Berpikir analitis</label><br><br>
                <input type="radio" id="Option1" name="q6" value="1">
                <label for="Option1">1</label>
                <input type="radio" id="Option2" name="q6" value="2">
                <label for="Option2">2</label>
                <input type="radio" id="Option3" name="q6" value="3">
                <label for="Option3">3</label>
                <input type="radio" id="Option4" name="q6" value="4">
                <label for="Option4">4</label>
                <input type="radio" id="Option5" name="q6" value="5">
                <label for="Option5">5</label><br><br>

                <label for="UmpanBalik7">Kemampuan bekerja secara efektif untuk mencapai tujuan</label><br><br>
                <input type="radio" id="Option1" name="q7" value="1">
                <label for="Option1">1</label>
                <input type="radio" id="Option2" name="q7" value="2">
                <label for="Option2">2</label>
                <input type="radio" id="Option3" name="q7" value="3">
                <label for="Option3">3</label>
                <input type="radio" id="Option4" name="q7" value="4">
                <label for="Option4">4</label>
                <input type="radio" id="Option5" name="q7" value="5">
                <label for="Option5">5</label><br><br>

                <label for="UmpanBalik8">Kemampuan mengelola pekerjaan secara efisien</label><br><br>
                <input type="radio" id="Option1" name="q8" value="1">
                <label for="Option1">1</label>
                <input type="radio" id="Option2" name="q8" value="2">
                <label for="Option2">2</label>
                <input type="radio" id="Option3" name="q8" value="3">
                <label for="Option3">3</label>
                <input type="radio" id="Option4" name="q8" value="4">
                <label for="Option4">4</label>
                <input type="radio" id="Option5" name="q8" value="5">
                <label for="Option5">5</label><br><br>

                <label for="UmpanBalik9">Kemampuan bekerja sama dalam tim</label><br><br>
                <input type="radio" id="Option1" name="q9" value="1">
                <label for="Option1">1</label>
                <input type="radio" id="Option2" name="q9" value="2">
                <label for="Option2">2</label>
                <input type="radio" id="Option3" name="q9" value="3">
                <label for="Option3">3</label>
                <input type="radio" id="Option4" name="q9" value="4">
                <label for="Option4">4</label>
                <input type="radio" id="Option5" name="q9" value="5">
                <label for="Option5">5</label><br><br>

                <label for="UmpanBalik10">Berkinerja baik walaupun ada di bawah tekanan</label><br><br>
                <input type="radio" id="Option1" name="q10" value="1">
                <label for="Option1">1</label>
                <input type="radio" id="Option2" name="q10" value="2">
                <label for="Option2">2</label>
                <input type="radio" id="Option3" name="q10" value="3">
                <label for="Option3">3</label>
                <input type="radio" id="Option4" name="q10" value="4">
                <label for="Option4">4</label>
                <input type="radio" id="Option5" name="q10" value="5">
                <label for="Option5">5</label><br><br>

                <label for="UmpanBalik11">Bagaimana keselarasan pekerjaan/wirausaha Anda sekarang
                    dengan prodi/bidang keahlian/keterampilan Anda di satuan pendidikan/sekolah?
                </label><br>
                <input type="radio" id="Option1" name="q11" value=" Sangat tidak selaras">
                <label for="Option1">Sangat tidak selaras</label><br>
                <input type="radio" id="Option2" name="q11" value=" Tidak selaras">
                <label for="Option2">
                    Tidak selaras
                </label><br>
                <input type="radio" id="Option3" name="q11" value=" Cukup selaras">
                <label for="Option3">
                    Cukup selaras
                </label><br>
                <input type="radio" id="Option4" name="q11" value=" Selaras">
                <label for="Option4">
                    Selaras
                </label><br>
                <input type="radio" id="Option5" name="q11" value=" Sangat selaras">
                <label for="Option5">
                    Sangat selaras
                </label><br><br>

                <label for="UmpanBalik12">Seberapa bermanfaat Studi Anda dikaitkan dengan pekerjaan/wirausaha sekarang?
                </label><br><br>

                <label for="UmpanBalik12">Teori dan praktik</label><br><br>
                <input type="radio" id="Option1" name="q12" value="1">
                <label for="Option1">1</label>
                <input type="radio" id="Option2" name="q12" value="2">
                <label for="Option2">2</label>
                <input type="radio" id="Option3" name="q12" value="3">
                <label for="Option3">3</label>
                <input type="radio" id="Option4" name="q12" value="4">
                <label for="Option4">4</label>
                <input type="radio" id="Option5" name="q12" value="5">
                <label for="Option5">5</label><br><br>

                <label for="UmpanBalik13">Sikap dan kemampuan berkomunikasi (budaya kerja)</label><br><br>
                <input type="radio" id="Option1" name="q13" value="1">
                <label for="Option1">1</label>
                <input type="radio" id="Option2" name="q13" value="2">
                <label for="Option2">2</label>
                <input type="radio" id="Option3" name="q13" value="3">
                <label for="Option3">3</label>
                <input type="radio" id="Option4" name="q13" value="4">
                <label for="Option4">4</label>
                <input type="radio" id="Option5" name="q13" value="5">
                <label for="Option5">5</label><br><br>

                <label for="UmpanBalik14">Jejaring kerja sama dengan DUDI</label><br><br>
                <input type="radio" id="Option1" name="q14" value="1">
                <label for="Option1">1</label>
                <input type="radio" id="Option2" name="q14" value="2">
                <label for="Option2">2</label>
                <input type="radio" id="Option3" name="q14" value="3">
                <label for="Option3">3</label>
                <input type="radio" id="Option4" name="q14" value="4">
                <label for="Option4">4</label>
                <input type="radio" id="Option5" name="q14" value="5">
                <label for="Option5">5</label><br><br>

                <label for="UmpanBalik15">Kemandirian (budaya kerja)</label><br><br>
                <input type="radio" id="Option1" name="q15" value="1">
                <label for="Option1">1</label>
                <input type="radio" id="Option2" name="q15" value="2">
                <label for="Option2">2</label>
                <input type="radio" id="Option3" name="q15" value="3">
                <label for="Option3">3</label>
                <input type="radio" id="Option4" name="q15" value="4">
                <label for="Option4">4</label>
                <input type="radio" id="Option5" name="q15" value="5">
                <label for="Option5">5</label><br><br>

                <label for="UmpanBalik16">Magang/prakerin</label><br><br>
                <input type="radio" id="Option1" name="q16" value="1">
                <label for="Option1">1</label>
                <input type="radio" id="Option2" name="q16" value="2">
                <label for="Option2">2</label>
                <input type="radio" id="Option3" name="q16" value="3">
                <label for="Option3">3</label>
                <input type="radio" id="Option4" name="q16" value="4">
                <label for="Option4">4</label>
                <input type="radio" id="Option5" name="q16" value="5">
                <label for="Option5">5</label><br><br>

                <label for="UmpanBalik17">Kelengkapan sarana dan teknologi pembelajaran</label><br><br>
                <input type="radio" id="Option1" name="q17" value="1">
                <label for="Option1">1</label>
                <input type="radio" id="Option2" name="q17" value="2">
                <label for="Option2">2</label>
                <input type="radio" id="Option3" name="q17" value="3">
                <label for="Option3">3</label>
                <input type="radio" id="Option4" name="q17" value="4">
                <label for="Option4">4</label>
                <input type="radio" id="Option5" name="q17" value="5">
                <label for="Option5">5</label><br><br>

                <label for="UmpanBalik18">Kemampuan bekerja sama (budaya kerja)</label><br><br>
                <input type="radio" id="Option1" name="q18" value="1">
                <label for="Option1">1</label>
                <input type="radio" id="Option2" name="q18" value="2">
                <label for="Option2">2</label>
                <input type="radio" id="Option3" name="q18" value="3">
                <label for="Option3">3</label>
                <input type="radio" id="Option4" name="q18" value="4">
                <label for="Option4">4</label>
                <input type="radio" id="Option5" name="q18" value="5">
                <label for="Option5">5</label><br><br>

                <label for="UmpanBalik18">Menulis tugas akhir</label><br><br>
                <input type="radio" id="Option1" name="q19" value="1">
                <label for="Option1">1</label>
                <input type="radio" id="Option2" name="q19" value="2">
                <label for="Option2">2</label>
                <input type="radio" id="Option3" name="q19" value="3">
                <label for="Option3">3</label>
                <input type="radio" id="Option4" name="q19" value="4">
                <label for="Option4">4</label>
                <input type="radio" id="Option5" name="q19" value="5">
                <label for="Option5">5</label><br><br>

                <button type="submit" class="btn btn-primary" value="simpan">Simpan</button>
            </form>
        </div>
    </body>
</html>