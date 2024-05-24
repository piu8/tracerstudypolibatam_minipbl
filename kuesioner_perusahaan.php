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
        <link rel="stylesheet" type="text/css" href="pbl lama/kuesioner alumni.css"/>
        <title>Home Alumni</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="logo">
                <img src="pbl lama/img/logo1.jpeg" alt="Logo"> 
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
                    <a>Home</a>
                </nav>
            </header>
        </div>
        <div id="container">
            

            <div class="container">
                <div class="border">
                    <p id="Kata">Para perusahaan yang terhormat, saat ini kami sedang mengadakan Tracer Study kepada perusahaan Polibatam. Studi ini dilakukan dalam rangka mengidentifikasi keberadaan alumni setelah lulus kuliah. Tujuan studi ini untuk mengevaluasi proses dan hasil perkuliahan, penyempurnaan serta penjaminan kualitas pembelajaran di Polibatam.

Berkaitan dengan hal tersebut kami mohon partisipasi saudara meluangkan waktu untuk menjawab pertanyaan dalam kuisioner ini, data yang telah disampaikan akan dijaga kerahasiaannya. Atas perhatian dan kerjasama yang baik serta bantuannya, kami mengucapkan terima kasih.

🙏</p>
                    <div align="center" id="kuisioner">
            <a href="kuesioner_perusahaan1.php?username=<?php echo $username; ?>">ISI KUISIONER🚀</a>
        </div>
            </div>
        </div>
            
          
        </body>
    </html>

