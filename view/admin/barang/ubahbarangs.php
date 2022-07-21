<?php
//<!--Controller-->
require '../../../controller/controllerBarang.php';
//ambil data dari url
$id = $_GET["id"];
// query data barang berdasarkan id
$brg = query("SELECT * FROM barang where id = $id")[0];
$kategori = query("SELECT * FROM kategori ");

// var_dump($brg);


// cek apakah tombol submit sudah di tekan apa belum

if (isset($_POST["ubah"])) {

    //cek apakah data berhasil di ubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil DiUbah');
                document.location.href = 'barang.php';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Gagal DiUbah');
            document.location.href = 'barang.php';
        </script>
    ";
    }
}

?>

<!-- sidebar -->
<?php include_once '../view/templateView/sidebar.php'; ?>

<!-- topbar -->
<?php include_once '../view/templateView/topbar.php'; ?>
<div class="container-fluid">
    <div class=" card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Ubah Barang</h6>
        </div>
        <div class="card-body">
            <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                <div class="col-md-12">
                    <label for="nama" class="form-label">Nama Barang</label>
                    <input type="hidden" name="id" value="<?= $brg["id"] ?>">
                    <input type="hidden" name="gambarLamaBarang" value="<?= $brg["foto"]; ?>">
                    <input type="text" class="form-control" id="nama" name="nama" required
                           value="<?= $brg["namaBarang"] ?>">
                </div>
                <div class="col-md-12">
                    <label for="merk" class="form-label">Merk Barang</label>
                    <input type="text" class="form-control" id="merk" name="merk" required
                           value="<?= $brg["merk"] ?>">
                </div>
                <div class="col-md-12">
                    <label for="kategori" class="form-label">Kategori Barang</label>
                    <select id="kategori" class="form-select" name="kategori">
                        <?php foreach ($kategori as $k) : ?>
                            <!--kondisi untuk option value-->
                            <?php if ($k['id'] == $brg["kategori_id"])  : ?>
                                <option value=" <?= $k['id'] ?>"><?= $k['nama'] ?></option>
                            <?php else: ?>
                                <option value=" <?= $k['id'] ?>"><?= $k['nama'] ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="status" class="form-label">Status Barang</label>
                    <select id="status" class="form-select" name="status">
                        <option selected value="<?= $brg["status"] ?>"><?= $brg["status"] ?></option>
                        <option value="ada">Ada</option>
                        <option value="tidak ada">Tidak Ada</option>
                        <option value="terlaris">Terlaris</option>
                        <option value="akan datang">Akan Datang</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="garansi" class="form-label">Garansi Barang</label>
                    <select id="garansi" class="form-select" name="garansi">
                        <!-- kondisi untuk tidak memunculkan option yang sudah ada di database -->

                        <option selected value="<?= $brg["garansi"] ?>"><?= $brg["garansi"] ?></option>
                        <?php if ($brg["garansi"] == "ada"): ?>
                            <option value="tidak ada">Tidak Ada</option>
                        <?php else: ?>
                            <option value="ada">Ada</option>
                        <?php endif; ?>
                    </select>
                </div>

                <div class="col-6">
                    <label for="link" class="form-label">Link Youtube Barang</label>
                    <input type="text" class="form-control" id="link" name="link" required
                           value="<?= $brg["link_youtube"] ?>">
                </div>

                <div class="col-6">
                    <label for="harga" class="form-label">Harga Barang</label>
                    <input type="number" class="form-control" id="harga" name="harga" required
                           value="<?= $brg["harga"] ?>">
                </div>

                <div class="col-12">
                    <label for="gambarBarang" class="form-label">Gambar Barang
                        <img src="../imgBarang/<?= $brg['foto'] ?>" alt="" srcset="" class="img-fluid w-25">
                    </label>
                    <input type="file" class="form-control" name="gambarBarang" id="gambarBarang">
                </div>

                <div class="col-12">
                    <label for="deskripsi" class="form-label">Deskripsi Barang</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi"><?= $brg["deskripsi"] ?></textarea>
                </div>

                <div class="modal-footer">
                    <a href="barang.php" style="text-decoration: none;">
                        <button type="button" class="btn btn-secondary">Batal</button>
                    </a>
                    <button type=" submit" name="ubah" class="btn btn-primary">
                        Ubah
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
</div>
<!-- footer -->
<?php include_once '../view/templateView/footer.php'; ?>
