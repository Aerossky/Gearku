<!--  -->
<?php require '../../../controller/controllerAkun.php';


//<!-- sidebar -->
include_once '../view/templateView/sidebar.php';

//direct user kalau paksa masuk melalui url
if(!($profil["role"] == "pemilik")){
    $_SESSION = [];
    session_unset();
    session_destroy();
    exit;
}

//<!-- topbar -->
include_once '../view/templateView/topbar.php';

$user = query("SELECT * FROM user ");
?>



<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Akun Pegawai</h1>


    <!-- DataTales Example -->

    <div class="card shadow mb-4">
        <div class="card-header py-3">


            <?php require 'tambahakun.php'; ?>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahAkun">
                Tambah Akun
            </button>


        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead class="text-center">
                    <tr>

                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Foto</th>
                        <th width="" scope="col">Aksi</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($user as $u) : ?>
                        <tr>

                            <td scope="row" class="text-center"><?php echo $i ?></td>
                            <td scope="row" class="text-center"><?php echo $u["nama"] ?></td>
                            <td scope="row" class="text-center"><?php echo $u["email"] ?></td>
                            <td scope="row" class="text-center"><?php echo $u["role"] ?></td>
                            <td scope="row" class="text-center "><img src="../assets/imgFotoUser/<?php echo $u["foto"] ?>"
                                                                     alt="" srcset="" class="img-fluid  imageResize"></td>
                            <td scope="row" class="d-flex justify-content-center">


                                <!-- hapus -->
                                <a href="hapusakun.php?id=<?php echo $u["id"]; ?>">
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
<!-- /.container-fluid -->

</div>

<!-- footer -->
<?php include_once '../view/templateView/footer.php'; ?>