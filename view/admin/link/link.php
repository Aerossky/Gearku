<!--  -->
<?php require '../../../controller/controllerLink.php'; ?>
<!-- sidebar -->
<?php include_once '../view/templateView/sidebar.php'; ?>

<!-- topbar -->
<?php include_once '../view/templateView/topbar.php'; ?>

<!--Tarik data database-->
<?php
$sosial = query("SELECT * FROM sosialmedia ");
?>

<div class="card shadow mb-4">
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Link Sosial Media</h1>


        <!-- DataTales Example -->

        <div class="card shadow mb-4">
            <div class="card-header py-3">

                <!--modal tammbah link-->
                <?php require 'ubahlink.php'; ?>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ubahlink">
                    Ubah Link Sosial Media
                </button>


            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" >
                        <thead class="text-center">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Instagram</th>
                            <th scope="col">Facebook</th>
                            <th scope="col">Whatsapp</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($sosial as $s) : ?>
                            <tr>
                                <td class="text-center" ><?= $i; ?></td>
                                <td class="text-center" ><?= $s['instagram'] ?></td>
                                <td class="text-center" ><?= $s['facebook'] ?></td>
                                <td class="text-center" ><?= $s['whatsapp'] ?></td>
                            </tr>
                            <?php $i++ ?>
                        <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

</div>

<!-- footer -->
<?php include_once '../view/templateView/footer.php'; ?>
