<?php
session_start();
include 'koneksi.php';

if (isset($_GET['username'])) {
    $username = $_GET['username'];

    // Ambil data profil alumni berdasarkan username
    $query = "SELECT * FROM alumni WHERE username='$username'";
    $result = mysqli_query($koneksi, $query);
    $alumni = mysqli_fetch_assoc($result);

    if ($alumni) {
        $nama = $alumni['nama'];
        $nik = $alumni['nik'];
        $email = $alumni['email'];
        $prodi = $alumni['prodi'];
        $kelamin = $alumni['kelamin'];
        $alamat = $alumni['alamat'];
        $contact = $alumni['contact'];
    } else {
        // Jika data alumni tidak ditemukan, redirect ke halaman login
        header("Location: login.php");
        exit();
    }
} else {
    // Jika tidak ada parameter username, redirect ke halaman login
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="pbl-css/home_alumni.css"/>
        <title>Home Alumni</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link
            rel="preconnect"
            href="https://fonts.gstatic.com"
            crossorigin="crossorigin">
        <link
            href="https://fonts.googleapis.com/css2?family=Nunito&display=swap"
            rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="logo">
                <img src="img/logo1.jpeg" alt="Logo">
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
                    <li class="user-menu" style="margin-left: 170px;">
                    <a href="#"><?php echo $_SESSION['nama']; ?></a>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            fill="currentColor"
                            class="bi bi-chevron-down"
                            viewbox="0 0 16 16" style="cursor: pointer;">
                            <path
                                fill-rule="evenodd"
                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
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
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="30"
                    height="30"
                    fill="currentColor"
                    class="bi bi-house-door-fill"
                    id="icon"
                    viewbox="0 0 16 16">
                    <path
                        d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
                </svg>
                <nav>
                    <a>Home</a>
                </nav>
            </header>
        </div>
        
        <div id="container">
            <div>
                <!-- Ikon tiga titik -->
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="30"
                    height="30"
                    fill="currentColor"
                    class="bi bi-three-dots icon"
                    viewbox="0 0 16 16"
                    id="titiktiga"
                    onclick="toggleSubMenu(event)">
                    <path
                        d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                </svg>

                <!-- Sub menu -->
                <div id="submenu" class="submenu">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="14"
                        height="14"
                        fill="currentColor"
                        class="bi bi-pencil-fill"
                        viewbox="0 0 16 16"
                        style="vertical-align: middle;">
                        <path
                            d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                    </svg>
                    <a href="edit-profil-alumni.php?username=<?php echo $username; ?>">Edit Data</a>
                </div>
            </div>
            <a id="greet">👋 Hi, Alumni Polibatam !<br>
                Selamat Datang di Tracer Study Alumni Polibatam 🎓</a>
            <hr></hr>
            <a id="judul">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    fill="currentColor"
                    class="bi bi-mortarboard-fill"
                    viewbox="0 0 16 16">
                    <path
                        d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5Z"/>
                    <path
                        d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Z"/>
                </svg>Data Pribadi Alumni</a><br>
                <div class="container">
                <div class="kiri">
                    <table>
                        <tr>
                            <td>NIK</td>
                            <td id="jarak">:</td>
                            <td><?php echo $nik;?></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td id="jarak">:</td>
                            <td><?php echo $nama;?></td>
                        </tr>
                        <tr>
                            <td>Prodi</td>
                            <td id="jarak">:</td>
                            <td><?php echo $prodi;?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td id="jarak">:</td>
                            <td><?php echo $email;?></td>
                        </tr>
                    </table>
                </div>
                <div class="kanan">
                    <table>
                        <tr>
                            <td>Contact</td>
                            <td id="jarak">:</td>
                            <td><?php echo $contact;?></td>
                        </tr>
                        <tr>
                            <td>Kelamin</td>
                            <td id="jarak">:</td>
                            <td><?php echo $kelamin;?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td id="jarak">:</td>
                            <td><?php echo $alamat;?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div align="center" id="kuisioner">
            <a href="kuesioner.php?username=<?php echo $username; ?>">ISI KUISIONER🚀</a>
        </div>
        <script>
            function toggleSubMenu(event) {
                var submenu = document.getElementById("submenu");
                if (submenu.style.display === "block") {
                    submenu.style.display = "none";
                } else {
                    var icon = event.target;
                    var iconRect = icon.getBoundingClientRect();
                    submenu.style.left = iconRect.left + "px";
                    submenu.style.top = iconRect.bottom + "px";
                    submenu.style.display = "block";
                }
            }

            // Event listener untuk menyembunyikan sub menu saat klik di tempat lain di
            // halaman
            document.addEventListener("click", function (event) {
                var targetElement = event.target;
                if (!targetElement.closest(".icon") && !targetElement.closest(".submenu")) {
                    var submenu = document.getElementById("submenu");
                    submenu.style.display = "none";
                }
            });

            document.querySelector('.user-menu').addEventListener('click', function() {
    this.classList.toggle('active');
});

        </script>
    </body>
</html>