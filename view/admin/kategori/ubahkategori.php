<?php

//ambil data dari url
$id = $k["id"];
// query data barang berdasarkan id
$ktg = query("SELECT * FROM kategori where id = $id")[0];

// cek apakah tombol submit sudah di tekan apa belum

if (isset($_POST["ubahKategori"])) {

    //cek apakah data berhasil di ubah atau tidak
    if (ubahKategori($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil DiUbah');
                document.location.href = 'kategori.php';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Gagal DiUbah');
            document.location.href = 'kategori.php';
        </script>
    ";
    }
}

?>

<div class="modal fade" id="ubahkategori<?php echo $k['id']; ?>" tabindex="-1"
     aria-labelledby="ubahkategori<?php echo $k['id']; ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Barang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                    <div class="col-md-12">
                        <label for="nama" class="form-label">Nama Barang</label>
                        <input type="hidden" name="id" value="<?= $ktg["id"] ?>">
                        <input type="text" class="form-control" id="nama" name="nama" required
                               value="<?= $ktg["nama"] ?>">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type=" submit" name="ubahKategori" class="btn btn-primary" onSubmit="window.location.reload()">
                            Ubah
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>