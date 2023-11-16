<?php

require 'koneksi.php';

$id = $_GET["id"];
$iot = query("SELECT * FROM iot WHERE id = $id")[0];

function editIot($data) {
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $eldig = htmlspecialchars($data["eldig"]);
    $siskom = htmlspecialchars($data["siskom"]);
    $robotic = htmlspecialchars($data["robotic"]);
    $minat = htmlspecialchars($data["minat"]);


    $query = "UPDATE iot SET
                nama = '$nama',
                eldig = '$eldig',
                siskom = '$siskom',
                robotic = '$robotic',
                minat = '$minat'
             WHERE id = $id
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

if (isset($_POST["submit"])) {

    if (editIot($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil ditambahkan')
                document.location.href = 'iot.php'
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan')
                document.location.href = 'iot.php'
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
    <title>Edit IOT</title>
    <link rel="stylesheet" href="formSistemInformasi.css">
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
                    <p>/ IOT</p>
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
            <h1>Tambah Mahasiswa IOT</h1>
        </div>
        <form action="" method="post">
            <ul>
                <input type="hidden" name="id"  value="<?= $iot["id"]; ?>">
            </ul>
            <ul>
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" required  value="<?= $iot["nama"]; ?>">
            </ul>
            <ul>
                <label for="eldig" class="bintang">Eldig</label>
                <input type="number" id="eldig" name="eldig" required value="<?= $iot["eldig"]; ?>">
            </ul>
            <ul>
                <label for="siskom" class="bintang">Siskom</label>
                <input type="number" id="siskom" name="siskom" required value="<?= $iot["siskom"]; ?>">
            </ul>
            <ul>
                <label for="robotic" class="bintang">Robotic</label>
                <input type="number" id="robotic" name="robotic" required value="<?= $iot["robotic"]; ?>">
            </ul>
            <ul>
                <label for="minat" class="bintang">Minat</label>
                <input type="number" id="minat" name="minat" required value="<?= $iot["minat"]; ?>">
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