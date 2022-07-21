<?php
require '../../../controller/controller.php';


function ubahProfil($data){
    global $conn;

    $id = $data["id"];
    //cek password
    $result = mysqli_query($conn, "SELECT * FROM user WHERE id ='$id'");
    //cek password
    $passwordLama = htmlspecialchars($data["passwordLama"]);
    $row = mysqli_fetch_assoc($result);
    if (!password_verify($passwordLama, $row["password"])) {
        return 0;
    }
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $passwordBaru = htmlspecialchars($data["passwordBaru"]);
    $password = password_hash($passwordBaru, PASSWORD_DEFAULT);
    //query insert data
    $query = "UPDATE user SET
              nama = '$nama'  ,
              email = '$email',
              password = '$password'   
              WHERE id = $id         
              ";
    // masukin data
    return mysqli_query($conn, $query);

}