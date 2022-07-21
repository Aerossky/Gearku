<?php

require '../../../controller/controller.php';
$keyword = $_GET["keyword"];
//$query = "SELECT k.nama,
//b.id,
//namaBarang,
//merk	,
//deskripsi,
//kategori_id	,
//harga	,
//status 	,
//garansi	,
//link_youtube	,
//foto FROM barang  AS b INNER JOIN kategori as k ON b.kategori_id = k.id  WHERE
//                namaBarang LIKE '%$keyword%' OR
//                merk LIKE '%$keyword%' OR
//                nama LIKE '%$keyword%'
//                ";

//$query = "SELECT * FROM tbl_mahasiswa_search WHERE jurusan LIKE ? AND (nama_mahasiswa LIKE ? OR alamat LIKE ? OR jurusan LIKE ? OR jenis_kelamin LIKE ? OR tgl_masuk LIKE ?) ORDER BY id DESC";


$query = "SELECT * FROM barang WHERE status != 'akan datang'  AND
                     (namaBarang LIKE '%$keyword%' OR
                     merk LIKE '%$keyword%' 
                      )
                     ";
$barang = query($query);


?>

<div class="row justify-content-center " style="margin-top: 10px">

    <?php foreach ($barang as $row) : ?>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 col-6 mb-3">
            <div class="card  shadow-sm">
                <img src="../../view/admin/imgBarang/<?= $row["foto"] ?>" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <div class="card-title"><h4><?php echo $row["namaBarang"] ?></h4></div>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo rupiah($row["harga"]) ?></h6>
                </div>

                <div class="card-footer text-center ">
                    <!--                            <button type="button" class="btn btn-light border border-dark  buttonSize m-2">Detail-->
                    <!--                            </button>-->
                    <a type="button" class="btn btn-dark buttonSize g-3"
                       href="detailProduk.php?id=<?= $row["id"] ?>">Beli</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</div>