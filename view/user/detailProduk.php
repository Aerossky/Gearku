<?php
require '../../controller/controller.php';


//ambil data dari url
$id = $_GET["id"];
// query data barang berdasarkan id
$brg = query("SELECT * FROM barang where id = $id")[0];



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Produk</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--font awesome-->
    <!-- icon -->
    <script src="https://kit.fontawesome.com/72479952c2.js" crossorigin="anonymous"></script>

    <!--internal css-->
    <link rel="stylesheet" href="assets/style.css">


    <!--logo-->
    <link rel="shortcut icon" href="assets/img/GU.png" type="image/x-icon">
</head>
<body style="background: black">
<?php
require 'template/headerss.php';
?>
<div class="pembatas"></div>
<div class="container detail">
    <div class="row justify-content-center align-items-center">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 col-12 ">
            <img class="img-fluid" src="../admin/imgBarang/<?=$brg["foto"]?>">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 col-12 spasi">
            <h2><?= $brg["merk"] . " " . $brg["namaBarang"] ?></h2>
            <h3><?= rupiah($brg["harga"]) ?></h3>
            <div class="d-flex ">
                <div>
                    <h6>
                        Status
                        <?php
                        if ($brg["status"] == "tidak ada") {
                            echo "<button class='btn btn-danger btn-sm produkButtonSize' disabled>Tidak Ada</button>";
                        } else {
                            echo "<button class='btn btn-success btn-sm produkButtonSize' disabled>Ada</button>";
                        }
                        ?>
                    </h6>
                </div>
                <div>
                    <h6>
                        Garansi
                        <?php
                        if ($brg["garansi"] == "tidak ada") {
                            echo "<button class='btn btn-danger btn-sm produkButtonSize' disabled>Tidak Ada</button>";
                        } else {
                            echo "<button class='btn btn-success btn-sm produkButtonSize' disabled>Ada</button>";
                        }
                        ?>
                    </h6>
                </div>
            </div>


            <p class="text-secondary mt-3">
                <?= $brg["deskripsi"] ?>
            </p>
            <div class="text-center">
                <a href="<?= $brg["link_youtube"] ?>" class="btn btn-secondary buttonDetail" target="_blank"><i
                            class="fa-brands fa-youtube" style="color: red"></i>
                    Review
                </a>
                <a href="https://api.whatsapp.com/send?phone=6281276419489&text=Halo%20GearKu%20saya%20ingin%20bertanya%20lebih%20lanjut%20mengenai%20produk%20<?= $brg["merk"] . " " . $brg["namaBarang"]?> "
                   class="btn btn-success buttonDetail" target="_blank"><i class="fa-brands fa-whatsapp"></i>
                    Beli
                </a>

            </div>

        </div>

    </div>

</div>


<?php
require 'template/headerScript.php';
?>


</body>
</html>