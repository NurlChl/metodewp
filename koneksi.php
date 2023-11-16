<?php

$conn = mysqli_connect("localhost", "root", "", "metodeWP");


function query($query) {

    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;

    }
    return $rows;
};

function tambah($data) {
    global $conn;

    $nama = htmlspecialchars($_POST["nama"]);
    $grafkom = htmlspecialchars($_POST["grafkom"]);
    $unity = htmlspecialchars($_POST["unity"]);
    $pbo = htmlspecialchars($_POST["pbo"]);
    $minat = htmlspecialchars($_POST["minat"]);


    $query = "INSERT INTO multimedia
            VALUES
            ( Null, '$nama', '$grafkom', '$unity', '$pbo', '$minat')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
};



function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM multimedia WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function hapusSi($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM sistem_informasi WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function hapusIot($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM iot WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function edit($data) {
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $grafkom = htmlspecialchars($data["grafkom"]);
    $unity = htmlspecialchars($data["unity"]);
    $pbo = htmlspecialchars($data["pbo"]);
    $minat = htmlspecialchars($data["minat"]);


    $query = "UPDATE multimedia SET
                nama = '$nama',
                grafkom = '$grafkom',
                unity = '$unity',
                pbo = '$pbo',
                minat = '$minat'
             WHERE id = $id
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>