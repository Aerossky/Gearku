<!--  -->
<?php
require '../../../controller/controllerProfil.php';
?>
<!-- sidebar -->
<?php include_once '../view/templateView/sidebar.php'; ?>

<!-- topbar -->
<?php include_once '../view/templateView/topbar.php'; ?>



<div class="card-body">

<div class="card text-center">
    <div class="card-header">
        Profil Anda
    </div>
    <div class="card-body">
        <img src="../assets/imgFotoUser/<?= $row["foto"]?>" class="img-fluid imageResize" alt="...">
        <br>
        <br>
        <h5 class="card-title"><b><?php echo $row["nama"] ?></b></h5>
        <p class="card-text"><?php echo $row["email"] ?></p>
        <p class="card-text"><?php echo $row["role"] ?></p>
        <?php require 'ubahProfile.php'; ?>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ubahProfil">
            Ubah Data
        </button>
    </div>

</div>

</div>











</div>
<!-- footer -->
<?php include_once '../view/templateView/footer.php'; ?>
