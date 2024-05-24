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

$que = $_POST['que'];
if ($que == 1) {
    $id = $_POST['id_alumni'];
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
    $q5 = $_POST['q5'];
    $q6 = $_POST['q6'];
    $q7 = isset($_POST['q7']) ? $_POST['q7'] : null; // Menambahkan pengecekan apakah q7 diisi atau tidak
    $q8 = $_POST['q8'];
    $q9 = $_POST['q9'];
    $q10 = $_POST['q10'];
    $q11 = $_POST['q11'];
    $q12 = $_POST['q12'];

    $input = mysqli_query($koneksi, "INSERT INTO kuisioner1 (id_alumni, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12) VALUES ('$id', '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$q9', '$q10', '$q11', '$q12')") or die(mysqli_error($koneksi));
   
    if ($input) {
        header("Location: kuesioner2.php?username=$username");
        exit();
    } else {
        echo "Gagal Disimpan";
    }
}else if ($que == 2) {
    $id = $_POST['id_alumni'];
    $q1 = isset($_POST['q1']) ? $_POST['q1'] : null;
    $q2 = isset($_POST['q2']) ? $_POST['q2'] : null;
    $q3 = isset($_POST['q3']) ? $_POST['q3'] : null;
    
    $input = mysqli_query($koneksi, "INSERT INTO kuisioner2 (id_alumni, q1, q2, q3) VALUES ('$id', '$q1', '$q2', '$q3')") or die(mysqli_error($koneksi));
    
    if ($input) {
        header("Location: kuesioner3.php?username=$username");
        exit();
    } else {
        echo "Gagal Disimpan";
    }
}
else if ($que == 3) {
    $id = $_POST['id_alumni'];
    $q1 = isset($_POST['q1']) ? $_POST['q1'] : null;
    
    $input = mysqli_query($koneksi, "INSERT INTO kuisioner3 (id_alumni, q1) VALUES ('$id', '$q1')") or die(mysqli_error($koneksi));
    
    if ($input) {
        header("Location: kuesioner4.php?username=$username");
        exit();
    } else {
        echo "Gagal Disimpan";
    }
}
else if ($que == 4) {
    $id = $_POST['id_alumni'];
    $q1 = isset($_POST['q1']) ? $_POST['q1'] : null;
    $q2 = isset($_POST['q2']) ? $_POST['q2'] : null;
    $q3 = isset($_POST['q3']) ? $_POST['q3'] : null;
    $q4 = isset($_POST['q4']) ? $_POST['q4'] : null;
    $q5 = isset($_POST['q5']) ? $_POST['q5'] : null;
    $q6 = isset($_POST['q6']) ? $_POST['q6'] : null;
    $q7 = isset($_POST['q7']) ? $_POST['q7'] : null;

    $input = mysqli_query($koneksi, "INSERT INTO kuisioner4 (id_alumni, q1, q2, q3, q4, q5, q6, q7) VALUES ('$id', '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7')") or die(mysqli_error($koneksi));

    if ($input) {
        
        header("Location: kuesioner5.php?username=$username");
        exit();
    } else {
        echo "Gagal Disimpan";
    }
}
else if ($que == 5) {
    if (isset($_POST['id_alumni'])) {
        $id = $_POST['id_alumni'];
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

        $input = mysqli_query($koneksi, "INSERT INTO kuisioner5 (id_alumni, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12, q13, q14, q15, q16, q17, q18, q19) VALUES ('$id', '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$q9', '$q10', '$q11', '$q12', '$q13', '$q14', '$q15', '$q16', '$q17', '$q18', '$q19')") or die(mysqli_error($koneksi));

        if ($input) {
           
            header("location: kuesioner6.php?username=$username");
            exit();
        } else {
            echo "Gagal Disimpan";
        }
    } else {
        echo "ID Alumni tidak ditemukan";
    }
}

