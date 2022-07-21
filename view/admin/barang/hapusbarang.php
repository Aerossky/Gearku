<?php
require '../../../controller/controllerBarang.php';

$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "
    <script>
        alert('Data Berhasil Dihapus');
    </script>";
    header('location: barang.php', true, 301);
    exit();
} else {
    echo "
    <script>
        alert('Data Gagal Dihapus');
    </script>
";
    header('location: barang.php', true, 301);
    exit();
}
