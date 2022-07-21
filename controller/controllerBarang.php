<?php
require '../../../controller/controller.php';
//Controller barang

// tambah
function tambah($data)
{
    global $conn;

    // ambil data dari tiap elemen dari form
    $nama = htmlspecialchars($data["nama"]);
    $merk = htmlspecialchars($data["merk"]);
    $kategori = htmlspecialchars($data["kategori"]);
    $status = htmlspecialchars($data["status"]);
    $garansi = htmlspecialchars($data["garansi"]);
    $linky = htmlspecialchars($data["link"]);
    $harga = htmlspecialchars($data["harga"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);


    // upload gambar
    $gambar = uploadBarang();

    if (!$gambar) {
        return false;
    }

    //query insert data
    $query = "INSERT INTO barang VALUES
        ('','$nama','$merk','$deskripsi','$kategori',$harga,'$status','$garansi','$linky','$gambar')";
    // masukin data
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function uploadBarang()
{

//    nama, tipe, tmp, error, size
    $namaFile = $_FILES['gambarBarang']['name'];
    $ukuranFile = $_FILES['gambarBarang']['size'];
    $error = $_FILES['gambarBarang']['error'];
    $tmpName = $_FILES['gambarBarang']['tmp_name'];

    //cek apakah ada gambar yang di upload
    if ($error === 4) {
        echo "<script>
            alert('Pilih gambar terlebih  dahulu!');
        </script>";
        return false;
    }

    //cek apakah yang diupload gambar atau tidak
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
//    mengambil paling akhir
    $ekstensiGambar = strtolower(end($ekstensiGambar));

//    string array
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
    move_uploaded_file($tmpName, '../imgBarang/' . $namaFileBaru);

    return $namaFileBaru;

}

function hapus($id)
{
    global $conn;
    // menghapus foto dalam folder(unlink)
    $ambil = mysqli_query($conn, "SELECT *  FROM barang WHERE id = $id");
    $row = mysqli_fetch_assoc($ambil);
    $namaFile = $row["foto"];
    unlink("../imgBarang/" . $namaFile);

    //query
    mysqli_query($conn, "delete from barang where id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;
    // ambil data dari tiap elemen dari form
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $merk = htmlspecialchars($data["merk"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $kategori = htmlspecialchars($data["kategori"]);
    $harga = htmlspecialchars($data["harga"]);
    $status = htmlspecialchars($data["status"]);
    $garansi = htmlspecialchars($data["garansi"]);
    $linky = htmlspecialchars($data["link"]);
    $gambarLama = htmlspecialchars($data["gambarLamaBarang"]);

    //cek apakah user pilih gambar atau tidak
    if ($_FILES['gambarBarang']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = uploadBarang();
    }
    //query insert data
    $query = "UPDATE barang SET
              namaBarang = '$nama'  ,
              merk = '$merk',
              deskripsi = '$deskripsi',
              kategori_id = '$kategori',
              harga = '$harga',
              status = '$status'  ,
              garansi = '$garansi',
              link_youtube = '$linky',
              foto = '$gambar'
              WHERE id = $id         
              ";
    // masukin data
    return  mysqli_query($conn, $query);
}