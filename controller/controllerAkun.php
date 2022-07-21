<?php
require '../../../controller/controller.php';
//controller akun
{
    function upload()
    {

        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];

        //cek apakah ada gambar yang di uplaod
        if ($error === 4) {
            echo "<script>
            alert('Pilih gambar terlebih  dahulu!');
        </script>";
            return false;
        }

        //cek apakah yang diupload gambar atau tidak
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));

        if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
            echo "<script>
        alert('Yang anda upload bukan gambar!');
    </script>";
            return false;
        }

        //cek jika ukuran gambar terlalu besar
        if ($ukuranFile > 100000) {
            echo "<script>
        alert('Ukuran Gambar Terlalu Besar');
    </script>";
            return false;
        }

        //kalau foto sudah melwati pengecekan
        //generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;
        move_uploaded_file($tmpName, '../assets/imgFotoUser/' . $namaFileBaru);

        return $namaFileBaru;
    }

    function registrasi($data){
        global $conn;

        $username = strtolower(stripslashes($data["nama"]));
        $email = htmlspecialchars($data["email"]);
        $password = mysqli_real_escape_string($conn,$data["password"]);
        $password2 = mysqli_real_escape_string($conn,$data["password2"]);
        $role =htmlspecialchars($data["role"]);


        //cek username sudah ada atau belum
        $result = mysqli_query($conn,"SELECT nama FROM user WHERE 
                              nama = '$username'");

        if(mysqli_fetch_assoc($result)){
            echo"<script>
                      alert('Username sudah terdaftar!');
                </script>";
            return false;
        }

        //cek konfirmasi pasword
        if($password !== $password2){
            echo"<script>
                      alert('konfirmasi password tidak sesuai!');
                </script>";
            return false;
        }
        //enkripsi password pada user
        $password = password_hash($password, PASSWORD_DEFAULT);


        // upload gambar
        $gambar = upload();

        if (!$gambar) {
            return false;
        }

        //menambahkan user ke database
        mysqli_query($conn,"INSERT INTO user VALUES('','$username','$email','$password','$role','$gambar')");

        return mysqli_affected_rows($conn);

    }

    function hapus($id)
    {
        global $conn;

        // menghapus foto dalam folder(unlink)
        $ambil = mysqli_query($conn, "SELECT *  FROM user WHERE id = $id");
        $row = mysqli_fetch_assoc($ambil);
        $namaFile = $row["foto"];
        unlink("../assets/imgFotoUser/" . $namaFile);


        //query hapus data
        mysqli_query($conn, "delete from user where id = $id");
        return mysqli_affected_rows($conn);
    }
}