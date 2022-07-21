<?php
require '../../controller/controller.php';
$barang = query("SELECT * FROM barang WHERE status != 'akan datang'");

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produk</title>
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
<body>
<?php
require 'template/headers.php';
?>

<div class="pembatasProduk"></div>
<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/carousel1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/img/carousel2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/img/carousel3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!--search bar-->

    <div class="row container" style="margin-top: 10px">

        <div class="d-flex flex-row">
            <input type="text" class="form-control" name="keyword" id="keyword" placeholder="cari merk.. barang.." autocomplete="off">
        </div>

    </div>


    <!--card produk-->
    <div id="produkCari">
        <div class="row justify-content-center " style="margin-top: 10px">

            <?php foreach ($barang as $row) : ?>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 col-6 mb-3">
                    <div class="card  shadow-sm">
                        <img src="../../view/admin/imgBarang/<?= $row["foto"] ?>" class="card-img-top" alt="..." style="width: auto; object-fit: cover;">
                        <div class="card-body text-center">
                            <div class="card-title "><h4 class="fontHp"><?php echo $row["namaBarang"] ?></h4></div>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo rupiah($row["harga"]) ?></h6>
                            <?php
                                if($row['status'] == 'ada' || $row['status'] == 'terlaris'){
                            ?>
                            <div class="badge bg-success bg-gradient rounded-pill mb-2">Ada</div>
                            <?php } else {?>
                            <div class="badge bg-danger bg-gradient rounded-pill mb-2">Tidak Ada</div>
                            <?php
                                }
                            ?>
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
    </div>


</div>


<!--footer-->
<?php
require 'template/footer.php';
require 'template/headerScript.php';
?>

<script src="js/script.js"></script>
</body>
</html>