else if ($que == 6) {
    if (isset($_POST['id_alumni']) && isset($_POST['q1'])) {
        $id = $_POST['id_alumni'];
        $q1 = $_POST['q1'];
  
        $input = mysqli_query($koneksi, "INSERT INTO kuisioner6 (id_alumni, q1) VALUES ('$id', '$q1')") or die(mysqli_error($koneksi));
        
        if ($input) {
            
            header("location: kuesioner7.php?username=$username");
            exit();
        } else {
            echo "Gagal Disimpan";
        }
    } else {
        echo "mohon data untuk di isi";
    }
}
else if ($que == 7) {
    if (isset($_POST['id_alumni']) && isset($_POST['q1']) && isset($_POST['q2']) && isset($_POST['q3']) && isset($_POST['q4']) && isset($_POST['q5'])) {
        $id = $_POST['id_alumni'];
        $q1 = $_POST['q1'];
        $q2 = $_POST['q2'];
        $q3 = $_POST['q3'];
        $q4 = $_POST['q4'];
        $q5 = $_POST['q5'];
  
        $input = mysqli_query($koneksi, "INSERT INTO kuisioner7 (id_alumni, q1, q2, q3, q4, q5) VALUES ('$id', '$q1', '$q2', '$q3', '$q4', '$q5')") or die(mysqli_error($koneksi));
        
        if ($input) {
            
            header("location: kuesioner8.php?username=$username");
            exit();
        } else {
            echo "Gagal Disimpan";
        }
    } else {
        echo "Mohon data untuk di isi semua";
    }
}
else if ($que == 8) {
    if (isset($_POST['id_alumni']) && isset($_POST['q1'])) {
        $id = $_POST['id_alumni'];
        $q1 = $_POST['q1'];
      
        $input = mysqli_query($koneksi, "INSERT INTO kuisioner8 (id_alumni, q1) VALUES ('$id', '$q1')") or die(mysqli_error($koneksi));
      
        if ($input) {
           
            header("location: kuesioner9.php?username=$username");
        } else {
            echo "Gagal Disimpan";
        }
    } else {
        echo "Mohon data untuk di isi semua";
    }
}
else if ($que == 9) {
    if (isset($_POST['id_alumni']) && isset($_POST['q1']) && isset($_POST['q2']) && isset($_POST['q3']) && isset($_POST['q4']) && isset($_POST['q5'])) {
        $id = $_POST['id_alumni'];
        $q1 = $_POST['q1'];
        $q2 = $_POST['q2'];
        $q3 = $_POST['q3'];
        $q4 = $_POST['q4'];
        $q5 = $_POST['q5'];
        

        $input = mysqli_query($koneksi, "INSERT INTO kuisioner9 (id_alumni, q1, q2, q3, q4, q5) VALUES ('$id', '$q1', '$q2', '$q3', '$q4', '$q5')") or die(mysqli_error($koneksi));

        if ($input) {
            
            header("location: kuesioner10.php?username=$username");
        } else {
            echo "Gagal Disimpan";
        }
    } else {
        echo "Mohon data untuk di isi semua";
    }
}
else if ($que == 10) {
    if (isset($_POST['id_alumni']) && isset($_POST['q1'])) {
        $id = $_POST['id_alumni'];
        $q1 = $_POST['q1'];

        $input = mysqli_query($koneksi, "INSERT INTO kuisioner10 (id_alumni, q1) VALUES ('$id', '$q1')") or die(mysqli_error($koneksi));

        if ($input) {
            
            header("location: kuesioner11.php?username=$username");
        } else {
            echo "Gagal Disimpan";
        }
    } else {
        echo "Mohon data untuk di isi semua";
    }
}
else if ($que == 11) {
    if (isset($_POST['id_alumni']) && isset($_POST['q1']) && isset($_POST['q2']) && isset($_POST['q3']) && isset($_POST['q4'])) {
        $id = $_POST['id_alumni'];
        $q1 = $_POST['q1'];
        $q2 = $_POST['q2'];
        $q3 = $_POST['q3'];
        $q4 = $_POST['q4'];

        $input = mysqli_query($koneksi, "INSERT INTO kuisioner11 (id_alumni, q1, q2, q3, q4) VALUES ('$id', '$q1', '$q2', '$q3', '$q4')") or die(mysqli_error($koneksi));

        if ($input) {
            
            header("location: home_alumni.php?username=$username");
        } else {
            echo "Gagal Disimpan";
        }
    } else {
        echo "Mohon data untuk di isi semua";
    }
}


?>
