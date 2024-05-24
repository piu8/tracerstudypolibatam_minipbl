<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tracer Study</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
            crossorigin="anonymous">
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous"></script>
        <style>
            body {
                background-image: url("img/gedungpoltek.jpg");
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
                color: black;
            }
            .container-box {
                max-width: 800px;
                margin: 110px auto 0;
                border: 1px solid rgb(112, 110, 110);
                padding: 60px;
                background-color: rgba(255, 255, 255, 0.92);
                border-radius: 20px;
                box-shadow: 0 0 50px rgba(0,0,0,.25);
            }
            button a {
                color: inherit; /* Mewarisi warna teks dari elemen induk */
                text-decoration: none; /* Menghapus garis bawah */
            }
            h1 {
                font-family: 'Nunito';
                font-style: normal;
                font-weight: 700;
                font-size: 40px;
                line-height: 55px;
                color: black;
            }

            #h1 {
                line-height: 68px;
                color: #606060;
            }

            #greeting {
                font-family: 'Courier Prime';
                font-style: normal;
                font-weight: 700;
                font-size: 16px;
                line-height: 18px;
                color: #65B8DE;
            }

            #content {
                font-family: 'Nunito';
                font-style: normal;
                font-weight: 400;
                font-size: 14px;
                line-height: 19px;
                color: #323232;
            }
            * {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="container-box">
            <div class="row">
                <div class="col-lg-12">
                    <p id="greeting">👋 Hi, Alumni</p>
                </div>
                <h1>Politeknik Negeri Batam</h1>
                <h1 id="h1">Tracer Study</h1>
                <p id="content">Para alumni yang terhormat, saat ini kami sedang mengadakan
                    Tracer Study kepada alumni Polibatam. Studi ini dilakukan dalam rangka
                    mengidentifikasi keberadaan alumni setelah lulus kuliah. Tujuan studi ini untuk
                    mengevaluasi proses dan hasil perkuliahan, penyempurnaan serta penjaminan
                    kualitas pembelajaran di Polibatam</p>
            </div>
            <p>
                <br>
                <tr>
                    <button type="button" class="btn btn-dark" style="margin-right: 20px;">
                        <a href="login.php">Login 🚩</a>
                    </button>
                </tr>
                <tr>
                    <button type="button" class="btn btn-dark">
                        <a href="form-register.php">Sign Up 🚩</a>
                    </button>
                </tr>
            </div>
        </div>
    </body>
</html>
