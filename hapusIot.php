<?php

require 'koneksi.php';

$id = $_GET["id"];

if (hapusIot($id) > 0 ) {
    echo "
        <script>
            alert('data berhasil dihapus')
            document.location.href = 'iot.php'
        </script>
    ";
} else {
    echo "
        <script>
            alert('data gagal dihapus')
            document.location.href = 'iot.php'
        </script>
    ";
}



?>