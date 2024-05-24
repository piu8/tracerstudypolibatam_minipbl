<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="pbl-css/minipbl.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <table id="Poltek">
        <img src="img/Logo_Politeknik_Negeri_Batam.png" style="display:block; margin:auto;" height="100px" width="100px" >
      </table><hr>

    <h2><center>Tracer Study Alumni Politeknik Negeri Batam</center></h2><hr>

    <div id="container">
        <h3><center>Login</center></h3>
        <?php if (isset($error_message)) { ?>
        <p><?php echo $error_message; ?></p>
    <?php } ?>
        <hr align=”left” color=”blue” size="1" ><br>
    
    <form action="proses_login.php" method="POST" align="center">
        <label for="username">Username</label><br>
        <input type="text" name="username" id="username" required="required"><br><br>

        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" required="required"><br><br>
        
       <br>
       <button type="submit" class="btn btn-primary btn-sm" style="margin-left: 0px;" value="Login">Login</button>
    <a style="margin-left: 170px;">Belum punya akun? <a href="form-register.php">Daftar</a></a>
    </form>
    
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>