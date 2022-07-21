<?php
require '../../../controller/controller.php';
//controller link
{
    function ubahLink($data)
    {
        global $conn;
        // ambil data dari tiap elemen dari form
        $id = $data["id"];
        $instagram = htmlspecialchars($data["ig"]);
        $facebook = htmlspecialchars($data["fb"]);
        $whatsapp = htmlspecialchars($data["wa"]);


        //query insert data
        $query = "UPDATE sosialmedia SET
              instagram = '$instagram',
              facebook = '$facebook',
              whatsapp = '$whatsapp'
              WHERE id = $id         
              ";
        // masukin data
        return mysqli_query($conn, $query);
    }

}