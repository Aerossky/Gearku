<?php

require '../../../controller/controllerKategori.php';
$id = $_GET["id"];

if (hapusKategori($id) > 0) {
    echo "
    <script>
        alert('Data Berhasil Dihapus');
    </script>";
    header('location: kategori.php', true, 301);
    exit();
} else {
    echo "
    <script>
        alert('Data Gagal Dihapus');
    </script>
";
    header('location: kategori.php', true, 301);
    exit();
}
