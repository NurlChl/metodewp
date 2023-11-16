<?php

require 'koneksi.php';

$sistemInformasi = query("SELECT * FROM sistem_informasi");

$c1 = 0.3;
$c2 = 0.2;
$c3 = 0.15;
$c4 = 0.35;

$arraySi = [];

foreach ($sistemInformasi as $si) {
    
    $nama = $si["nama"];
    $a0 = $si["id"];
    $a1 = $si["strukdat"];
    $a2 = $si["pemweb"];
    $a3 = $si["si"];
    $a4 = $si["minat"];

    $s = ($a1**$c1)*($a2**$c2)*($a3**$c3)*($a4**$c4);
    // echo($nama." => ".$s."<br>");
    array_push($arraySi, $s);
};

$longData = count($arraySi);
$jumlahNilai = array_sum($arraySi);

// echo("<br><br>hasil v untuk dijadikan alternatif : <br><br>");

for ($i=0; $i<$longData; $i++) {
    $v = ($arraySi[$i])/$jumlahNilai;
    // // echo($multimedia[$i]["nama"]." => ".$v."<br>");
};



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi</title>
    <link rel="stylesheet" href="sistemInformasi.css">
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
                    <p>/ SISTEM INFORMASI</p>
                </div>
            </a>
        </ul>
        <ul class="navig">
            <a href="multimedia.php">
                <li>MULTIMEDIA</li>
            </a>
            <a href="sistemInformasi.php">
                <li style="color: blue;">SISTEM INFORMASI</li>
            </a>
            <a href="iot.php">
                <li>IOT</li>
            </a>
        </ul>
    </nav>

    <section>
        <div>
            <h1>Mahasiswa Sistem Informasi</h1>
            <a href="formSistemInformasi.php">
                <button>Tambah Data</button>
            </a>
        </div>
        <table>
            <tr>
                <th>Nama</th>
                <th>Strukdat</th>
                <th>Pemweb</th>
                <th>SI</th>
                <th>Minat</th>
                <th>Action</th>
            </tr>

            <?php foreach($sistemInformasi as $si) : ?>
            <tr>
                <td><?= $si["nama"] ?></td>
                <td><?= $si["strukdat"] ?></td>
                <td><?= $si["pemweb"] ?></td>
                <td><?= $si["si"] ?></td>
                <td><?= $si["minat"] ?></td>
                <td>
                    <a href="editSi.php?id=<?= $si["id"] ?>">
                        <button class="btnEdit">Edit</button>
                    </a>
                    <a href="hapusSi.php?id=<?= $si["id"] ?>" onclick="
                        return confirm('yakin?');"><button class="btnHapus">Hapus</button>
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <a href="normalisasiSi.php">
            <button class="normalisasi" type="submit" name="normalisasi" >Normalisasi</button>
        </a>
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
                <a href="mailto:nurul.cholil2373@gmail.com">myemail@gmail.com</a>
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