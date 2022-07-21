<?php
require 'controller/controller.php';
$terlaris = query("SELECT * FROM barang where status ='terlaris'");
$akanDatang = query("SELECT * FROM barang where status ='akan datang'");

?>
<!DOCTYPE html>
<html lang="en" translate="no">

<head>
    <meta charset="UTF-8">
    <meta name="google" content="notranslate">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GearKu Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--font awesome-->
    <!-- icon -->
    <script src="https://kit.fontawesome.com/72479952c2.js" crossorigin="anonymous"></script>

    <!--internal css-->
    <link rel="stylesheet" href="view/user/assets/style.css">

    <!--logo-->
    <link rel="shortcut icon" href="view/user/assets/img/GU.png" type="image/x-icon">
</head>

<body>
<?php
require 'view/user/template/header.php';
?>
<div class="banner d-flex justify-content-center align-items-center">
    <h1><span class="auto-input"></span></h1>
</div>
<!-- Section About -->
<div class="about">
    <div class="konten mb-3">
        <div class="title">PRODUK TERLARIS</div>
    </div>



    <div class="container">
        <div class="row justify-content-center ">
            <?php foreach ($terlaris as $row) : ?>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 col-6 mb-3">
                    <div class="card  shadow-sm">
                        <img src="view/admin/imgBarang/<?= $row["foto"] ?>" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <div class="card-title "><h4 class="fontHp"><?php echo $row["namaBarang"] ?></h4></div>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo rupiah($row["harga"]) ?></h6>
                        </div>

                        <div class="card-footer text-center ">
                            <!--                            <button type="button" class="btn btn-light border border-dark  buttonSize m-2">Detail-->
                            <!--                            </button>-->
                            <a type="button" class="btn btn-dark buttonSize g-3"
                               href="view/user/detailProduk.php?id=<?= $row["id"] ?>">Beli</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!--Penutup Section About -->

<!--Akan Datang-->
<div class="newItem">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-5 col-sm-7 col-md-7  d-flex flex-column justify-content-center align-items-center  ">
                <span class="akanText">AKAN DATANG!</span>
                <p style="font-size: 15px; color: #808080;" class="m-3 text-center">GearKu akan menyediakan barang
                    terbaru dari setiap brand.</p>
                <button class="btn btn-outline-light m-3">Lebih Lanjut</button>
            </div>

            <div class="col-lg-7 col-sm-5 col-md-5">
                <div class="row g-3 justify-content-center">
                    <?php foreach ($akanDatang as $a) : ?>
                        <div class="col-md-6 col-sm-6 col-md-6 ">
                            <div class="image">
                                <img class="image__img" src="view/admin/imgBarang/<?= $a["foto"] ?>" alt="car"
                                     srcset=""/>
                                <div class="image__overlay image__overlay--blur">
                                    <div class="image__title"><?php echo$a["merk"]." ". $a["namaBarang"] ?></div>
                                    <p class="image__description">Segera Hadir Dalam Minggu Ini</p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>




                </div>
            </div>

        </div>
    </div>
</div>
<!--PENUTUP Akan Datang-->

<!--Mengapa kami?-->

<div class="whyUs d-flex justify-content-center align-items-center flex-column">
    <div class="mb-3">
        <div class="head ">Mengapa Kami?</div>
    </div>
    <div class="container text-center ">
        <div class="row justify-content-evenly align-items-center logo">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-4">
                <i class="fa-solid fa-money-bill"></i><br>
                <p class="title">Murah</p>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-4">
                <i style=" font-size: 70px;" class="fa-solid fa-hands-holding-child fa-10x logo"></i><br>

                <p class="title">Bergaransi</p></div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-4 ">
                <i class="fa-solid fa-gauge-simple-high logo"></i><br>
                <p class="title">Mudah</p></div>

        </div>
    </div>
</div>
<!-- penutup Mengapa kami?-->

<!-- hubungi kami-->
<div class="contactUs" id="hubungi">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class=" col-lg-5 d-flex justify-content-center align-items-center ">
                <img src="view/user/assets/img/logogearku.jpg" alt="" srcset="" class="img-fluid">
            </div>

            <div class="teks1 col-lg-7 d-flex justify-content-center align-items-center flex-column">
                <h2 style=" font-weight: 600; margin-top: 10px">
                    Kesulitan Mencari Barang?
                </h2>
                <p style="font-family: 'Inter', sans-serif; font-weight: 200; text-align: center">Kami akan membantu
                    anda dengan senang
                    hati.</p>
                <!-- Button trigger modal -->
                <a href="https://wa.me/6281276419489?text=Halo%20Gearku%20saya%20ingin%20tau%20lebih%20lanjut%20mengenai%20produk"
                   target="_blank">
                    <button type=" button" class="btn btn-dark">
                        Hubungi Kami
                    </button>
                </a>
            </div>

        </div>
    </div>
</div>
<!--Penutup hubungi kami-->
<!--footer-->
<?php
require 'view/user/template/footer.php';
?>
<!--penutup footer-->

<!--auto type-->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
    var typed = new Typed(".auto-input", {
        strings: ["Selamat Datang", "GearKu Adalah Gearmu", "Harga Terjangkau"],
        typeSpeed: 100,
        backSpeed: 30,
        loop: true,
    });
</script>
<!--penutup auto type-->
<?php
require 'view/user/template/headerScript.php';
?>
</body>

</html>