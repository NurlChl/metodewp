<?php

require 'koneksi.php';

$matkul = query("SELECT * FROM matkul");

// var_dump($matkul);

// bobot setiap matkul
$c1 = 0.3;
$c2 = 0.2;
$c3 = 0.2;
$c4 = 0.15;
$c5 = 0.15;


$arrayData = [];


foreach($matkul as $mat) {

    $nama = $mat["nama"];
    $a1 = $mat["kalkulus"];
    $a2 = $mat["pdb"];
    $a3 = $mat["kpb"];
    $a4 = $mat["logim"];
    $a5 = $mat["minat"];

    $s = ($a1**$c1)*($a2**$c2)*($a3**$c3)*($a4**$c4)*($a5**$c5);
    echo($nama." => ".$s."<br>");

    array_push($arrayData, $s);

};


$longData = count($arrayData);
$jumlahNilai = array_sum($arrayData);

echo("<br><br>hasil v untuk dijadikan alternatif : <br><br>");

for ($i=0; $i<$longData; $i++) {

    $v = ($arrayData[$i])/$jumlahNilai;

    echo($matkul[$i]["nama"]." => ".$v."<br>");
};






?>