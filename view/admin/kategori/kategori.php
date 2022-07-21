<!--  -->
<?php require '../../../controller/controllerKategori.php'; ?>
<!-- sidebar -->
<?php include_once '../view/templateView/sidebar.php'; ?>

<!-- topbar -->
<?php include_once '../view/templateView/topbar.php'; ?>

<!--Tarik data database-->
<?php
$kategori = query("SELECT * FROM kategori ");
?>


<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Kategori</h1>


    <!-- DataTales Example -->

    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <!--modal tammbah kategori-->
            <?php require 'tambahkategori.php'; ?>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahKategori">
                Tambah Kategori
            </button>


        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead class="text-center">
                    <tr>

                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th width="" scope="col">Aksi</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($kategori as $k) : ?>
                        <tr>
                            <td class="text-center"><?= $i; ?></td>
                            <td class="text-center" width="35%"><?= $k['nama'] ?></td>
                            <td class="d-flex justify-content-center">
                                <!-- ubah -->
                                <?php require 'ubahkategori.php'; ?>
                                    <!-- <button type="button" class="btn btn-warning mx-3">Ubah</button> -->
                                    <button type="button" class="btn btn-warning mx-3" data-bs-toggle="modal" data-bs-target="#ubahkategori<?php echo $k['id']; ?>">
                                        Ubah
                                    </button>



                                <!-- hapus -->
                                <a href="hapuskategori.php?id=<?php echo $k["id"]; ?>">
                                    <button type="button" class="btn btn-danger"
                                            onclick="return confirm('Yakin Untuk Menghapus Data Ini?')">Hapus
                                    </button>
                                </a>

                            </td>
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

<!-- footer -->
<?php include_once '../view/templateView/footer.php'; ?>
