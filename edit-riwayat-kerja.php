<?php
session_start();
include 'koneksi.php';
$username= $_SESSION['username'];
$query = "SELECT * FROM alumni WHERE username='$username'";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($result);


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data profil alumni berdasarkan username
    $query = "SELECT * FROM riwayat_kerja WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);
    $riwayat_kerja = mysqli_fetch_assoc($result);

    if ($riwayat_kerja) {
        $nama_perusahaan = $riwayat_kerja['nama_perusahaan'];
        $durasi = $riwayat_kerja['durasi'];
        $posisi = $riwayat_kerja['posisi'];
        $pendapatan = $riwayat_kerja['pendapatan'];
      
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newNama_perusahaan = $_POST['nama_perusahaan'];
    $newDurasi = $_POST['durasi'];
    $newPosisi = $_POST['posisi'];
    $newPendapatan = $_POST['pendapatan'];
    
    $query = "UPDATE riwayat_kerja SET nama_perusahaan='$newNama_perusahaan', durasi='$newDurasi', posisi='$newPosisi', pendapatan='$newPendapatan' WHERE id='$id'";
    mysqli_query($koneksi, $query);

    // Redirect ke halaman home setelah berhasil update
    header("Location: riwayat-kerja.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="pbl-css/edit-riwayat-kerja.css"/>
        <title>Edit Riwayat Kerja</title>
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
                    <li style="margin-left: 170px;">
                    <a href="#"><?php echo $_SESSION['nama']; ?></a>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            fill="currentColor"
                            class="bi bi-chevron-compact-down"
                            viewbox="0 0 16 16">
                            <path
                                fill-rule="evenodd"
                                d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67z"/>
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
                <svg id="icon" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-buildings-fill" viewBox="0 0 16 16">
                    <path d="M15 .5a.5.5 0 0 0-.724-.447l-8 4A.5.5 0 0 0 6 4.5v3.14L.342 9.526A.5.5 0 0 0 0 10v5.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V14h1v1.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5V.5ZM2 11h1v1H2v-1Zm2 0h1v1H4v-1Zm-1 2v1H2v-1h1Zm1 0h1v1H4v-1Zm9-10v1h-1V3h1ZM8 5h1v1H8V5Zm1 2v1H8V7h1ZM8 9h1v1H8V9Zm2 0h1v1h-1V9Zm-1 2v1H8v-1h1Zm1 0h1v1h-1v-1Zm3-2v1h-1V9h1Zm-1 2h1v1h-1v-1Zm-2-4h1v1h-1V7Zm3 0v1h-1V7h1Zm-2-2v1h-1V5h1Zm1 0h1v1h-1V5Z"/>
                  </svg>
                <nav>
                    <a>Riwayat Kerja - Edit </a>
                </nav>
            </header>
        </div>
        <form action="" method="POST">
        <div id="container">
         <div class="container">
            <div class="kiri">
              <table>
              
                <tr>
                    <td><label for="nama_perusahaan">Nama  Perusahaan</label></td>
                  </tr>
                  <tr>
                      <td>
                          <input type="text" name="nama_perusahaan" id="nama_perusahaan"value="<?php echo $nama_perusahaan;?>"required>
                      </td>
                  </tr>
                  <tr>
                    <td><label for="durasi">Durasi (Bulan/Tahun)</label></td>
                  </tr>
                  <tr>
                      <td>
                          <input type="text" name="durasi" id="durasi"value="<?php echo $durasi;?>"required>
                      </td>
                  </tr>
                 
              
              </table>
            </div>
            <div class="kanan">
              <table>
                <tr>
                    <td><label for="posisi">Posisi</label></td>
                  </tr>
                  <tr>
                      <td>
                          <input type="text" name="posisi" id="posisi" value="<?php echo $posisi;?>"required>
                      </td>
                  </tr>
                  <tr>
                    <td><label for="pendapatan">Pendapatan</label></td>
                  </tr>
                  <tr>
                      <td>
                          <input type="text" name="pendapatan" id="pendapatan"value="<?php echo $pendapatan;?>"required>
                      </td>
                  </tr>
              </table>
            </div>
          </div>

          <div class="button-container">
            <button class="cancel-button" onclick="goBack()">Cancel</button>
            <button class="delete-button" value="Simpan">Update</button>
          </div>
        </div>
        </form>
        
    </div>
    <script>
        // Fungsi untuk kembali ke halaman sebelumnya
        function goBack() {
          window.history.back();
        }
      </script>
    </body>
</html>