<?php

require 'koneksi.php';

if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil ditambahkan')
                document.location.href = 'multimedia.php'
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan')
                document.location.href = 'multimedia.php'
            </script>
        ";
    }
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Multimedia</title>
    <link rel="stylesheet" href="formMultimedia.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.cdnfonts.com/css/avenir" rel="stylesheet">
</head>
<body>
<nav>
        <ul>
            <a href="#top">
                <div>
                    <li></li>
                    <h2 class="nama">Konsorsium</h2>
                    <p>/ MULTIMEDIA</p>
                </div>
            </a>
        </ul>
        <ul class="navig">
            <a href="multimedia.php">
                <li>MULTIMEDIA</li>
            </a>
            <a href="sistemInformasi.php">
                <li>SISTEM INFORMASI</li>
            </a>
            <a href="iot.php">
                <li>IOT</li>
            </a>
        </ul>
    </nav>

    <section>
        <div>
            <li></li>
            <h1>Tambah Mahasiswa</h1>
        </div>
        <form action="" method="post">
            <ul>
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" required>
            </ul>
            <ul>
                <label for="grafkom" class="bintang">Grafkom</label>
                <input type="number" id="grafkom" name="grafkom" required>
            </ul>
            <ul>
                <label for="unity" class="bintang">Unity</label>
                <input type="number" id="unity" name="unity" required>
            </ul>
            <ul>
                <label for="pbo" class="bintang">PBO</label>
                <input type="number" id="pbo" name="pbo" required>
            </ul>
            <ul>
                <label for="minat" class="bintang">Minat</label>
                <input type="number" id="minat" name="minat" required>
            </ul>
            <ul>
                <p>Masukkan nilai matakuliah dan minat dari 1-100</p>
            </ul>
            <a>
                <button type="submit" name="submit">Kirim</button>
            </a>
        </form>
    </section>

    <footer>
        <div class="copyright">
            <p>© 2023 by Fitria Susanti.</p>
            <p>Powered and Secured by <span>me</span></p>
        </div>
        <div class="foot">
            <div>
                <h4>Call</h4>
                <p>8888-9999-2222</p>
            </div>
            <div>
                <h4>Write</h4>
                <a href="">myemail@gmail.com</a>
            </div>
            <div>
                <h4>Follow</h4>
                <ul>
                    <a href="" target="_blank">
                        <li class="fa fa-twitter"></li>
                    </a>
                    <a href="" target="_blank">
                        <li class="fa fa-pinterest"></li>
                    </a>
                    <a href="" target="_blank">
                        <li class="fa fa-linkedin"></li>
                    </a>
                    <a href="" target="_blank">
                        <li class="fa fa-instagram"></li>
                    </a>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>