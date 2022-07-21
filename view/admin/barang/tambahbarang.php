<?php

$kategori = query("SELECT * FROM kategori");
// cek apakah tombol submit sudah di tekan apa belum
if (isset($_POST["tambah"])) {

    // var_dump($_POST);
    // var_dump($_FILES);
    // die;


    //cek apakah data berhasil di tambah atau tidak
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'barang.php';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Gagal Ditambahkan');
            document.location.href = 'barang.php';
        </script>
    ";
    };
}

?>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Barang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                    <div class="col-md-12">
                        <label for="nama" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="col-md-12">
                        <label for="merk" class="form-label">Merk Barang</label>
                        <input type="text" class="form-control" id="merk" name="merk" required>
                    </div>
                    <!-- <div class="col-12">
                        <label for="kategori" class="form-label">Kategori Barang</label>
                        <input type="text" class="form-control" id="kategori" name="kategori">
                    </div> -->

                    <div class="col-md-12">
                        <label for="kategori" class="form-label">Kategori Barang</label>
                        <select required id="kategori" class="form-select" name="kategori" >
                            <option selected>Pilih..</option>
                            <?php foreach ($kategori as $k) : ?>
                                <option value="<?= $k['id'] ?>"><?= $k['nama'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="status" class="form-label">Status Barang</label>
                        <select required id="status" class="form-select" name="status" >
                            <option selected>Pilih..</option>
                            <option value="ada">Ada</option>
                            <option value="tidak ada">Tidak Ada</option>
                            <option value="terlaris">Terlaris</option>
                            <option value="akan datang">Akan Datang</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="garansi" class="form-label">Garansi Barang</label>
                        <select required id="garansi" class="form-select" name="garansi" >
                            <option selected>Pilih..</option>
                            <option value="ada">Ada</option>
                            <option value="tidak ada">Tidak Ada</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <label for="link" class="form-label">Link Youtube Barang</label>
                        <input type="text" class="form-control" id="link" name="link" required>
                    </div>

                    <div class="col-12">
                        <label for="harga" class="form-label">Harga Barang</label>
                        <input type="number" class="form-control" id="harga" name="harga" required>
                    </div>

                    <div class="col-12">
                        <label for="gambarBarang" class="form-label">Gambar Barang</label>
                        <input type="file" class="form-control" id="gambarBarang" name="gambarBarang" required>
                    </div>

                    <div class="col-12">
                        <label for="deskripsi" class="form-label">Deskripsi Barang</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>