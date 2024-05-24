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
        $nik = $alumni['nik'];
        $nama = $alumni['nama'];
        $prodi = $alumni['prodi'];
        $email = $alumni['email'];
        $contact = $alumni['contact'];
        $kelamin = $alumni['kelamin'];
        $alamat = $alumni['alamat'];
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
    $newNama = $_POST['nama'];
    $newProdi = $_POST['prodi'];
    $newEmail = $_POST['email'];
    $newContact = $_POST['contact'];
    $newKelamin = $_POST['kelamin'];
    $newAlamat = $_POST['alamat'];
    // Update data profil alumni
    $query = "UPDATE alumni SET nama='$newNama', prodi='$newProdi', email='$newEmail', contact='$newContact', kelamin='$newKelamin', alamat='$newAlamat' WHERE username='$username'";
    mysqli_query($koneksi, $query);

    // Redirect ke halaman home setelah berhasil update
    header("Location: home_alumni.php?username=$username");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="pbl-css/edit-profil-alumni.css"/>
        <title>Edit Profil</title>
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
            <nav style="margin-right: 90px;">
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
                    <li class="user-menu" style="margin-left: 140px;">
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
                    id="icon"
                    xmlns="http://www.w3.org/2000/svg"
                    width="30"
                    height="30"
                    fill="currentColor"
                    class="bi bi-mortarboard-fill"
                    viewbox="0 0 16 16">
                    <path
                        d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5Z"/>
                    <path
                        d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Z"/>
                </svg>
                <nav>
                    <a>Edit - User </a>
                </nav>
            </header>
        </div>
        <form action="" method="POST">
        <div id="container">
         <div class="container">
            <div class="kiri">
              <table>
                <tr>
                  <td><label for="nik">NIK</label></td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="nik" id="nik" value="<?php echo $nik;?>" readonly>
                    </td>
                </tr>
                <tr>
                    <td><label for="nama">Nama</label></td>
                  </tr>
                  <tr>
                      <td>
                          <input type="text" name="nama" id="nama"  value="<?php echo $nama;?>"required>
                      </td>
                  </tr>
                  <tr>
                    <td><label for="prodi">Prodi</label></td>
                  </tr>
                  <tr>
                      <td>
                          <input type="text" name="prodi" id="prodi" value="<?php echo $prodi;?>"required>
                      </td>
                  </tr>
                  <tr>
                    <td><label for="email">Email</label></td>
                  </tr>
                  <tr>
                      <td>
                          <input type="text" name="email" id="email" value="<?php echo $email;?>"required>
                      </td>
                  </tr>
              
              </table>
            </div>
            <div class="kanan">
              <table>
                <tr>
                    <td><label for="contact">Contact</label></td>
                  </tr>
                  <tr>
                      <td>
                          <input type="text" name="contact" id="contact" value="<?php echo $contact;?>"required>
                      </td>
                  </tr>
                  <tr>
                    <td><label for="kelamin">Jenis Kelamin</label></td>
                  </tr>
                  <tr>
                      <td>
                        <select name="kelamin" id="kelamin" value="<?php echo $kelamin;?>"required>
                            <option value="Pilih Jenis Kelamin" selected="selected">--Pilih Jenis Kelamin--</option>
                            <option value="laki-laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                          </select><br>
                      </td>
                  </tr>
                  <tr>
                    <td><label for="alamat">Alamat</label></td>
                  </tr>
                  <tr>
                      <td>
                          <input type="text" name="alamat" id="alamat" value="<?php echo $alamat;?>"required>
                      </td>
                  </tr>
              </table>
            </div>
          </div>

          <div class="button-container">
            <button class="cancel-button" onclick="goBack()">Cancel</button>
            <button type="submit" class="delete-button" value="Simpan">Update</button>
          </div>
        </div>
        
    </div>
    </form>
    <script>
        // Fungsi untuk kembali ke halaman sebelumnya
        function goBack() {
          window.history.back();
        }

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