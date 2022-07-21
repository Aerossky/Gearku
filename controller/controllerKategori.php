<?php
require '../../../controller/controller.php';
//controller kategori
{
    function tambahKategori($data)
    {
        global $conn;

        // ambil data dari tiap elemen dari form
        $kategori = htmlspecialchars($data["kategori"]);


        //query insert data
        $query = "INSERT INTO kategori VALUES
        ('','$kategori')";
        // masukin data
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function hapusKategori($id)
    {
        global $conn;

        $barang = query("SELECT * FROM barang WHERE kategori_id = $id");
        if($barang){

        }else{
            //query hapus data
            mysqli_query($conn, "delete from kategori where id = $id");
            return mysqli_affected_rows($conn);
        }

    }

    function ubahKategori($data)
    {
        global $conn;
        // ambil data dari tiap elemen dari form
        $id = $data["id"];
        $nama = htmlspecialchars($data["nama"]);


        //query insert data
        $query = "UPDATE kategori SET
              nama = '$nama'  
              WHERE id = $id         
              ";
        // masukin data
        return mysqli_query($conn, $query);
    }
}