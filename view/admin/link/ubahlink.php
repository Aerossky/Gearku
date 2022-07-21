<?php

//ambil data dari url
$id = 1;
// query data barang berdasarkan id
$link = query("SELECT * FROM sosialmedia where id = 1")[0];

// cek apakah tombol submit sudah di tekan apa belum

if (isset($_POST["ubahLink"])) {

    //cek apakah data berhasil di ubah atau tidak
    if (ubahLink($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil DiUbah');
                document.location.href = 'link.php';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Gagal DiUbah');
            document.location.href = 'link.php';
        </script>
    ";
    }
}

?>

<div class="modal fade" id="ubahlink" tabindex="-1"
     aria-labelledby="ubahlink" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sosial Media</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                    <div class="col-md-12">
                        <label for="ig" class="form-label">Link Instagram</label>
                        <input type="hidden" name="id" value="1">
                        <input type="text" class="form-control" id="ig" name="ig" required
                               value="<?= $link["instagram"] ?>">
                    </div>

                    <div class="col-md-12">
                        <label for="fb" class="form-label">Link Facebook</label>
                        <input type="hidden" name="id" value="1">
                        <input type="text" class="form-control" id="fb" name="fb" required
                               value="<?= $link["facebook"] ?>">
                    </div>


                    <div class="col-md-12">
                        <label for="wa" class="form-label">Link Whatsapp</label>
                        <input type="hidden" name="id" value="1">
                        <input type="text" class="form-control" id="wa" name="wa" required
                               value="<?= $link["whatsapp"] ?>">
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type=" submit" name="ubahLink" class="btn btn-primary" onSubmit="window.location.reload()">
                            Ubah
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>