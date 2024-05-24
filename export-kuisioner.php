<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="pbl-css/export-kuisioner.css"/>
        <title>Export</title>
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
                    id="icon2"
                    xmlns="http://www.w3.org/2000/svg"
                    width="30"
                    height="30"
                    fill="currentColor"
                    class="bi bi-database-fill"
                    viewbox="0 0 16 16">
                    <path
                        d="M3.904 1.777C4.978 1.289 6.427 1 8 1s3.022.289 4.096.777C13.125 2.245 14 2.993 14 4s-.875 1.755-1.904 2.223C11.022 6.711 9.573 7 8 7s-3.022-.289-4.096-.777C2.875 5.755 2 5.007 2 4s.875-1.755 1.904-2.223Z"/>
                    <path
                        d="M2 6.161V7c0 1.007.875 1.755 1.904 2.223C4.978 9.71 6.427 10 8 10s3.022-.289 4.096-.777C13.125 8.755 14 8.007 14 7v-.839c-.457.432-1.004.751-1.49.972C11.278 7.693 9.682 8 8 8s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972Z"/>
                    <path
                        d="M2 9.161V10c0 1.007.875 1.755 1.904 2.223C4.978 12.711 6.427 13 8 13s3.022-.289 4.096-.777C13.125 11.755 14 11.007 14 10v-.839c-.457.432-1.004.751-1.49.972-1.232.56-2.828.867-4.51.867s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972Z"/>
                    <path
                        d="M2 12.161V13c0 1.007.875 1.755 1.904 2.223C4.978 15.711 6.427 16 8 16s3.022-.289 4.096-.777C13.125 14.755 14 14.007 14 13v-.839c-.457.432-1.004.751-1.49.972-1.232.56-2.828.867-4.51.867s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972Z"/>
                </svg>
                <nav>
                    <a>Export Kuisioner</a>
                </nav>
            </header>
        </div>
        <div id="container">
            
            <div class="delete-container">

                <div class="circle-container">
                   
                    <svg
                        id="icon"
                        xmlns="http://www.w3.org/2000/svg"
                        width="60"
                        height="60"
                        fill="currentColor"
                        class="bi bi-mortarboard-fill"
                        viewbox="0 0 16 16">
                        <path
                            d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5Z"/>
                        <path
                            d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Z"/>
                    </svg>
                </div>
                <div class="confirmation-text">Export Kuisioner<br>Alumni</div>
                <div class="button-container">
                    <button class="cancel-button">
                        <a href="export-alumni.php">Export</a></button>
                </div>

            </div>
        </div>
        </div>
        <div id="container">
            
            <div class="delete-container">

                <div class="circle-container">
                   
                    <svg id="icon" xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-buildings-fill" viewBox="0 0 16 16">
                        <path d="M15 .5a.5.5 0 0 0-.724-.447l-8 4A.5.5 0 0 0 6 4.5v3.14L.342 9.526A.5.5 0 0 0 0 10v5.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V14h1v1.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5V.5ZM2 11h1v1H2v-1Zm2 0h1v1H4v-1Zm-1 2v1H2v-1h1Zm1 0h1v1H4v-1Zm9-10v1h-1V3h1ZM8 5h1v1H8V5Zm1 2v1H8V7h1ZM8 9h1v1H8V9Zm2 0h1v1h-1V9Zm-1 2v1H8v-1h1Zm1 0h1v1h-1v-1Zm3-2v1h-1V9h1Zm-1 2h1v1h-1v-1Zm-2-4h1v1h-1V7Zm3 0v1h-1V7h1Zm-2-2v1h-1V5h1Zm1 0h1v1h-1V5Z"/>
                      </svg>
                </div>
                <div class="confirmation-text">Export Kuisioner<br>Perusahaan</div>
                <div class="button-container">
                    <button class="cancel-button">
                        <a href="export-perusahaan.php">Export</a>
                    </button>
                </div>

            </div>
        </div>
        </div>
    </body>
</html>