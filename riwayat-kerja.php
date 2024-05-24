<?php
session_start();
include "koneksi.php";
if ($_SESSION['username']) {
    $username = $_SESSION['username'];
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
    <title>Riwayat Kerja</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <link rel="stylesheet" type="text/css" href="pbl-css/riwayat_kerja.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
                    <a href="#"><?= $_SESSION['nama']; ?></a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-down" viewbox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67z" />
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
            <svg id="icon" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pc-display" viewbox="0 0 16 16">
                <path d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z" />
            </svg>
            <nav>
                <a>Riwayat Pekerjaan</a>
            </nav>
        </header>
    </div>



    <div id="container">
        <a class="btn btn-light" href="create-riwayat-kerja.php?id=<?= $data['id'] ?>">
            <i class="fa-regular fa-square-plus fa-2x"></i>
        </a>
        <table>
            <thead>
                <th>NO</th>
                <th>PERUSAHAAN</th>
                <th>POSISI</th>
                <th></th>
            </thead>
            <?php
            include 'koneksi.php';

            $query = mysqli_query($koneksi, "SELECT * FROM riwayat_kerja where 
                  id_alumni='" . $data["id"] . "'");
            $no = 1;
            while ($data1 = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data1['nama_perusahaan']; ?></td>
                    <td><?php echo $data1['posisi']; ?></td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-light" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#show<?php echo $data1['id']; ?>"> <i class="fa-solid fa-eye"></i> Show </a></li>
                                <li><a class="dropdown-item" href="edit-riwayat-kerja.php?id=<?php echo $data1['id']; ?>"> <i class="fa-solid fa-pen-to-square"></i> Edit </a></li>
                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#hapus<?php echo $data1['id']; ?>"> <i class="fa-solid fa-trash"></i> Hapus </a></li>
                            </ul>
                        </div>
                    </td>
                    <!-- Modal Show-->
                    <div class="modal fade " id="show<?php echo $data1['id'] ?>" tabindex="-1" aria-hidden="true">
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
                                                        <li>Nama Perusahaan : <?= $data1['nama_perusahaan'] ?></li>
                                                        <li>Posisi : <?= $data1['posisi'] ?></li>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="card">
                                                        <li>Durasi : <?= $data1['durasi'] ?></li>
                                                        <li>Pendapatan : <?= $data1['pendapatan'] ?></li>
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
                <div class="modal fade" id="hapus<?php echo $data1['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Show Riwayat Kerja</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                Apakah anda yakin ingin menghapus riwayat kerja ini ?
                                <div class="modal-footer">
                                    <a class="btn btn-danger" href="hapus_riwayat.php?id=<?= $data1['id'] ?>">HAPUS</a>
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

        // Event listener untuk menyembunyikan sub menu saat klik di tempat lain di
        // halaman
        document.addEventListener("click", function(event) {
            var targetElement = event.target;
            if (!targetElement.closest(".icon") && !targetElement.closest(".submenu")) {
                var submenu = document.getElementById("submenu");
                submenu.style.display = "none";
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