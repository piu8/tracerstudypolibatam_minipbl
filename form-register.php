<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registrasi</title>
        <link rel="stylesheet" type="text/css" href="pbl-css/minipbl.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <table id="Poltek">
            <img src="img/Logo_Politeknik_Negeri_Batam.png" style="display:block; margin:auto;" height="100px" width="100px">
        </table>
        <hr>

        <h2>
            <center>Tracer Study Alumni Politeknik Negeri Batam</center>
        </h2>
        <hr>

        <div id="container">
            <h3>
                <center>Form Registrasi</center>
                <?php if (isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>
            </h3>
            <hr align="left" color="blue" size="1">
            <br>
            <form action="proses.php" method="POST" align="center">
                <label for="nama">Nama</label><br>
                <input type="text" name="nama" id="nama" required="required"><br><br>

                <label for="nik">NIK</label><br>
                <input type="text" name="nik" id="nik" required="required"><br><br>

                <label for="email">Email</label><br>
                <input type="email" name="email" id="email" required="required"><br><br>

                <label for="Jurusan">Jurusan</label><br>
                <select name='jurusan' id="Jurusan" required="required">
                    <option value="Pilih Jurusan" selected="selected">--Pilih Jurusan--</option>
                    <option value='Teknik Informatika'>Teknik Informatika</option>
                    <option value='Teknik Mesin'>Teknik Mesin</option>
                    <option value='Manajemen Bisnis'>Manajemen Bisnis</option>
                    <option value='Teknik Electro'>Teknik Electro</option>
                </select><br>

                <label for="prodi">Prodi</label><br>
                <input type="text" name="prodi" id="prodi" required="required"><br><br>

                <label for="bulan">Bulan dan Tahun Lulus</label><br>
                <input type="text" name="bulan" id="bulan" required="required"><br><br>

                <label for="usia">Usia</label><br>
                <input type="text" name="usia" id="usia" required="required"><br><br>

                <label for="kelamin">Jenis Kelamin</label><br>
                <select name="kelamin" id="kelamin" required="required">
                    <option value="Pilih Jenis Kelamin" selected="selected">--Pilih Jenis Kelamin--</option>
                    <option value="laki-laki">Laki-Laki</option>
                    <option value="perempuan">Perempuan</option>
                </select><br>

                <label for="alamat">Alamat</label><br>
                <input type="text" name="alamat" id="alamat" required="required"><br><br>

                <label for="contact">No Wa/Telepon</label><br>
                <input type="text" name="contact" id="contact" required="required"><br><br>

                <button type="submit" class="btn btn-primary" value="Register">Register</button>
            </form>

            <!-- include script -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </body>
    </html>
