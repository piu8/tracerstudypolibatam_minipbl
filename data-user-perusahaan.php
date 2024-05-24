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
    header("Location: login-admin.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>User Perusahaan</title>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
            

        <link rel="stylesheet" type="text/css" href="pbl-css/data-user_perusahaan.css"/>
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link
            rel="preconnect"
            href="https://fonts.gstatic.com"
            crossorigin="crossorigin">
        <link
            href="https://fonts.googleapis.com/css2?family=Nunito&display=swap"
            rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <div class="logo">
                <img src="img/logo1.jpeg" alt="Logo">
            </div>
            <nav>
                <ul>
                <li>
                        <a href="home_admin.php">Home</a>
                    </li>
                    <li>
                        <a href="data-user-alumni.php">User Alumni</a>
                    </li>
                    <li>
                        <a href="data-user-perusahaan.php">User Perusahaan</a>
                    </li>
                    <li>
                        <a href="export-kuisioner.php">Export Kuisioner</a>
                    </li>
                    <li>
                        <a href="export-data-riwayat-kerja.php">Export Riwayat Kerja</a>
                    </li>
                    <li>
                    <a href="#"><?php echo $_SESSION['username']; ?></a>
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
                    <a>User Perusahaan</a>
                </nav>
            </header>
        </div>


        
   
        <div id="container">
            <table>
                <thead>
                    <th>NO</th>
                    <th>ID PERUSAHAAN</th>
                    <th>NAME</th>
                    <th></th>
                </thead>
                <?php
              include 'koneksi.php';
              
                  $query = mysqli_query($koneksi, "SELECT * FROM perusahaan");
                  $no = 1;
                  while ($data = mysqli_fetch_assoc($query)) {
                  ?>
                <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $data['id_perusahaan'];?></td>
                    <td><?php echo $data['nama_perusahaan'];?></td>
                    <td>
                    <div class="dropdown">
                        <button class="btn btn-light" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#show<?php echo $data['id_perusahaan']; ?>"> <i class="fa-solid fa-eye"></i> Show </a></li>
                            <li><a class="dropdown-item" href="edit-user-perusahaan.php?id_perusahaan=<?php echo $data['id_perusahaan']; ?>"> <i class="fa-solid fa-pen-to-square"></i> Edit </a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#hapus<?php echo $data['id_perusahaan']; ?>"> <i class="fa-solid fa-trash"></i> Hapus </a></li>
                        </ul>
                        </div>
                    </td>
                <!-- Modal Show-->
                <div class="modal fade " id="show<?php echo $data['id_perusahaan']?>" tabindex="-1"  aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Show Riwayat Kerja</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <li>ID : <?= $data['id_perusahaan'] ?></li>
                                                <li>Nama : <?= $data['nama_perusahaan'] ?></li>
                                                <li>Email : <?= $data['email'] ?></li>
                                                <li>Contact : <?= $data['contact'] ?></li>
                                                <li>Alamat : <?= $data['alamat'] ?></li>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        
                    </div>
                    </div>
                </div>
                </div>
                    <!-- End Modal Show -->
                </tr>
                <!-- Modal hapus-->
                <div class="modal fade" id="hapus<?php echo $data['id_perusahaan']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content ">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Delete Data Alumni</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        
                        Apakah anda yakin ingin menghapus data user perusahaan ini ?
                        <div class="modal-footer">
                            <a class="btn btn-danger" href="hapus_user_perusahaan.php?id_perusahaan=<?= $data['id_perusahaan'] ?>">HAPUS</a>
                        </form>
                        </div>
                    </div>
                </div>
                </div>
                </div>
                    <!-- End Modal hapus -->
                <?php
                  }
                  ?>
            </table>
        </div>
        <script>
            // Fungsi untuk menampilkan/menyembunyikan sub menu
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
        
            // Event listener untuk menyembunyikan sub menu saat klik di tempat lain di halaman
            document.addEventListener("click", function(event) {
                var targetElement = event.target;
                if (!targetElement.closest(".icon") && !targetElement.closest(".submenu")) {
                    var submenu = document.getElementById("submenu");
                    submenu.style.display = "none";
                }
            });

            function toggleSubMenu1(event) {
            var submenu1 = document.getElementById("submenu1");
            if (submenu1.style.display === "block") {
                submenu1.style.display = "none";
            } else {
                var icon = event.target;
                var iconRect = icon.getBoundingClientRect();
                submenu1.style.left = iconRect.left + "px";
                submenu1.style.top = iconRect.bottom + "px";
                submenu1.style.display = "block";
            }
        }

        // Event listener untuk menyembunyikan sub menu saat klik di tempat lain di
        // halaman
        document.addEventListener("click", function (event) {
            var targetElement = event.target;
            if (!targetElement.closest(".icon") && !targetElement.closest(".submenu1")) {
                var submenu1 = document.getElementById("submenu1");
                submenu1.style.display = "none";
            }
        });

        //modal
        function show() {
            document
                .getElementById("show")
                .style
                .display = "block";
        }
        function closeShow() {
            document
                .getElementById("show")
                .style
                .display = "none";
        }

        function hapus() {
            document
                .getElementById("hapus")
                .style
                .display = "block";
        }
        // Fungsi untuk menutup modal

        function closeHapus() {
            document
                .getElementById("hapus")
                .style
                .display = "none";
        }
        </script>
    </body>
</html>