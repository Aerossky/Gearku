<!--Controller-->
<?php require '../../../controller/controllerBarang.php'; ?>
<!-- sidebar -->
<?php include_once '../view/templateView/sidebar.php'; ?>

<!-- topbar -->
<?php include_once '../view/templateView/topbar.php'; ?>

<?php
$barang = query("SELECT * FROM barang ");
$kategori = query("SELECT * FROM kategori ");
?>


<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Barang</h1>


<!-- DataTales Example -->

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <?php require 'tambahbarang.php'; ?>

        <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Barang
        </button>


    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable">
                <thead class="text-center">
                    <tr>

                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Merk</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Status</th>
                        <th scope="col">Garansi</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Gambar</th>
                        <th width="" scope="col">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($barang as $row) : ?>
                        <tr>
                            <td scope="row" class="text-center"><?php echo $i ?></td>
                            <td scope="row" class="text-center"><?php echo $row["namaBarang"] ?></td>
                            <td scope="row" class="text-center"><?php echo $row["merk"] ?></td>
                            <?php foreach ($kategori as $k) {

                                if ($row['kategori_id'] == $k['id']) {
                                    echo " <td  class='text-center'>$k[nama]</td>";
                                }
                            }

                            ?>

                            <td scope="row" class="text-center"><?php echo $row["status"] ?> </td>
                            <td scope="row" class="text-center"><?php echo $row["garansi"] ?></td>
                            <td scope="row" class="text-center"><?php echo $row["deskripsi"] ?></td>
                            <td scope="row" class="text-center"><?php echo $row["harga"] ?></td>
                            <td scope="row" class="text-center"><img src="../imgBarang/<?php echo $row["foto"] ?>" alt="" srcset="" class="img-fluid imageResize">
                            </td>
                            <td scope="row" class="d-flex justify-content-center">

                                <!-- ubah -->
                                <?php require 'ubahbarang.php'; ?>
                                <!-- <button type="button" class="btn btn-warning mx-3">Ubah</button> -->
                                <a href="ubahbarangs.php?id=<?php echo $row["id"]; ?>"">
                            <button type=" button" class="btn btn-warning mx-3">
                                    <!--                                        data-bs-toggle="modal"-->
                                    <!--                                        data-bs-target="#ubahbarang-->
                                    <?php //echo $row['id']; 
                                    ?>
                                    <!--"-->

                                    Ubah
                                    </button>
                                </a>
                                <!-- hapus -->
                                <a href="hapusbarang.php?id=<?php echo $row["id"]; ?>">
                                    <button type="button" class="btn btn-danger" onclick="return confirm('Yakin Untuk Menghapus Data Ini?')">Hapus
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
<!-- /.container-fluid -->

</div>

<!-- footer -->
<?php include_once '../view/templateView/footer.php'; ?>