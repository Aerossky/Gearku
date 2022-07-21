<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "gearku");
//$conn = mysqli_connect("172.96.191.25", "rajija_risky", "gearku123", "rajija_gearku");
// fungsi buat manggil data sesuai tabel
function query($query)
{
    global $conn;
    // ambil dari tabel / query
    $result = mysqli_query($conn, $query);
    $rows = [];
    //selagi ada data
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function logout(){
    session_start();
    $_SESSION = [];
    session_unset();
    session_destroy();
}

function rupiah($angka){

    $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
    return $hasil_rupiah;

}




