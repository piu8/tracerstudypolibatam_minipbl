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


$que = $_POST['que'];
if($que == 1){
    $id = $_POST['id_perusahaan'];
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3= $_POST['q3'];
    $q4= $_POST['q4'];
    $q5= $_POST['q5'];
    

   $input = mysqli_query($koneksi, "INSERT INTO kuisioner_perusahaan1 (id_perusahaan, q1, q2, q3, q4, q5) VALUES ('$id', '$q1', '$q2', '$q3', '$q4', '$q5')") or die(mysqli_error($koneksi));


    if($input) {
        
        header("location:kuesioner_perusahaan2.php?username=$username");
    } else {
        echo "Gagal Disimpan";
    } 
}
else if ($que == 2) {
    $id = $_POST['id_perusahaan'];
    $q1 = isset($_POST['q1']) ? $_POST['q1'] : "";
    $q2 = isset($_POST['q2']) ? $_POST['q2'] : "";
    $q3 = isset($_POST['q3']) ? $_POST['q3'] : "";
    $q4 = isset($_POST['q4']) ? $_POST['q4'] : "";
    $q5 = isset($_POST['q5']) ? $_POST['q5'] : "";
    $q6 = isset($_POST['q6']) ? $_POST['q6'] : "";
    $q7 = isset($_POST['q7']) ? $_POST['q7'] : "";
    $q8 = isset($_POST['q8']) ? $_POST['q8'] : "";
    $q9 = isset($_POST['q9']) ? $_POST['q9'] : "";
    $q10 = isset($_POST['q10']) ? $_POST['q10'] : "";
    $q11 = isset($_POST['q11']) ? $_POST['q11'] : "";
    $q12 = isset($_POST['q12']) ? $_POST['q12'] : "";
    $q13 = isset($_POST['q13']) ? $_POST['q13'] : "";
    $q14 = isset($_POST['q14']) ? $_POST['q14'] : "";
    $q15 = isset($_POST['q15']) ? $_POST['q15'] : "";
    $q16 = isset($_POST['q16']) ? $_POST['q16'] : "";
    $q17 = isset($_POST['q17']) ? $_POST['q17'] : "";
    $q18 = isset($_POST['q18']) ? $_POST['q18'] : "";
    $q19 = isset($_POST['q19']) ? $_POST['q19'] : "";
    $q20 = isset($_POST['q20']) ? $_POST['q20'] : "";
    $q21 = isset($_POST['q21']) ? $_POST['q21'] : "";
    $q22 = isset($_POST['q22']) ? $_POST['q22'] : "";
    $q23 = isset($_POST['q23']) ? $_POST['q23'] : "";

     $input = mysqli_query($koneksi, "INSERT INTO kuisioner_perusahaan2 (id_perusahaan, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12, q13, q14, q15, q16, q17, q18, q19, q20, q21, q22, q23) VALUES ('$id', '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$q9', '$q10', '$q11', '$q12', '$q13', '$q14', '$q15', '$q16', '$q17', '$q18', '$q19', '$q20', '$q21', '$q22', '$q23')") or die(mysqli_error($koneksi));

    if ($input) {
        header("location: home_perusahaan.php?username=$username");
    } else {
        echo "Gagal Disimpan";
    }
}


?>
